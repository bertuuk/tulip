# Marca al tema fill

Es llegeix a la fase 3.

Font de veritat: el `tokens.css` de Tuk DS del projecte. Al `theme.json` del fill (`<fill>/theme.json`):

- **Paleta sencera, 12 rols** (no només els que canvien):

| Rol Tulip | Token Tuk DS |
| --- | --- |
| base | surface-default |
| base-alt | neutral-100 |
| brand-subtle | primary-50 |
| brand-strong | primary-900 (seccions fosques) |
| contrast / contrast-alt | neutral-900 / neutral-700 |
| primary / primary-strong | primary-600 / primary-700 |
| primary-light | primary-200 (botons i enllaços sobre fosc) |
| accent / on-accent | primary-600 / text-on-primary |
| border | neutral-200 |

- **Comprova el contrast** amb `python3 site-template/tools/contrast.py <fill>/theme.json` (del repo de Tulip). Revisa les 14 parelles que fa servir Tulip (text, enllaços, botons, seccions fosques i accent) i surt amb error si alguna no arriba a 4,5:1. Ensenya la taula a la Berta: si un color de l'app no passa en algun rol, és millor triar un altre esglaó de la rampa que forçar-lo.
- **Tipografia:** les tres famílies (`primary`, `secondary`, `mono`) senceres. Fonts OFL, allotjades: `npm pack @fontsource-variable/<font>`, copiar `latin` i `latin-ext` (normal, i cursiva si cal) a `<fill>/assets/fonts/<font>/` amb la llicència com a `OFL.txt`; `src: ["file:./assets/fonts/…"]`.
- **Forma:** `settings.custom.radius.button`, `.control`, `.card`.
- **Miniatura:** els temes fills no hereten la del pare, i sense `screenshot.png` el fill surt en blanc a Aparença → Temes. Genera-la amb els colors, les fonts i els radis del fill:

  ```bash
  node site-template/tools/child-screenshot.mjs <fill> --title "<Nom>" --eyebrow "<frase curta>" --lead "<una frase>"
  ```

  Fa la mateixa composició que la miniatura de Tulip (capçalera, hero amb la tulipa, franja, secció) llegint el `theme.json` del fill. Necessita Playwright amb Chromium: a l'entorn de Claude, `PLAYWRIGHT_MODULE=<node_modules>/playwright/index.js CHROMIUM_PATH=/opt/pw-browsers/chromium`. Fes servir textos del projecte (al Brako: "Torneos de pádel para clubes").
- Verifica abans de pujar: renderitza les seccions amb el fill (Playground o wp-env), comprova que les fonts carreguen (`document.fonts`) i el color i radi dels botons, i ensenya captures a la Berta.

Decisions de disseny (botons pastilla o rectes, fonts del disseny o de l'app…) són de la Berta: proposa amb motiu i espera.
