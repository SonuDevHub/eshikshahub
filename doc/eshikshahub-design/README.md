# eShikshaHub — Design Handoff

```
DESIGN.md            Design system: tokens, type, spacing, components, icons, MOTION, accessibility
docs/pages/*.md      Per-page section specs + page-specific motion (7 pages)
pages/*.html         Static reference HTML, 7 pages × desktop / tablet / mobile + menu states
assets/es-site.css   Shared stylesheet used by the reference pages (all component classes)
source/canvas/       Original design-canvas source files (.dc.html + canvas.json)
```

## Viewing the reference pages
Open any file in `pages/` in a browser (fonts load from Google Fonts). Each file is a fixed-width artboard: 1440, 768 or 375px. They are references, not responsive code. Build one responsive page per route using the three widths as breakpoints.

## Suggested build
1. Put the colour and type tokens from DESIGN.md §2–3 into CSS variables / a Tailwind theme.
2. Build the locked components first: Navbar (+ mega-menu, mobile menu), CTA band, Footer, University grid, Partner marquee, Mobile sticky bar, Stat block, Feature tile, Icon row, Buttons, Form field.
3. Assemble pages using `docs/pages/*.md`.
4. Add motion from DESIGN.md §7 (IntersectionObserver reveals, count-up, marquee, hover states) and respect `prefers-reduced-motion`.
5. Replace grey photo blocks with real photography. Each block's caption names the shot.

Routes: `/`, `/about`, `/courses`, `/courses/mba`, `/placement`, `/refer-and-earn`, `/contact`.
