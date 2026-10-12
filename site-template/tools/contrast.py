#!/usr/bin/env python3
"""Check the text/background pairs Tulip uses, for a theme.json palette.

    python3 contrast.py path/to/child/theme.json

Prints every pair with its contrast ratio and whether it meets WCAG AA for
normal text (4.5:1). Exit code 1 if any pair fails, so it can gate a commit.
"""
import json, sys

# (text role, background role, where Tulip uses it)
PAIRS = [
    ("contrast", "base", "body text"),
    ("contrast", "base-alt", "text on the Alternative section"),
    ("contrast", "brand-subtle", "text on the Brand subtle section"),
    ("contrast-alt", "base", "secondary text"),
    ("contrast-alt", "base-alt", "secondary text on Alternative"),
    ("primary-strong", "base", "links"),
    ("primary-strong", "base-alt", "links on Alternative"),
    ("primary-strong", "brand-subtle", "links on Brand subtle"),
    ("base", "primary", "button text"),
    ("base", "primary-strong", "button text on hover"),
    ("base", "brand-strong", "text on the Brand dark section"),
    ("primary-light", "brand-strong", "links/buttons on Brand dark"),
    ("brand-strong", "primary-light", "button text on Brand dark"),
    ("on-accent", "accent", "text on the Accent section"),
]

def lum(hex_):
    h = hex_.lstrip("#")
    if len(h) == 3:
        h = "".join(c * 2 for c in h)
    r, g, b = (int(h[i:i + 2], 16) / 255 for i in (0, 2, 4))
    f = lambda c: c / 12.92 if c <= 0.03928 else ((c + 0.055) / 1.055) ** 2.4
    return 0.2126 * f(r) + 0.7152 * f(g) + 0.0722 * f(b)

def ratio(a, b):
    x, y = sorted((lum(a), lum(b)), reverse=True)
    return (x + 0.05) / (y + 0.05)

def main():
    theme = json.load(open(sys.argv[1]))
    palette = {p["slug"]: p["color"] for p in theme["settings"]["color"]["palette"]}
    missing = sorted({r for p in PAIRS for r in p[:2]} - palette.keys())
    if missing:
        print("Missing palette roles:", ", ".join(missing))
        sys.exit(1)
    failed = False
    for fg, bg, use in PAIRS:
        r = ratio(palette[fg], palette[bg])
        ok = r >= 4.5
        failed |= not ok
        print(f"{'✓' if ok else '✗'} {r:5.2f}:1  {fg:15} on {bg:13} {use}")
    sys.exit(1 if failed else 0)

if __name__ == "__main__":
    main()
