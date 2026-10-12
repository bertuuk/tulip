# Repo, local i desplegament

Es llegeix a la fase 2. La plantilla és `site-template/` del repo de Tulip; aquí hi ha com fer-la servir i com connectar-la al servidor.

## 2.1 Repo

1. La Berta crea el repo **privat** buit `bertuuk/<web>` a GitHub.
2. Claude l'afegeix a la sessió (`add_repo`, `access: push`), el clona i genera l'esquelet des de la plantilla de Tulip:

```bash
rm -rf /tmp/tulip-src && git clone -q --depth 1 https://github.com/bertuuk/tulip /tmp/tulip-src && \
bash /tmp/tulip-src/site-template/init.sh <clon-del-repo> <web> <domini> tulip-<curt> "Tulip <Nom>" <port>
```

   `init.sh` copia la plantilla, omple els marcadors i anomena la carpeta del tema fill igual que el seu slug (**ha de ser així**: wp-env posa a cada tema el nom de la seva carpeta). Revisa `deploy/site.conf` (plugins) i fes el primer commit i push.

3. La Berta, al Mac:

```bash
mkdir -p ~/Documents/Projectes/<Projecte> && cd ~/Documents/Projectes/<Projecte> && git clone https://github.com/bertuuk/<web>.git && cd <web> && npm install && npm start
```

   Ha d'obrir `localhost:<port>` amb el tema fill actiu i el tauler en català (`admin` / `password`).

4. Plugins propis en local: `.wp-env.override.json` (no va al git) amb les carpetes dels plugins al Mac. **La seva llista `plugins` substitueix la del `.wp-env.json`**: hi has de repetir Create Block Theme. Els plugins han de tenir `build/` (`npm run build` dins del plugin).

```json
{
  "plugins": [
    "https://downloads.wordpress.org/plugin/create-block-theme.latest-stable.zip",
    "/Users/bertanicolau/Documents/Projectes/Themes i Plugins/wordpress-dev/bertuuk-marketing-blocks"
  ]
}
```

## 2.2 Clau perquè el servidor llegeixi el repo — al servidor

El `~/.ssh/config` del servidor lliga `github.com` a la clau del sharedlists i una deploy key de GitHub només val per a un repo: cada web té la seva clau i el seu àlies. No toquis el bloc `github.com`.

```bash
ssh-keygen -t ed25519 -N "" -C "<web> deploy (server)" -f ~/.ssh/<web>_deploy_key -q && \
printf '\nHost github-<web>\n  HostName github.com\n  User git\n  IdentityFile ~/.ssh/<web>_deploy_key\n  IdentitiesOnly yes\n' >> ~/.ssh/config && \
cat ~/.ssh/<web>_deploy_key.pub
```

La Berta l'afegeix com a deploy key **sense escriptura**, al Mac:

```bash
echo "<clau pública>" > /tmp/k.pub && gh repo deploy-key add /tmp/k.pub -R bertuuk/<web> --title "server sv102"
```

Primera clonació i desplegament, al servidor:

```bash
mkdir -p ~/sites && git clone -q git@github-<web>:bertuuk/<web>.git ~/sites/<web> && bash ~/sites/<web>/deploy/deploy.sh
```

El `deploy.sh` instal·la Tulip (última Release), els plugins de `site.conf`, copia el tema fill i l'activa. Comprova: `wp theme list --fields=name,status,version,auto_update` (al servidor, dins de `~/public_html/<domini>`).

## 2.3 Desplegament automàtic

Clau perquè GitHub entri al servidor, **limitada a una sola ordre** — al servidor:

```bash
ssh-keygen -t ed25519 -N "" -C "<web> github action" -f ~/.ssh/<web>_action_key -q && \
echo "command=\"cd ~/sites/<web> && git fetch -q origin main && git reset -q --hard origin/main && bash deploy/deploy.sh\",restrict $(cat ~/.ssh/<web>_action_key.pub)" >> ~/.ssh/authorized_keys && \
tail -1 ~/.ssh/authorized_keys | cut -c1-100
```

Al Mac (la privada passa al secret sense sortir per pantalla i s'esborra del servidor):

```bash
ssh ifastnet 'cat ~/.ssh/<web>_action_key' | gh secret set DEPLOY_SSH_KEY -R bertuuk/<web> && \
ssh ifastnet 'rm ~/.ssh/<web>_action_key && echo esborrada'
```

La host key del servidor ja és fixada al workflow de la plantilla. Prova: un commit qualsevol → `gh run list -R bertuuk/<web> -L 1` en verd, i al servidor `git -C ~/sites/<web> log --oneline -1` ha de mostrar aquell commit. (El banner "WARNING - PRIVATE ELECTRONIC DEVICE" de cada connexió és normal.)

## 2.4 Contingut real a local

`npm run pull` (al Mac, amb `npm start` en marxa): copia la base de dades i les imatges del servidor al wp-env, canvia les adreces a `localhost:<port>` i deixa `admin`/`password`. Només baixa, mai puja. Fes-lo servir abans de provar canvis de disseny.
