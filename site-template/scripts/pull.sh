#!/usr/bin/env bash
# Copy the live site's content (database + uploads) into the local wp-env.
# One direction only: server → local. Nothing is ever sent to the server.
#
# Needs: wp-env running (npm start) and the SSH alias below in ~/.ssh/config.
set -euo pipefail

SSH_HOST="ifastnet"                          # alias in ~/.ssh/config
REMOTE_PATH="public_html/__DOMAIN__"          # relative to the server home
REMOTE_PHP="/opt/alt/php82/usr/bin/php"
REMOTE_WP="$REMOTE_PHP ~/.local/bin/wp --path=$REMOTE_PATH"
LIVE_URL="https://__DOMAIN__"
LOCAL_URL="http://localhost:__PORT__"

cd "$(dirname "$0")/.."
mkdir -p .pull/db .pull/uploads

printf 'Això substitueix la base de dades local per la de %s. Continuar? [s/N] ' "$LIVE_URL"
read -r answer
[ "$answer" = "s" ] || [ "$answer" = "S" ] || { echo "Cancel·lat."; exit 1; }

echo "→ Exportant la base de dades del servidor"
ssh "$SSH_HOST" "$REMOTE_WP db export - --quiet" > .pull/db/live.sql
[ -s .pull/db/live.sql ] || { echo "La còpia ha sortit buida. Aturat."; exit 1; }

echo "→ Copiant les imatges i fitxers pujats"
rsync -az --delete "$SSH_HOST:$REMOTE_PATH/wp-content/uploads/" .pull/uploads/

WPL="npx wp-env run cli wp"
echo "→ Important a local"
$WPL db import wp-content/pull-db/live.sql --quiet
$WPL search-replace "$LIVE_URL" "$LOCAL_URL" --all-tables --skip-columns=guid --quiet
$WPL search-replace "${LIVE_URL#https:}" "${LOCAL_URL#http:}" --all-tables --skip-columns=guid --quiet

echo "→ Ajustos de l'entorn local"
# The live database doesn't know the local-only tools; switch them back on.
for tool in create-block-theme; do
	if $WPL plugin is-installed "$tool" >/dev/null 2>&1 && ! $WPL plugin is-active "$tool" >/dev/null 2>&1; then
		$WPL plugin activate "$tool" --quiet
	fi
done
# Local admin/password, so local login never depends on the live passwords.
if $WPL user get admin --field=ID >/dev/null 2>&1; then
	$WPL user update admin --user_pass=password --role=administrator --skip-email --quiet
else
	$WPL user create admin admin@localhost.test --role=administrator --user_pass=password --quiet
fi
$WPL user meta update admin locale ca --quiet || true
$WPL cache flush --quiet || true

rm -f .pull/db/live.sql  # keep .gitkeep
echo "✓ Fet. $LOCAL_URL · admin / password"
