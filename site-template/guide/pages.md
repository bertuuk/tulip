# Pàgines amb els patrons de Tulip

Es llegeix a la fase 4.

Les pàgines es fan amb els patrons de Tulip (categoria **Tulip** de l'inseridor). La taula de sota és ajuda per trobar-los, no una llei: si una secció no hi encaixa, digues-ho.

| Secció habitual | Patró |
| --- | --- |
| Hero amb imatge | `tulip/hero-media` (amb email: `tulip/hero-form`, si hi ha Marketing Blocks) |
| Franja de punts | `tulip/list-strip` |
| Problema / títol i text | `tulip/heading-text` |
| Imatge i text | `tulip/image-text`, `tulip/image-text-reverse`, `tulip/image-text-stack`, `tulip/media-text` |
| Característiques | `tulip/feature-list` (numerades), `tulip/feature-grid`, `tulip/feature-grid-side`, `tulip/features-tabs`, `tulip/steps` |
| Xifres | `tulip/figures` |
| Vídeo + crida | `tulip/video-cta` |
| Preus | `tulip/pricing` (bàsic, amb targeta fosca), `tulip/pricing-plans` (targetes amb checks i recomanat), `tulip/plan-comparison` |
| Testimonis, logos, equip | `tulip/testimonial`, `tulip/testimonials`, `tulip/logos`, `tulip/team` |
| Preguntes | `tulip/faq` (Accordion de nucli) |
| Crida final | `tulip/cta-large` (amb email: `tulip/cta-form`) |
| Capçaleres de pàgina | `tulip/page-header`, `-image`, `-dark`, `-legal` |

Per muntar una pàgina sencera: agafa el marcatge real dels patrons (REST `/wp/v2/block-patterns/patterns` en un WordPress amb Tulip), substitueix-hi els textos, valida que cap bloc doni error a l'editor (`wp.blocks.parse` + `isValid`) i desa-la a `content/<pàgina>.html` del repo. Es crea al servidor amb:

```bash
cd ~/public_html/<domini> && ID=$(wp post create ~/sites/<web>/content/<pàgina>.html --post_type=page --post_title="<Títol>" --post_status=publish --page_template=page-no-title --porcelain) && echo $ID
```

Portada: `wp option update show_on_front page && wp option update page_on_front $ID`. Seccions enllaçades des del menú: `anchor` al grup (`{"anchor":"precios"}` + `id="precios"`). Un cop creada, la pàgina viu a la base de dades: els canvis de l'editor no tornen al repo.
