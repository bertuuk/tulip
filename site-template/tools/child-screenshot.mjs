#!/usr/bin/env node
// Theme screenshot (screenshot.png, 1200×900) for a Tulip child theme, drawn
// with the child's own palette, fonts and radii: same layout as Tulip's
// screenshot, tulip illustration included, recoloured.
//
//   node child-screenshot.mjs <child-theme-dir> [--title "Brako"] [--eyebrow "Torneos de pádel"] [--lead "…"]
//
// Writes <child-theme-dir>/screenshot.png. Needs Playwright with Chromium:
//   PLAYWRIGHT_MODULE=/path/to/node_modules/playwright/index.js   (if not resolvable)
//   CHROMIUM_PATH=/opt/pw-browsers/chromium                       (if not the bundled one)
import fs from 'node:fs';
import path from 'node:path';
import { pathToFileURL } from 'node:url';

const args = process.argv.slice(2);
if (!args[0]) {
	console.error('Usage: node child-screenshot.mjs <child-theme-dir> [--title T] [--eyebrow E] [--lead L]');
	process.exit(1);
}
const dir = path.resolve(args[0]);
const opt = (name, fallback) => {
	const i = args.indexOf(`--${name}`);
	return i > -1 && args[i + 1] ? args[i + 1] : fallback;
};

const theme = JSON.parse(fs.readFileSync(path.join(dir, 'theme.json'), 'utf8'));
const styleCss = fs.readFileSync(path.join(dir, 'style.css'), 'utf8');
const header = (key) => (styleCss.match(new RegExp(`^${key}:\\s*(.+)$`, 'mi')) || [])[1]?.trim() || '';

const pal = Object.fromEntries((theme.settings?.color?.palette || []).map((p) => [p.slug, p.color]));
const need = ['base', 'base-alt', 'brand-subtle', 'brand-strong', 'contrast', 'contrast-alt', 'primary', 'primary-strong', 'primary-light', 'accent', 'on-accent', 'border'];
const missing = need.filter((s) => !pal[s]);
if (missing.length) {
	console.error(`theme.json is missing palette roles: ${missing.join(', ')}`);
	process.exit(1);
}

// Fonts: @font-face from the child's own files; family stacks as declared.
const families = Object.fromEntries((theme.settings?.typography?.fontFamilies || []).map((f) => [f.slug, f]));
const faces = [];
for (const fam of Object.values(families)) {
	for (const face of fam.fontFace || []) {
		const src = (face.src || [])
			.map((s) => s.replace(/^file:\.\//, ''))
			.map((s) => `url("${pathToFileURL(path.join(dir, s)).href}") format("woff2")`)
			.join(', ');
		faces.push(`@font-face{font-family:"${face.fontFamily}";font-style:${face.fontStyle || 'normal'};font-weight:${face.fontWeight || '400'};src:${src};${face.unicodeRange ? `unicode-range:${face.unicodeRange};` : ''}}`);
	}
}
const stack = (slug, fallback) => families[slug]?.fontFamily || fallback;
const body = stack('primary', 'Inter, system-ui, sans-serif');
const heading = stack('secondary', body);
const mono = stack('mono', 'ui-monospace, SFMono-Regular, Consolas, monospace');

// Radii: Tulip's scale, then the child's overrides (they may point at the scale).
const tulipRadius = { none: '0', sm: '0.125rem', md: '0.375rem', lg: '0.625rem', xl: '0.875rem', '2xl': '1.25rem', full: '9999px', control: 'var(--wp--custom--radius--md)', card: 'var(--wp--custom--radius--lg)', button: 'var(--wp--custom--radius--control)' };
const radius = { ...tulipRadius, ...(theme.settings?.custom?.radius || {}) };
const radiusVars = Object.entries(radius).map(([k, v]) => `--wp--custom--radius--${k}:${v};`).join('');

const siteName = opt('title', header('Theme Name').replace(/^Tulip\s+/i, '') || 'Tulip');
const eyebrow = opt('eyebrow', 'WordPress · Tulip');
const lead = opt('lead', header('Description') || 'Built on Tulip.');
const esc = (s) => s.replace(/[&<>"]/g, (c) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[c]));

const tulip = `
<svg viewBox="0 0 840 630" xmlns="http://www.w3.org/2000/svg">
  <defs><pattern id="g" width="42" height="42" patternUnits="userSpaceOnUse"><path d="M42 0H0V42" fill="none" stroke="${pal['primary-light']}" stroke-opacity=".45" stroke-width="1.5"/></pattern></defs>
  <rect width="840" height="630" fill="${pal['brand-subtle']}"/><rect width="840" height="630" fill="url(#g)"/>
  <path d="M424 500 C 470 440 540 410 600 404 C 576 470 500 520 424 528 Z" fill="${pal['primary-light']}"/>
  <path d="M416 470 C 380 425 320 400 270 398 C 292 452 352 488 416 496 Z" fill="${pal['primary-light']}"/>
  <rect x="411" y="300" width="18" height="250" rx="9" fill="${pal['primary-strong']}"/>
  <path d="M420 336 C 330 336 296 262 312 150 C 356 186 398 214 420 262 Z" fill="${pal.primary}"/>
  <path d="M420 336 C 510 336 544 262 528 150 C 484 186 442 214 420 262 Z" fill="${pal.primary}"/>
  <path d="M420 340 C 364 302 362 200 420 120 C 478 200 476 302 420 340 Z" fill="${pal['brand-strong']}"/>
  <rect x="224" y="548" width="72" height="34" rx="4" fill="${pal['primary-light']}"/>
  <rect x="304" y="548" width="72" height="34" rx="4" fill="${pal.primary}"/>
  <rect x="384" y="548" width="72" height="34" rx="4" fill="${pal['brand-strong']}"/>
  <rect x="464" y="548" width="72" height="34" rx="4" fill="${pal.primary}"/>
  <rect x="544" y="548" width="72" height="34" rx="4" fill="${pal['primary-light']}"/>
</svg>`;

const html = `<!doctype html><html><head><meta charset="utf-8"><style>
${faces.join('\n')}
:root{${radiusVars}}
*{box-sizing:border-box;margin:0}
body{width:1600px;height:1200px;overflow:hidden;background:${pal.base};color:${pal.contrast};font-family:${body};-webkit-font-smoothing:antialiased}
.wrap{width:1200px;margin:0 auto}
header{height:70px;border-bottom:1px solid ${pal.border};display:flex;align-items:center}
header .wrap{display:flex;align-items:center;justify-content:space-between}
.logo{font-family:${heading};font-weight:700;font-size:24px}
nav{display:flex;gap:28px;align-items:center;font-size:17px}
.btn{display:inline-block;padding:14px 24px;font-weight:600;font-size:17px;border-radius:var(--wp--custom--radius--button);background:${pal.primary};color:${pal.base}}
header .btn{padding:10px 18px;font-size:16px}
.hero{background:${pal['brand-strong']};color:${pal.base};height:736px;display:flex;align-items:center}
.hero .wrap{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.eyebrow{font-family:${mono};text-transform:uppercase;letter-spacing:.08em;font-size:14px;margin-bottom:24px}
h1{font-family:${heading};font-size:88px;line-height:1.02;letter-spacing:-.02em;font-weight:700;margin-bottom:28px}
.lead{font-size:22px;line-height:1.6;margin-bottom:36px;max-width:560px}
.hero .btn{background:${pal.base};color:${pal['brand-strong']};margin-right:16px}
.hero .btn.outline{background:transparent;color:${pal.base};box-shadow:inset 0 0 0 2px ${pal.base}}
.art{border-radius:var(--wp--custom--radius--card);overflow:hidden;line-height:0}
.art svg{width:100%;height:auto}
.strip{background:${pal.accent};color:${pal['on-accent']};height:62px;display:flex;align-items:center}
.strip .wrap{display:flex;gap:28px;align-items:center;font-weight:600;font-size:19px}
.strip .eyebrow{margin:0;font-weight:400}
.next{padding-top:90px}
.next .wrap{display:grid;grid-template-columns:1fr 1fr;gap:80px}
h2{font-family:${heading};font-size:56px;line-height:1.08;letter-spacing:-.02em;font-weight:700}
.next p{font-size:19px;line-height:1.6;color:${pal['contrast-alt']}}
</style></head><body>
<header><div class="wrap"><div class="logo">${esc(siteName)}</div>
<nav><span>Product</span><span>Pricing</span><span>Blog</span><span>About</span><span class="btn">Get started</span></nav></div></header>
<section class="hero"><div class="wrap"><div>
<p class="eyebrow">${esc(eyebrow)}</p><h1>${esc(siteName)}</h1><p class="lead">${esc(lead)}</p>
<span class="btn">Get started</span><span class="btn outline">Learn more</span></div>
<div class="art">${tulip}</div></div></section>
<section class="strip"><div class="wrap"><span class="eyebrow">Brand</span><span>Colours</span><span>·</span><span>Type</span><span>·</span><span>Shapes</span><span>·</span><span>Tulip patterns</span></div></section>
<section class="next"><div class="wrap"><h2>A child theme of Tulip.</h2><p>Colours, fonts and shapes come from this site's design tokens. Sections, patterns and templates come from Tulip.</p></div></section>
</body></html>`;

const tmp = path.join(dir, '.screenshot-tmp.html');
fs.writeFileSync(tmp, html);
const pw = await import(process.env.PLAYWRIGHT_MODULE || 'playwright');
const chromium = pw.chromium || pw.default.chromium;
const browser = await chromium.launch(process.env.CHROMIUM_PATH ? { executablePath: process.env.CHROMIUM_PATH } : {});
const page = await (await browser.newContext({ viewport: { width: 1600, height: 1200 }, deviceScaleFactor: 0.75 })).newPage();
await page.goto(pathToFileURL(tmp).href);
await page.evaluate(() => document.fonts.ready);
await page.screenshot({ path: path.join(dir, 'screenshot.png') });
await browser.close();
fs.unlinkSync(tmp);
console.log(`✓ ${path.join(dir, 'screenshot.png')} (1200×900)`);
