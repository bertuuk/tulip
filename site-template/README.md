# Site template

Starting point for a WordPress site built on Tulip: a child theme, local development with wp-env, deploys to the server on push, and a script to copy live content to local. It is the setup proven on brako.pro (`bertuuk/brako-web`).

The `tulip-new-site` skill uses it. To do it by hand:

```bash
bash site-template/init.sh <target-dir> <repo> <domain> <child-slug> "<Child Name>" <port>
# e.g.
bash site-template/init.sh ~/Documents/Projectes/Brako/brako-web brako-web brako.pro tulip-brako "Tulip Brako" 8890
```

| Placeholder | Example | Used in |
| --- | --- | --- |
| `__REPO__` | `brako-web` | `package.json`, `deploy.sh` (server clone in `~/sites/__REPO__`) |
| `__DOMAIN__` | `brako.pro` | `site.conf` (`~/public_html/__DOMAIN__`), `pull.sh` |
| `__CHILD__` | `tulip-brako` | child theme folder **and** slug (wp-env names a theme after its folder) |
| `__CHILD_NAME__` | `Tulip Brako` | child theme name |
| `__PORT__` / `__TESTS_PORT__` | `8890` / `8891` | local wp-env (Tulip itself uses 8888; one port per site) |

Fixed for Berta's server (ifastnet): SSH alias `ifastnet` on the Mac, `sv102.ifastnet.com:1394`, user `maindoma`, PHP 8.2 at `/opt/alt/php82/usr/bin/php`, WP-CLI at `~/.local/bin/wp`, and the server host key pinned in `.github/workflows/deploy.yml`. Change those if a site lives elsewhere.

What each file does:

- `deploy/site.conf` — site path, Tulip version (`latest` or `vX.Y.Z`), child slug, WordPress.org plugins, own plugins from GitHub Releases.
- `deploy/deploy.sh` — runs on the server: installs/updates Tulip and own plugins from their Releases (never jumps a major version, never downgrades), copies the child theme, activates it.
- `.github/workflows/deploy.yml` — on push to `main`, SSH to the server with a key that can only run the deploy (forced command). Skips quietly until the `DEPLOY_SSH_KEY` secret exists.
- `scripts/pull.sh` (`npm run pull`) — copies the live database and uploads into the local wp-env. Server → local only.
- `.wp-env.json` — local site with Tulip from `../../Tuk DS/tulip/themes/tulip` and the child theme; `.wp-env.override.json` (not committed) adds local plugin folders.

The `tulip-new-site` skill's detailed guide lives next to the template, so it is versioned with it:

- `guide/` — one file per phase: `server.md`, `repo-and-deploy.md`, `brand.md`, `pages.md`, `maintenance.md` (Catalan).
- `tools/contrast.py` — contrast of the 14 colour pairs Tulip uses, for a child `theme.json`.
- `tools/child-screenshot.mjs` — `screenshot.png` for a child theme, in its own colours, fonts and radii.

`init.sh` doesn't copy `guide/` or `tools/` into the new site.
