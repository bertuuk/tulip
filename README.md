# Tulip

Tema de blocs de WordPress per a webs de producte i comercials, lligat als tokens de [Tuk DS](https://github.com/bertuuk/tuk-ds). Aquest repo és també l'entorn de desenvolupament (`wp-env`).

## Aixecar el web

Cal tenir Docker Desktop obert.

```bash
npm install
npm start        # http://localhost:8888  ·  admin / password
npm stop
```

`npm start` activa el tema Tulip i instal·la dos plugins d'eina: **Create Block Theme** (per exportar a fitxers el que es dissenya a l'editor) i **Theme Check** (revisió amb els criteris del directori de WordPress.org).

Altres ordres: `npm run wp -- <ordre>` (WP-CLI), `npm run logs`, `npm run reset` (esborra el contingut i torna a començar), `npm run destroy`.

## Plugins locals

Per provar Tulip amb plugins que es desenvolupen en una altra carpeta, sense copiar-los, es fa servir `.wp-env.override.json` (no va al git, perquè les rutes són de cada ordinador). La seva llista `plugins` substitueix la de `.wp-env.json`, així que hi ha de repetir els plugins d'eina:

```json
{
  "plugins": [
    "https://downloads.wordpress.org/plugin/create-block-theme.latest-stable.zip",
    "https://downloads.wordpress.org/plugin/theme-check.latest-stable.zip",
    "/ruta/absoluta/al/plugin"
  ]
}
```

Els canvis fets al plugin es veuen al moment. Si el plugin compila blocs, ha de tenir la carpeta `build/`.

## Estructura

```
themes/tulip/          el tema (és el que es publica)
  theme.json           tokens i restriccions de l'editor
  styles/sections/     estils de secció (fons + enllaços + botons + focus)
  templates/ parts/    plantilles i parts de plantilla (només marcatge)
  patterns/            patrons; tot text traduïble viu aquí, no a les plantilles
  assets/css/base.css  només el que theme.json no pot expressar
  assets/fonts/        fonts allotjades al tema (sense CDN)
docs/decisions.md      registre de decisions
```

Quan calgui un bloc custom anirà a `plugins/tulip-blocks/` (vegeu `docs/decisions.md`).
