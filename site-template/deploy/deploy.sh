#!/usr/bin/env bash
# Runs on the server, from the repo clone in ~/sites/__REPO__.
# Called by `npm run deploy` and by the GitHub Action after `git reset --hard origin/main`.
set -euo pipefail

export PATH="$HOME/.local/bin:/opt/alt/php82/usr/bin:$PATH"

REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
# shellcheck source=site.conf
source "$REPO_DIR/deploy/site.conf"

THEMES_DIR="$SITE_PATH/wp-content/themes"
WP="wp --path=$SITE_PATH --quiet"

# newer_same_major <installed> <latest>: true if latest is newer but keeps the
# same major number. Deploys never jump a major version (1.x → 2.0) on their own,
# never downgrade, and do nothing if the latest version is unknown.
newer_same_major() {
	[ -n "$1" ] && [ -n "$2" ] && [ "$1" != "$2" ] \
		&& [ "${1%%.*}" = "${2%%.*}" ] \
		&& [ "$(printf '%s\n%s\n' "$1" "$2" | sort -V | head -1)" = "$1" ]
}

# Tulip (parent theme) from its GitHub Releases.
#   TULIP_REF="latest"  → install the latest release if missing or older; WordPress
#                         keeps it up to date (theme updater + auto-updates on).
#   TULIP_REF="vX.Y.Z"  → pin: install exactly that version, auto-updates off.
TULIP_URL="https://github.com/bertuuk/tulip/releases"
tulip_have="$($WP theme get tulip --field=version 2>/dev/null || true)"
if [ "${TULIP_REF:-latest}" = "latest" ]; then
	tulip_latest="$(curl -fsSI "$TULIP_URL/latest" | tr -d '\r' | sed -n 's#^[Ll]ocation: .*/tag/v\{0,1\}##p' || true)"
	if [ -z "$tulip_have" ]; then
		echo "→ Tulip (latest release)"
		$WP theme install "$TULIP_URL/latest/download/tulip.zip" --force
	elif newer_same_major "$tulip_have" "$tulip_latest"; then
		echo "→ Tulip $tulip_have → $tulip_latest"
		$WP theme install "$TULIP_URL/latest/download/tulip.zip" --force
	elif [ -n "$tulip_latest" ] && [ "${tulip_have%%.*}" != "${tulip_latest%%.*}" ] && [ "$tulip_have" != "$tulip_latest" ]; then
		echo "! Tulip $tulip_latest is a new major version: update from Dashboard → Updates, or pin TULIP_REF=\"v$tulip_latest\"."
	fi
	$WP theme auto-updates enable tulip >/dev/null 2>&1 || true
else
	if [ "$tulip_have" != "${TULIP_REF#v}" ]; then
		echo "→ Tulip ${tulip_have:-not installed} → ${TULIP_REF#v} (pinned)"
		if curl -fsI "$TULIP_URL/download/$TULIP_REF/tulip.zip" >/dev/null 2>&1; then
			$WP theme install "$TULIP_URL/download/$TULIP_REF/tulip.zip" --force
		else
			# Versions before 1.1.0 have no release zip: take them from the git tag.
			TULIP_CACHE="$HOME/sites/.tulip/$TULIP_REF"
			if [ ! -d "$TULIP_CACHE/themes/tulip" ]; then
				rm -rf "$TULIP_CACHE"
				git -c advice.detachedHead=false clone -q --depth 1 --branch "$TULIP_REF" https://github.com/bertuuk/tulip.git "$TULIP_CACHE"
			fi
			rsync -a --delete "$TULIP_CACHE/themes/tulip/" "$THEMES_DIR/tulip/"
		fi
	fi
	$WP theme auto-updates disable tulip >/dev/null 2>&1 || true
fi

echo "→ Child theme $CHILD_SLUG"
rsync -a --delete "$REPO_DIR/$CHILD_SLUG/" "$THEMES_DIR/$CHILD_SLUG/"

if [ "$($WP option get stylesheet)" != "$CHILD_SLUG" ]; then
	echo "→ Activating $CHILD_SLUG"
	$WP theme activate "$CHILD_SLUG"
fi

for plugin in $PLUGINS; do
	if ! $WP plugin is-installed "$plugin"; then
		echo "→ Installing plugin $plugin"
		$WP plugin install "$plugin" --activate
	fi
done

# Own plugins from GitHub Releases.
#   <repo>/<slug>        → install the latest release if missing; WordPress keeps it
#                          up to date (plugin updater + auto-updates on).
#   <repo>/<slug>@<tag>  → pin: install exactly that version, auto-updates off.
for entry in ${GITHUB_PLUGINS:-}; do
	repo="${entry%%/*}"
	rest="${entry#*/}"
	slug="${rest%@*}"
	have="$($WP plugin get "$slug" --field=version 2>/dev/null || true)"
	if [ "$rest" != "$slug" ]; then
		tag="${rest#*@}"
		if [ "$have" != "${tag#v}" ]; then
			echo "→ $slug ${have:-not installed} → ${tag#v} (pinned)"
			$WP plugin install "https://github.com/bertuuk/$repo/releases/download/$tag/$slug.zip" --force --activate
		fi
		$WP plugin auto-updates disable "$slug" >/dev/null 2>&1 || true
	else
		# Latest tag, read from the redirect of /releases/latest (no API quota used).
		latest="$(curl -fsSI "https://github.com/bertuuk/$repo/releases/latest" | tr -d '\r' | sed -n 's#^[Ll]ocation: .*/tag/v\{0,1\}##p' || true)"
		# Install if missing; upgrade if older (e.g. a version without the
		# dashboard updater). Never downgrades: WordPress may already be ahead.
		if [ -z "$have" ]; then
			echo "→ $slug (latest release)"
			$WP plugin install "https://github.com/bertuuk/$repo/releases/latest/download/$slug.zip" --activate
		elif newer_same_major "$have" "$latest"; then
			echo "→ $slug $have → $latest"
			$WP plugin install "https://github.com/bertuuk/$repo/releases/latest/download/$slug.zip" --force --activate
		elif [ -n "$latest" ] && [ "${have%%.*}" != "${latest%%.*}" ] && [ "$have" != "$latest" ]; then
			echo "! $slug $latest is a new major version: update from Dashboard → Updates, or pin it with @v$latest."
		fi
		$WP plugin auto-updates enable "$slug" >/dev/null 2>&1 || true
	fi
	$WP plugin is-active "$slug" || $WP plugin activate "$slug"
done

$WP cache flush || true
echo "✓ Deployed $(git -C "$REPO_DIR" log -1 --format='%h %s')"
