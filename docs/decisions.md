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

## 2026-10-08 · Patrons de secció

**Patrons de Tulip, no del projecte.** Sortits de la landing de Brako (v14 i "logo barras"), però fan servir només rols de color, mides i estils del tema. La marca d'un projecte s'aplica després com a variació d'estil, i la pàgina sencera canvia sense tocar cap patró.

**Patrons:** hero amb imatge, franja de llista, títol + text, text + imatge (fosc), característiques numerades, vídeo + CTA, preus, preguntes freqüents, CTA final, capçalera fosca, peu de 4 columnes i una pàgina landing que els combina (apareix en crear una pàgina nova).

**Peces noves:**
- Estil de paràgraf *Eyebrow* (mono, majúscules, espaiat).
- Estils *Card* i *Card dark* per a grups i columnes. Aplicats a la columna, les targetes de preus tenen la mateixa alçada.
- Estil de llista *Inline*: llista horitzontal que continua sent `<ul>` per al lector de pantalla.
- Secció *Accent* i color `on-accent` (text sobre l'accent), com `--color-text-on-accent` de Tuk DS.

**El radi del botó és un token, no un estil.** `custom.radius.button` (per defecte el radi de control de Tuk DS, 6 px). Una marca amb botons pastilla el posa a `full` a la seva variació. Si fos un estil de bloc, no es podria combinar amb *outline*.

**Escala de mides per a web pública:** cos 16→18 px, `x-small` 13, `small` 15, `large` 19→22, `x-large` 22→28, `xx-large` 30→44, `xxx-large` (H2) 36→56, `display` (H1) 44→88. Totes fluides i amb una ràtio màx./mín. ≤ 2,5 perquè el zoom continuï funcionant (WCAG 1.4.4). Interlineat `compact` 1,05 per a H1/H2.

**Preguntes amb el bloc Accordion de nucli** (WP 6.9+): `aria-expanded`, regió i teclat ja resolts.

**Fora dels patrons:** formularis (WordPress no en té de nucli; es triarà per projecte) i il·lustracions de producte (van com a imatges amb text alternatiu). El vídeo és un bloc Vídeo buit: a la web no es veu fins que s'hi puja el fitxer.

**Color de fons lliure als grups:** es manté (decisió de la Berta).

**Desenvolupament:** `WP_DEVELOPMENT_MODE=theme` a wp-env perquè els patrons nous apareguin sense memòria cau.

## 2026-10-08 · Preus amb targetes de pla

**Patró `tulip/pricing-plans`**, a partir del PlanCard de Tuk DS en mode *action* (sense ràdio ni selecció). Etiqueta, nom, preu i període, descripció, característiques amb check, botó a tota l'amplada i nota. El pla del mig va marcat com a recomanat. El patró de preus bàsic es manté.

**Peces noves:** estil *Card recommended* (fons brand-subtle, vora primary de 2 px), estil de paràgraf *Badge* (pastilla, se situa sobre la vora superior de la targeta recomanada) i estil de llista *Checks* (icona decorativa amb màscara CSS; el lector de pantalla només llegeix el text).

**Diferència amb Tuk DS:** al PlanCard la pastilla és `aria-hidden`; aquí es llegeix, perquè a la web "Recomanat" és informació útil.

**Targetes:** el darrer bloc de qualsevol targeta (card, card-dark, card-recommended) baixa al fons, així els botons queden alineats entre targetes. Resolt també al patró de preus bàsic.

**Selector mensual/anual (PlanSelector):** no es fa ara. Si cal, serà el primer bloc del plugin `tulip-blocks`.

## 2026-10-08 · Capçalera

**La capçalera per defecte és un patró** (`tulip/header`), igual que el peu, perquè el text del botó sigui traduïble. Logo + nom, menú i un botó, amb una línia fina a sota.

**Menú:** la pàgina actual es marca subratllada (no només amb color). El menú mòbil s'obre alineat a l'esquerra, amb lletra gran i espai entre elements perquè siguin fàcils de tocar.

**Mòbil (< 600 px):** el botó principal es manté i va abans de la icona de menú; els botons marcats amb `tulip-hide-on-mobile` (el "Log in" de la capçalera fosca) s'amaguen, així que aquest enllaç ha d'existir també dins del menú.

**No és fixa (sticky)** a propòsit: amb zoom alt o pantalles baixes una capçalera fixa tapa contingut (WCAG 1.4.10). Si un projecte la vol, es decidirà amb una condició d'alçada de pantalla.

## 2026-10-08 · Integració amb Marketing Blocks

**El tema no depèn del plugin.** `inc/plugin-integrations.php` només actua si el bloc `create-block/getresponse-form-block` està registrat: carrega els estils de Tulip per al formulari (`wp_enqueue_block_style`, només a les pàgines on surt) i registra dos patrons, *Hero with email form* i *Closing call to action with email form*. Sense el plugin, no apareixen i no hi ha blocs trencats.

**Colors del formulari:** els posa Tulip segons la secció (clara, fosca, accent), igual que els botons. Com que el bloc escriu els seus colors com a estils en línia, els de Tulip porten `!important`; dins de Tulip els controls de color del bloc s'ignoren a propòsit.

**Coses vistes al plugin (per arreglar des del seu repo, no aquí):**
- `edit.js`: `const { uniqueId } = 'attributes'` desestructura un text, així que `uniqueId` sempre és buit i cada cop que s'obre l'editor el formulari rep un id nou (el contingut queda modificat sense tocar res).
- Els colors de text es recalculen sols a partir del fons (`getReadableTextColor`), de manera que un valor que no sigui hex (per exemple una variable CSS) es converteix en blanc o negre.
- El camp d'email és `type="text"`; hauria de ser `type="email"` (teclat correcte al mòbil, validació del navegador).
- `id="start_time"` és fix: amb dos formularis a la mateixa pàgina, l'id es repeteix.
- El checkbox real és invisible i no té indicador de focus propi; Tulip el dibuixa a la caixa visible.
- L'etiqueta del camp trampa i els missatges per defecte estan en castellà dins del codi, no traduïbles.
- Proposta de fons: passar els colors a les *block supports* de WordPress (color, vora, tipografia) perquè qualsevol tema els pugui definir sense `!important`.

**Site Ads by Bertuuk:** connectat però sense patró. Els seus blocs (AdSense, codi d'anunci) tenen sentit dins d'entrades del blog, no en una landing; es tractaran quan es faci la plantilla d'entrada.

## Pendent

- Mode "només contingut" per als ajudants (bloquejar l'estructura dels patrons).

- Dark mode: theme.json no el suporta de manera nativa. No decidit.
- Sincronització automàtica de tokens des de `tuk-ds/src/styles/tokens.css`.
- Variacions d'estil globals (`styles/*.json`) per a marques de projecte: el mecanisme equivalent a `data-theme`.
- Captura `screenshot.png` (1200×900) per al directori.
- Traducció al català (`languages/`).
