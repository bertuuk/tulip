#!/usr/bin/env bash
# Turn this template into a new site repo.
#
#   bash init.sh <target-dir> <repo> <domain> <child-slug> "<Child Name>" <port>
#   bash init.sh ~/Documents/Projectes/Brako/brako-web brako-web brako.pro tulip-brako "Tulip Brako" 8890
#
# Copies the template to <target-dir> (which must be empty or not exist),
# fills in the placeholders and names the child theme folder after its slug.
set -euo pipefail

[ $# -eq 6 ] || { sed -n '2,8p' "$0"; exit 1; }
target="$1"; repo="$2"; domain="$3"; child="$4"; name="$5"; port="$6"
here="$(cd "$(dirname "$0")" && pwd)"

if [ -e "$target" ] && [ -n "$(ls -A "$target" 2>/dev/null | grep -v '^\.git$' || true)" ]; then
	echo "$target is not empty. Stopped."; exit 1
fi
mkdir -p "$target"
( cd "$here" && tar --exclude=./init.sh --exclude=./README.md -cf - . ) | ( cd "$target" && tar -xf - )
mv "$target/__CHILD__" "$target/$child"

grep -rl --null '__' "$target" --exclude-dir=.git | xargs -0 sed -i.bak \
	-e "s#__CHILD_NAME__#$name#g" \
	-e "s#__CHILD__#$child#g" \
	-e "s#__REPO__#$repo#g" \
	-e "s#__DOMAIN__#$domain#g" \
	-e "s#__TESTS_PORT__#$((port + 1))#g" \
	-e "s#__PORT__#$port#g"
find "$target" -name '*.bak' -delete

if grep -rn '__[A-Z_]*__' "$target" --exclude-dir=.git; then
	echo "Placeholders left (above). Check them."; exit 1
fi
echo "✓ $target ready ($repo · $domain · $child · localhost:$port)"
