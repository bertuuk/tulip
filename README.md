# Tulip

A WordPress block theme for product and marketing websites, built on the design tokens of [Tuk DS](https://github.com/bertuuk/tuk-ds).

Tulip is made for the people who edit the site after it ships. The editor only offers colours, sizes and spacing that belong to the design, every colour pairing is contrast-checked, and whole sections can be restyled in one click. Editors change words and images without breaking the layout or the accessibility of the page.

- **Version:** 1.0.0
- **Requires:** WordPress 6.6 or later (tested up to 7.1), PHP 7.4 or later
- **Accessibility target:** WCAG 2.2 AA
- **License:** GPLv2 or later

This repository holds both the theme (`themes/tulip/`) and its local development environment ([`wp-env`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/)).

---

## Contents

- [Quick start](#quick-start)
- [What's in the theme](#whats-in-the-theme)
  - [Design tokens](#design-tokens)
  - [Section styles](#section-styles)
  - [Block styles](#block-styles)
  - [Patterns](#patterns)
  - [Templates](#templates)
  - [Plugin integrations](#plugin-integrations)
- [Accessibility](#accessibility)
- [Editing guide](#editing-guide)
- [Development](#development)
  - [Commands](#commands)
  - [Testing local plugins](#testing-local-plugins)
  - [Project structure](#project-structure)
  - [Conventions](#conventions)
- [Roadmap](#roadmap)
- [Credits and license](#credits-and-license)

---

## Quick start

You need [Node.js](https://nodejs.org/) 20 (see `.nvmrc`) and [Docker Desktop](https://www.docker.com/products/docker-desktop/) running.

```bash
git clone https://github.com/bertuuk/tulip.git
cd tulip
npm install
npm start
```

Open http://localhost:8888 and log in at http://localhost:8888/wp-admin with `admin` / `password`.

`npm start` activates Tulip and installs two helper plugins:

- **Create Block Theme**, to save changes made in the Site Editor back to theme files.
- **Theme Check**, to review the theme against the WordPress.org directory requirements.

The environment runs with `WP_DEVELOPMENT_MODE=theme`, so changes to `theme.json`, patterns and templates show up on reload without clearing caches.

### Installing the theme on a real site

Zip the `themes/tulip/` folder and upload it from **Appearance → Themes → Add New Theme → Upload Theme**. Only that folder is the theme; the rest of the repository is tooling.

---

## What's in the theme

### Design tokens

All tokens live in `themes/tulip/theme.json` and come from Tuk DS.

**Colour.** The palette is organised by role rather than by raw hue. Custom colours, gradients and duotone are turned off, so editors can only pick from these:

| Slug | Role | Default |
| --- | --- | --- |
| `base` | Page background | `#ffffff` |
| `base-alt` | Alternative background | `#f1f1ee` |
| `brand-subtle` | Light brand background | `#f7f0ff` |
| `brand-strong` | Dark brand background | `#2c183d` |
| `contrast` | Main text | `#20201d` |
| `contrast-alt` | Secondary text | `#4b4b44` |
| `primary` | Brand colour, buttons | `#6b488b` |
| `primary-strong` | Links, hover | `#563772` |
| `primary-light` | Links on dark backgrounds | `#d8c3ef` |
| `accent` | Accent background | `#6b488b` |
| `on-accent` | Text on accent | `#ffffff` |
| `border` | Borders and rules | `#e2e2df` |

**Typography.** Inter is bundled with the theme (variable, normal and italic, Latin and Latin Extended), with no external font requests. There are three families: `primary` (body), `secondary` (headings) and `mono` (captions and labels). Font sizes run from `x-small` (13 px) to `display` (up to 88 px). From `medium` up they are fluid, so they scale with the viewport.

**Spacing.** There are eight steps, `10` to `80`. Custom spacing values are disabled, which keeps rhythm consistent across pages.

**Custom properties.** `settings.custom` exposes radius (including `button` and `card`), border width, focus ring, line height, letter spacing, font weight and motion duration as `--wp--custom--*` variables. To change the look for a new brand, you change these tokens. The CSS stays the same.

### Section styles

Section styles apply to Group, Columns and similar containers. Each one recolours the background, text, links, buttons and focus ring together, and the pairings are contrast-checked.

| Style | Use |
| --- | --- |
| **Alternative** | Soft neutral band to separate sections |
| **Brand subtle** | Light brand tint |
| **Brand dark** | Dark brand background, inverted buttons and links |
| **Accent** | Full brand colour, for calls to action |

### Block styles

| Block | Styles |
| --- | --- |
| Group, Column | Card, Card dark, Card recommended, Ruled, Ruled strong, Divided |
| Columns | Divided columns |
| Paragraph, Heading, Post date, Post terms, Time to read | Eyebrow |
| Paragraph | Badge, Figure |
| List | Inline, Checks |
| Quote | Plain, Statement |
| Button | Text link |
| Table | Comparison |
| Image | Framed |

### Patterns

Every pattern is in the **Tulip** category of the inserter, as well as its usual core category. All text is translatable.

**Page sections**

| Pattern | Description |
| --- | --- |
| Hero with image | Headline, text, buttons and a large image |
| Highlight strip | Short list of selling points |
| Heading and text | Two-column intro |
| Text and image | Media and text block |
| Image and text (left, right, on top) | Simple image, text and buttons |
| Numbered features | Ordered list of features |
| Feature grid | Icon cards in a grid |
| Feature grid, heading on the side | Heading on the left, grid on the right |
| Features in tabs | Core Tabs block with content per tab |
| Figures | Key numbers |
| How it works, three steps | Step-by-step explanation |
| Video with call to action | Media placeholder with text and buttons |
| Announcement bar | Thin banner for news or offers |
| Closing call to action | Large final call to action |

**Pricing**

| Pattern | Description |
| --- | --- |
| Pricing | Basic three-column pricing |
| Pricing, plan cards | Plan cards with a recommended plan, badge and check list |
| Plan comparison table | Feature table with a sticky first column on small screens |

**Social proof and content**

| Pattern | Description |
| --- | --- |
| Testimonial, large | Single quote |
| Testimonials, three | Three quotes in cards |
| Logo strip | Client or partner logos (inverted on dark sections) |
| Team | People with photo, name and role |
| Frequently asked questions | Core Accordion block |
| Latest posts | Query Loop with the three newest posts |
| Note box | Highlighted note for articles |

**Page headers**

| Pattern | Description |
| --- | --- |
| Page header, minimal | Breadcrumbs, title and intro |
| Page header with image | Title and intro beside an image |
| Page header, dark with buttons | Dark band with calls to action |
| Page header, legal | Title and last-updated date for legal pages |

**Full pages, headers and footers**

| Pattern | Description |
| --- | --- |
| Landing page | Complete landing page built from the sections above |
| Header | Logo, navigation and button |
| Header, dark with buttons | Dark variant |
| Footer | Columns of links, legal line |

### Templates

| Template | Used for |
| --- | --- |
| `index` | Fallback |
| `home` | Blog index, with category filter and the latest post featured on the first page |
| `archive` | Category, tag, author and date archives |
| `single` | Blog post with breadcrumbs, reading column, author box and related posts |
| `single-no-author` | **Post without author.** Same as `single`, without author details |
| `page` | Standard page with title |
| `page-no-title` | **Page without title**, for landing pages that bring their own header |
| `404` | Not found page with search |

Template markup is kept minimal. The content of the blog, archive, single and 404 templates lives in hidden patterns (`patterns/hidden-*.php`) so that all of its text can be translated.

**Hiding the post author.** For a single post, open it in the editor and choose **Post without author** under *Template* in the sidebar. To hide the author on every post, edit the *Single Posts* template in **Appearance → Editor → Templates** and remove the author blocks.

### Plugin integrations

Tulip adds support for other plugins only when they are active, and never depends on them.

**Marketing Blocks.** If the GetResponse form block (`create-block/getresponse-form-block`) is registered, Tulip:

- loads `assets/css/plugins/marketing-blocks.css`, which makes the form follow the surrounding section style, and
- registers two extra patterns: *Hero with email form* and *Closing call to action with email form*.

---

## Accessibility

Tulip targets **WCAG 2.2 AA**.

- **Colour.** Text and background pairings in the palette and section styles meet a contrast ratio of at least 4.5:1. Editors can't pick colours outside the palette.
- **Focus.** There is a visible focus ring on every interactive element. Its colour adapts to the section it sits in, so it stays visible on dark and accent backgrounds.
- **Links.** Links in text are underlined, so they don't rely on colour alone.
- **Navigation.** The current page is marked with `aria-current="page"` and shown with an underline, not just colour. The mobile menu uses the core overlay.
- **Structure.** Templates use landmarks (`header`, `main`, `footer`) and a logical heading order. Hero and page header patterns carry the page's `h1`; every other section starts at `h2`.
- **Motion.** Transitions are disabled under `prefers-reduced-motion: reduce`.
- **Fonts.** Fonts are self-hosted, which also keeps the theme free of third-party requests.

If you find an accessibility issue, please [open an issue](https://github.com/bertuuk/tulip/issues).

---

## Editing guide

For people who maintain a Tulip site:

1. **Add a section.** Open the inserter (**+**), go to **Patterns → Tulip** and pick one. Then replace the text and images.
2. **Change a section's background.** Select the outer group and choose a style under **Styles** in the sidebar (*Alternative*, *Brand subtle*, *Brand dark*, *Accent*). Links and buttons inside follow along.
3. **Turn a group into a card.** Select it and choose *Card*, *Card dark* or *Card recommended* under **Styles**.
4. **Change site-wide colours or fonts.** Go to **Appearance → Editor → Styles**. Changes there apply everywhere.
5. **Edit the header or footer.** Go to **Appearance → Editor → Patterns → Template parts**.

---

## Development

### Commands

| Command | What it does |
| --- | --- |
| `npm start` | Start the environment and activate Tulip |
| `npm stop` | Stop the containers |
| `npm run wp -- <command>` | Run WP-CLI, e.g. `npm run wp -- plugin list` |
| `npm run logs` | Show container logs |
| `npm run reset` | Delete all content and start again |
| `npm run destroy` | Remove the environment completely |

### Testing local plugins

To test Tulip alongside plugins you are developing in another folder, without copying them, create a `.wp-env.override.json` in the repository root. It is gitignored, because the paths belong to your machine.

Its `plugins` list **replaces** the one in `.wp-env.json`, so repeat the helper plugins:

```json
{
  "plugins": [
    "https://downloads.wordpress.org/plugin/create-block-theme.latest-stable.zip",
    "https://downloads.wordpress.org/plugin/theme-check.latest-stable.zip",
    "/absolute/path/to/your-plugin"
  ]
}
```

Run `npm start` again after creating or changing it. Changes to the plugin's files show up immediately. If the plugin compiles its blocks, its `build/` folder must exist.

### Project structure

```
tulip/
├── .wp-env.json             wp-env configuration
├── package.json             npm scripts and @wordpress/env
├── docs/decisions.md        decision log (Catalan)
└── themes/tulip/            the theme — this folder is what gets published
    ├── style.css            theme header
    ├── readme.txt           WordPress.org readme and changelog
    ├── theme.json           tokens and editor settings
    ├── functions.php        styles, pattern category, small filters
    ├── inc/
    │   ├── plugin-integrations.php
    │   └── patterns/        patterns registered only when a plugin is active
    ├── templates/           block templates (markup only)
    ├── parts/               header and footer
    ├── patterns/            patterns; all translatable text lives here
    ├── styles/
    │   ├── sections/        section styles
    │   └── blocks/          block style variations
    └── assets/
        ├── css/base.css     only what theme.json can't express
        ├── css/plugins/     styles for optional plugin integrations
        ├── fonts/           Inter
        └── images/          placeholders
```

### Conventions

- **theme.json first.** Use CSS in `base.css` only for what `theme.json` and block supports can't do, such as focus rings, surface-aware variables and responsive fixes.
- **Use tokens, not values.** Use presets (`var:preset|spacing|40`, `var(--wp--preset--color--primary)`) and custom properties instead of raw pixels or hex codes.
- **Translatable text.** Text goes in patterns with `esc_html_x()` / `esc_attr_x()` and the `tulip` text domain. Templates only reference patterns.
- **Core blocks only.** The theme doesn't register custom blocks. If one is ever needed, it will go in a separate `tulip-blocks` plugin, following WordPress.org theme guidelines.
- **Block gap.** Use a single value for `blockGap` in grids. A two-value gap collapses grids to one column in the editor preview.
- **Check before committing.** Every pattern should open in the editor without the "This block contains unexpected or invalid content" warning. Run Theme Check from **Appearance → Theme Check**.
- **Versioning.** The version is kept in sync in `style.css`, `readme.txt` (Stable tag and changelog) and `package.json`, and each release is tagged as `vX.Y.Z`.

Design decisions and the reasoning behind them are recorded in [`docs/decisions.md`](docs/decisions.md).

---

## Roadmap

- Style variations per brand (fonts, palette, pill-shaped buttons through `custom.radius.button`)
- Catalan translation
- `screenshot.png` and submission to the WordPress.org theme directory
- Content-only locking on patterns, so editors can change text without moving blocks
- Option to exclude the current post from "Keep reading"

---

## Credits and license

Tulip WordPress Theme, © 2026 Berta Nicolau.
Distributed under the [GNU General Public License v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

Bundled resources:

- **Inter**, © 2016 The Inter Project Authors, [SIL Open Font License 1.1](https://openfontlicense.org/). Source: https://rsms.me/inter/
- Placeholder images in `assets/images/` are original to this theme and released under the same license as the theme.
