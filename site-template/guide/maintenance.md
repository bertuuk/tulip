# Manteniment i problemes coneguts

## Manteniment

- **Desplegar:** push a `main` (o `npm run deploy` des del Mac).
- **Tulip:** `TULIP_REF="latest"` al `site.conf` (per defecte): s'actualitza sol (Release + actualitzador + actualitzacions automàtiques). `TULIP_REF="vX.Y.Z"` el fixa. Publicar una versió: pujar la versió a `themes/tulip/style.css`, `readme.txt` (Stable tag + entrada `= X.Y.Z =` al changelog) i `package.json` → commit → la Berta fa `git tag -a vX.Y.Z -m "Tulip X.Y.Z" && git push origin vX.Y.Z`.
- **Plugins propis:** `GITHUB_PLUGINS="<repo>/<slug>"` → última versió i actualitzacions automàtiques; `…@vX.Y.Z` → fixat.
- **Versions majors** (1.x → 2.0): ni WordPress ni el `deploy.sh` les instal·len sols. Surten al tauler i esperen un clic (o fixa-les al `site.conf`). Els canvis que trenquen coses només van en versions majors.
- **Comprovar versions** (al servidor): `wp theme list --fields=name,status,version,auto_update` i `wp plugin list --fields=name,status,version,auto_update`. Si el tauler no mostra una versió nova: **Tauler → Actualitzacions → Comprova de nou** (la resposta de GitHub es guarda 12 h).

## Problemes ja vistos

| Símptoma | Causa i solució |
| --- | --- |
| El domini no resol, `dig … NS` buit | Errata a les DNS del registrador. |
| `wp core download --locale=ca`: locale not found | Baixar en anglès i `wp language core install`. |
| En local surt Twenty Twenty-Five | La carpeta del tema fill no es diu com el slug. |
| `npm run pull` diu "No plugins activated" | Create Block Theme no és a l'override local; l'script ja ho tolera. |
| `wp` o `php` no trobat per SSH no interactiu | Rutes completes (`/opt/alt/php82/usr/bin/php ~/.local/bin/wp`). |
| L'Action és verda però no ha desplegat | Comprova `git -C ~/sites/<web> log -1` al servidor; si no hi ha el secret, el workflow se salta el desplegament a propòsit. |
| El tauler no mostra una versió nova | Memòria cau de 12 h: "Comprova de nou". Si GitHub limita l'API (hosting compartit), espera una hora. |
| `wp_update_themes()` no consulta GitHub | WordPress s'atura si no pot parlar amb WordPress.org abans. |
