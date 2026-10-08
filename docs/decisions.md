# Decisions de Tulip

Registre curt. Cada entrada: què es va decidir i per què.

## 2026-10-08 · Base del tema

**Tema i plugin separats.** El tema només fa presentació (theme.json, plantilles, patrons, estils). Blocs custom, CPT i shortcodes són "plugin territory" segons les normes del directori de temes, així que aniran a un plugin `tulip-blocks` quan calgui. Primer s'esgota el que permeten els blocs de nucli + patrons + estils de secció.

**Un sol repo.** `.wp-env.json` a l'arrel munta `themes/tulip` (i més endavant `plugins/tulip-blocks`). Es desenvolupen junts i es publiquen per separat.

**Paleta per rols, no primitius.** L'editor ofereix 11 colors amb nom de rol (`base`, `contrast`, `primary`…), no les 12×7 rampes de Tuk DS. Valors per defecte de Tuk DS (lila apagat, ancoratge 600). Contrastos verificats:

| Parell | Ràtio |
|---|---|
| contrast sobre base / base-alt / brand-subtle | 16,3 / 14,4 / 14,7 |
| contrast-alt sobre base | 8,8 |
| primary-strong (enllaços) sobre base / brand-subtle | 9,6 / 8,6 |
| base sobre primary (botó) | 7,2 |
| primary-light (enllaços) sobre brand-strong | 9,9 |

Combinacions que **no** passen AA i que cal evitar als patrons: `primary` sobre `primary-light` (4,4), `primary` o `primary-strong` sobre `brand-strong` (2,2 i 1,7).

**Editor restringit.** Sense colors, degradats, duotons, mides de lletra ni espaiats lliures; sense paletes per defecte de WordPress. Es tria entre presets. Es pot relaxar si fa nosa, però cada relaxació és una porta a combinacions sense contrast.

**Estils de secció en lloc de fons lliures.** `section-alt`, `section-brand` i `section-dark` canvien fons, text, enllaços, botons, botó outline i color del focus alhora. Pendent de decidir: si es treu del tot l'opció de color de fons als grups perquè les seccions siguin l'única via.

**Tipografia.** Inter allotjada al tema (latin + latin-ext, normal + cursiva, variable). `primary` = text, `secondary` = encapçalaments; per defecte totes dues són Inter, i és el que canviarà cada projecte. L'escala de Tuk DS (fins a 30 px) s'amplia amb `xxx-large` (48 px) i `display` (64 px), fluides, perquè una web comercial necessita titulars més grans que un dashboard.

**Tokens no exposats a l'editor** (radis, gruixos de vora, focus, interlineats, pesos, durades) van a `settings.custom` → variables `--wp--custom--*`.

**Accessibilitat.** Objectiu WCAG 2.2 AA i requisits *accessibility-ready* del directori. Ja cobert: enllaç de salt (nucli), landmarks header/main/footer, enllaços subratllats al contingut, focus visible a tot arreu (també sobre fons fosc), `prefers-reduced-motion`. L'etiqueta `accessibility-ready` no s'afegeix fins a fer una revisió completa.

**Textos traduïbles als patrons.** Les plantilles HTML no poden traduir text; el text viu a patrons PHP ocults (`tulip/hidden-*`). Text domain `tulip`, en anglès, amb traducció al català.

**Requisits.** WordPress 6.6+ (theme.json v3 i estils de secció), provat a 7.1.3. PHP 7.4+.

## Pendent

- Dark mode: theme.json no el suporta de manera nativa. No decidit.
- Sincronització automàtica de tokens des de `tuk-ds/src/styles/tokens.css`.
- Variacions d'estil globals (`styles/*.json`) per a marques de projecte: el mecanisme equivalent a `data-theme`.
- Captura `screenshot.png` (1200×900) per al directori.
- Traducció al català (`languages/`).
