# Servidor: domini, base de dades i WordPress

Es llegeix a la fase 1. Tot el que hi ha aquí està provat al servidor de la Berta (ifastnet, cPanel) amb brako.pro.

## Dades fixes (ifastnet, cPanel)

| | |
| --- | --- |
| SSH | `sv102.ifastnet.com`, port `1394`, usuari `maindoma`. Al Mac: àlies `ifastnet`. |
| IP | `82.163.176.14` |
| DNS per apuntar-hi dominis | `ns10102.ifastnet.com`, `ns20102.ifastnet.com` |
| Prefix BD/usuaris | `maindoma_` |
| PHP CLI | `/opt/alt/php82/usr/bin/php` (8.2) |
| WP-CLI | `~/.local/bin/wp` (al PATH a la sessió interactiva, no en l'SSH no interactiu: allà, rutes completes) |
| Webs | `~/public_html/<domini>` · còpies dels repos a `~/sites/<web>` |

Si el servidor fos un altre: diagnosi primer (`whoami; php -v; which wp git uapi; uapi Mysql get_restrictions | grep prefix`) i, si no hi ha WP-CLI, instal·lar-lo a `~/.local/bin` (phar de `wp-cli/builds`).

## 1.1 Domini

Al registrador, els dos servidors de noms de dalt. **Revisa l'ortografia** (a Brako hi havia `ifasnet` i no resolia). Comprovar, al servidor:

```bash
dig +short <domini> @ns10102.ifastnet.com; dig +short <domini> @8.8.8.8; dig +short <domini> NS @8.8.8.8
```

Si internet ja el veu i el navegador de la Berta no (`DNS_PROBE_FINISHED_NXDOMAIN`), és memòria cau: `sudo dscacheutil -flushcache; sudo killall -HUP mDNSResponder`, `chrome://net-internals/#dns`, o DNS segur a Chrome.

## 1.2 Domini addon (a mà)

`cpapi2` no està disponible en aquest hosting. La Berta, al cPanel: **Dominis → Crear un domini nou** → `<domini>` → desmarcar "Compartir l'arrel del document" → arrel `public_html/<domini>`. Es pot fer abans que el DNS hagi propagat. (Un subdomini sí que es pot fer per ordre: `uapi SubDomain addsubdomain domain=<sub> rootdomain=<domini> dir=public_html/<sub>.<domini>`.)

## 1.3 Base de dades — al servidor

```bash
mkdir -p ~/.secrets && chmod 700 ~/.secrets && \
openssl rand -base64 48 | tr -dc 'A-Za-z0-9' | head -c 32 > ~/.secrets/<curt>-db && chmod 600 ~/.secrets/<curt>-db && \
uapi Mysql create_database name=maindoma_<curt> | grep -E "status|errors" -A1 && \
uapi Mysql create_user name=maindoma_<curt> password="$(cat ~/.secrets/<curt>-db)" | grep -E "status|errors" -A1 && \
uapi Mysql set_privileges_on_database user=maindoma_<curt> database=maindoma_<curt> privileges=ALL%20PRIVILEGES | grep -E "status|errors" -A1 && \
uapi SSL start_autossl_check | grep -E "status|errors" -A1
```

Cada bloc ha de dir `status: 1` i `errors: ~`.

## 1.4 WordPress — al servidor

La carpeta nova ja porta `cgi-bin`, `.well-known`, `.htaccess`, `php.ini` i `.user.ini` de l'ifastnet: es deixen. Si hi ha res més, atura't.

```bash
cd ~/public_html/<domini> && ls -la && \
wp core download && \
wp config create --dbname=maindoma_<curt> --dbuser=maindoma_<curt> --dbpass="$(cat ~/.secrets/<curt>-db)" --dbhost=localhost && \
wp core install --url=https://<domini> --title="<Nom>" --admin_user=berta --admin_email=hola@bertanicolau.com --skip-email --prompt=admin_password && \
wp language core install <locale-contingut> --activate && wp language core install ca && \
wp user meta update berta locale ca && \
wp option update blog_public 0 && \
wp core version && wp option get siteurl && \
rm ~/.secrets/<curt>-db && echo "--- TOT OK"
```

- `wp core download --locale=ca` pot fallar ("locale not found") quan la traducció de l'última versió encara no està empaquetada: per això es baixa en anglès i s'hi instal·la l'idioma a sobre.
- Si un bloc falla a mitges i la contrasenya de BD s'ha perdut: regenerar-la i `uapi Mysql set_password user=maindoma_<curt> password=…`.
- `blog_public 0` = no indexar fins al llançament.
