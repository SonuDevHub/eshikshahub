# eShikshaHub — Design System & Build Spec

Handoff for turning the canvas design into a production website.
Reference HTML for every page and breakpoint is in `pages/`. Shared styles are in `assets/es-site.css`. Per-page specs are in `docs/pages/`.

---

## 1. Principles

- **Square corners everywhere.** `border-radius: 0`. The only exception is form fields (4px).
- **No gradients, no pills, no drop shadows** except the card-lift hover shadow.
- **Flat colour blocks and 1px hairlines** (`#E3E5EC`) separate content.
- **Every section has a visual anchor:** a photo, an icon-tile grid, a stat block, or a navy band.
- **Copy limits:** headings 3–4 words, paragraphs under 15 words. Do not invent facts.
- **Icons:** Lucide only (stroke 1.5, round caps/joins). No emojis, no tick/check marks, no text symbols.

---

## 2. Colour tokens

```css
:root {
  --orange:      #E85612; /* primary fill, icons, 2px rules */
  --orange-dark: #B8410A; /* hover fill, arrow segment, labels on light bg */
  --navy:        #181D38; /* headings on light, dark sections, navy buttons */
  --body:        #52565B; /* body text on light */
  --muted:       #6B7079; /* stat labels, placeholders */
  --tint:        #FDEEE7; /* icon tile background, accent band */
  --offwhite:    #F4F3EF; /* page bg, alt sections, text on navy */
  --white:       #FFFFFF; /* section bg, tiles, button labels */
  --hairline:    #E3E5EC; /* borders, dividers, stat gaps */
  --muted-dk:    #C9CBD6; /* muted text on navy */
  --field:       #8A8F99; /* input border */
  --whatsapp:    #128C7E; /* WhatsApp buttons */
  --whatsapp-hv: #0E6F64;
  --overlay:     rgba(24, 29, 56, .70); /* photo overlay */
}
```

### Rules for dark backgrounds (navy or navy overlay)
- Headings and body text: `#F4F3EF`.
- Muted text: `#C9CBD6`.
- Section labels: off-white Mono (`.lbl.dk`), with the dash in orange.
- **Never orange text on navy.** Orange may appear on navy only as icons 24px or larger, 2px rules, or button fills.

### Section background rhythm
White → off-white → white … Navy bands (partners, stats, sectors) and the tint band (Employers / Rewards) are deliberate accents that break the rhythm.

---

## 3. Typography

Google Fonts:
```html
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700;800&family=Heebo:wght@400;500;600;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
```

| Role | Font | Desktop | Tablet | Mobile | Notes |
|---|---|---|---|---|---|
| H1 (hero) | Nunito 800 | 44/1.15 | 36 | 30 | −0.5px tracking, off-white on hero |
| H2 (section) | Nunito 800 | 36/1.15 | 30 | 26 | −0.4px, navy |
| H3 / tile title | Nunito 700 | 20/1.3 | 20 | 18–20 | navy |
| Lead | Heebo 400 | 18/1.55 | 18 | 16 | |
| Body | Heebo 400 | 16/1.55 | 16 | 16 | `#52565B` |
| Button | Heebo 600 | 18 | 18 | 16 | always white on fills |
| Section label | JetBrains Mono 500 | 13, caps, +0.08em | | | 18×2px dash before |
| Nav / footer / meta | JetBrains Mono 500 | 12, caps, +0.08em | | | |
| Stat value | Nunito 700 | 32/1.1 | 32 | 26 | unit: Heebo 500 18 (15 mobile) |
| Big numerals | Nunito 800 | 44–96 | | | `#B8410A` on light |

---

## 4. Layout & spacing

| | Desktop 1440 | Tablet 768 | Mobile 375 |
|---|---|---|---|
| Side gutter | 80 | 40 | 20 |
| Content width | 1280 | 688 | 335 |
| Section padding (v) | 96 | 80 | 64 |
| Grid | 12 col, 24–64 gaps | 2 col | 1 col (2 for stats/logos) |

Common splits: `4fr / 8fr` (head + photo | tile grid), `5fr / 7fr` (photo | text), `7fr / 5fr` (heading | lead).

Breakpoints for build: `≥1200` desktop, `768–1199` tablet, `<768` mobile.

---

## 5. Components

All class names below exist in `assets/es-site.css`.

### 5.1 Buttons (`.btn`)
Height 52 (48 mobile). Label in `<span>`, arrow segment in `<i>` (52×52).

| Variant | Class | Fill | Label | Hover |
|---|---|---|---|---|
| Primary | `.btn-p` | `#E85612`, arrow segment `#B8410A` | white | whole button `#B8410A`, arrow moves 4px right |
| Navy | `.btn-n` | `#181D38` | white | `#B8410A` |
| WhatsApp | `.btn-w` | `#128C7E` + white WhatsApp SVG | white | `#0E6F64` |
| Outline (light bg) | `.btn-s` | transparent, 1.5px navy | navy | navy fill, white label |
| Outline (dark bg) | `.btn-s.dk` | transparent, 1.5px off-white | off-white | off-white fill, navy label |
| Full width | `.btn.full` | | | |

**Never a dark label on a filled button.** Do not let a global `a { color: inherit }` override button colours. Scope it as `:where(.es) a`.

Text link `.tl`: Mono 12 caps `#B8410A` (`.tl.nv` navy, `.tl.dk` off-white). Underline draws left→right on hover; arrow nudges 4px.

### 5.2 Floating split navbar
- Wordmark at left: Nunito 800. Off-white over the hero, navy once scrolled.
- Right: off-white floating panel (height 48–56) with Mono links plus a navy **Free Counselling** cell.
- Courses opens a **mega-menu**: UG / PG columns, each item with a `book-open` icon.
- Mobile: a `Menu ☰` chip plus a navy call square. The menu opens full-screen with large Nunito links and inline course chips.
- Active link: `#B8410A`.

### 5.3 Section label (`.lbl`)
Mono 13 caps, 18×2px dash. Light bg: `#B8410A`. Dark bg: `.lbl.dk` (off-white text, orange dash).

### 5.4 Icon tile (`.tile`)
Square tint `#FDEEE7` with an orange Lucide icon.
- Sizes: 40 (icon 20–22), 48 (24), 56 (28).
- `.tile.or`: orange fill with a white icon (use on navy/photo).

### 5.5 Feature tile (`.wt`), used in "Why Choose Us" and benefits
- White, 1px `#E3E5EC` border, padding 32 (28 tablet, 24 mobile), gap 14.
- Contents: 56px icon tile → Mono orange number "01" → title (Nunito 700 20) → one-line description.
- **Hover:** tile background navy, all text `#F4F3EF`, icon tile orange with a white icon. 250ms.
- Section layout: off-white bg, `4fr | 8fr` with heading + tall photo left and a 2- or 3-column tile grid right. Tablet: heading + 260px photo row, then a 2-column grid. Mobile: photo above a single column.

### 5.6 Icon row (`.irow`)
White row, 1px border, padding 20, 48px tile + Nunito 700 17 label. Used for checklists. **Replaces all tick lists.**

### 5.7 Stat block (`.stats` > `.stat`)
Equal blocks separated by 1px hairlines (grid gap 1px on a hairline background).
- Each block: 40px tint tile with a 22px orange icon → Mono 12 muted label → value (Nunito 700 32/26) with unit `<small>` (Heebo 500 18/15) → helper (14px).
- Variants:
  - Default: white blocks.
  - `.stats.ow`: off-white blocks.
  - `.stats.dk`: navy blocks, 2px orange top rule, off-white value, `#C9CBD6` label/helper.
  - `.stats.ov`: transparent over photo overlays, same colours as `.dk`. In production, rename it so it doesn't collide with the overlay `.ov`.
- Per row: desktop 4–5; tablet 2; mobile 2 (key facts) or 1 (placement).
- Values **count up** (see Motion).

### 5.8 Photo (`.ph`)
- Flat placeholder with a Mono caption tag `.ph-tag`. The caption is the stock shot to place: Indian students and settings, warm and natural, no heavy filters.
- Hero photos sit under a 70% navy overlay.
- Gallery hover: image zooms 1.05, expand icon (`.xp`) fades in, caption slides up.

### 5.9 Forms (`.fld`)
- Label: Heebo 500 13 navy. Input: 48px tall, 1px `#8A8F99`, radius 4, 46px left padding for an orange leading icon (user, phone, mail, graduation-cap, building, chevron).
- States: focus (orange border + 1px ring), error (2px `#B8410A` border + alert-circle message), success (navy panel, orange headset tile, "We'll call you shortly.").

### 5.10 Accordion (`.acc-h`)
Nunito 700 19 navy, 64px min height, orange plus / minus icon on the right. A 2px navy rule sits on top of the group, with hairlines between items.

### 5.11 CTA band (locked)
- Photo background with a navy overlay.
- Left: `.lbl.dk` "Free Counselling", H2 (prop `heading`), paragraph, and a stat row (`.stats.ov`, 3 blocks: Approval / Partners / Payment).
- Right: off-white enquiry form card with a Book Free Counselling primary button, plus Call (outline) and WhatsApp buttons.
- Prop `noform` → buttons only (used on Contact).

### 5.12 Footer (locked)
- Starts **directly after the CTA**, with no empty band above.
- Top padding to the **Contact Us** button: 48 / 40 / 32. Navy button, white Heebo 600 label.
- Gap from the button to the link columns: 40 / 36 / 32.
- Columns: Courses (UG), Courses (PG), Company, Contact. Contact lines use map-pin / phone / mail icons.
- Social row on a tint band, then the copyright row.
- **Giant wordmark** "ESHIKSHAHUB" in navy Nunito 800 across the full width, with cut-out objects (cap, books, certificate, laptop) overlapping it.

### 5.13 Logo grids & marquee
- University grid: white cells with hairline gaps. Logos are grey and turn to colour on hover.
- Hiring-partner marquee: navy band with off-white names and 1px dividers; pauses on hover.

### 5.14 Mobile sticky bar
60px bar fixed at the bottom: **Call** (navy, white label) | **WhatsApp** (`#128C7E`, white label + icon). On course pages it becomes **Apply Now** (orange, `#B8410A` arrow segment) + call + WhatsApp squares.

---

## 6. Icons (Lucide)

| Meaning | Icon |
|---|---|
| UGC / approval | `award` |
| AICTE / university | `landmark` |
| NAAC | `file-badge` |
| NIRF / analytics | `bar-chart` |
| Online / mode | `laptop` |
| Live classes | `monitor-play` / `video` |
| Faculty / degree | `graduation-cap` |
| Placement / jobs | `briefcase` |
| Career focus | `target` |
| Pan-India | `map` |
| Fees | `indian-rupee` |
| EMI / wallet | `wallet` / `credit-card` |
| Library | `library` |
| Projects | `layers` / `clipboard-list` |
| Community | `users` |
| Mentorship | `messages-square` |
| Global | `globe` |
| Support / success | `headset` |
| Interviews | `mic` |
| Resume | `file-text` |
| Campus drives / duration | `calendar` |
| Workshops / soft skills | `presentation` |
| Rewards | `gift` |
| No limit | `infinity` |
| Tracking | `activity` |
| Top referrers | `trophy` |
| Course menu items | `book-open` |
| FAQ toggle | `plus` / `minus` |
| Gallery hover | `expand` |
| Contact | `map-pin`, `phone`, `mail` |
| Copied state | `copy` (never a check) |

---

## 7. Motion

Global easing: `cubic-bezier(.2, .7, .2, 1)` (ease-out). Trigger reveals once, when 20% of the element enters the viewport (IntersectionObserver).

| Element | Motion | Timing |
|---|---|---|
| Hero heading | Lines rise 16px + fade in | 600ms, 80ms stagger |
| Hero photo | Slow scale 1.00 → 1.05 | 8s, ease-out, once |
| Sections | Fade up 24px | 400ms ease-out, once |
| Tile / list grids | Children stagger | 60ms per item |
| Stat values | Count up from 0 (₹ and units stay static) | 1.2s ease-out, on reveal |
| Icons | Stroke draw (`stroke-dashoffset`) | 500ms on reveal |
| Primary button hover | Fill → `#B8410A`; arrow slides 4px right | 200ms |
| Text link hover | Underline scales X 0 → 1 from left; arrow 4px | 300ms |
| Feature tile `.wt` hover | Navy background, off-white text, icon tile orange/white | 250ms |
| Card hover (`.lift`) | translateY −3px + shadow `0 12px 32px rgba(24,29,56,.12)`; image zoom 1.05 | 250ms |
| Logos | Grey → colour on hover | 200ms |
| Partner marquee | Continuous horizontal scroll; pause on hover | ~40s per loop |
| Gallery tile hover | Image zoom 1.05, expand icon fades in, Mono caption slides up | 300ms |
| Nav on scroll | Wordmark off-white → navy; panel stays floating | 200ms |
| Mega-menu | Fade + 8px drop; chevron rotates 180° | 200ms |
| Mobile menu | Full-screen slide down; links stagger | 300ms + 40ms stagger |
| Accordion | Height ease; plus → minus | 240ms |
| Form focus | Border → orange with ring | 150ms |
| Form error | Field nudges 4px horizontally once | 300ms |
| Success panel | Fade in | 300ms |
| Reviews carousel | Auto-advance | every 5s, pause on hover |
| Process timeline | Line draws 01 → 05; each node fills orange as reached | 1.5s total |
| Copy referral link | Label swaps to COPIED (copy icon) | reverts after 2s |
| Footer | Wordmark rises 40px; cut-out objects drift (parallax 0.1–0.3) | on reveal / scroll |

### Reduced motion
Under `@media (prefers-reduced-motion: reduce)`: no marquee (static wrap), no parallax, no count-up (show final values), no hero scale. Reveals are instant. Hover colour changes stay.

---

## 8. Accessibility

- White on `#E85612` at 18px/600 is about 3.6:1. This passes only for large/bold text, so never use orange fill behind small text.
- White on `#128C7E` is about 4.4:1, which is borderline. Keep WhatsApp labels at 16px/600 or larger.
- Body text on white/off-white (`#52565B`) passes AA.
- Minimum tap target 44×44. Every icon-only button needs an `aria-label`. Decorative SVGs get `aria-hidden="true"`.
- The breadcrumb is `<nav aria-label="Breadcrumb">`. Forms use real `<label for>`.

---

## 9. Content still needed

- Real stock photography. Each grey block's caption names the required shot.
- Footer cut-out product photos.
- University and hiring-partner logo files.
- Real Google review quotes (20 words max), FAQ answers, and the MBA university list.
- Confirm the helper lines under stats and the "Why Learners Choose Us" descriptions; these were written as placeholders.
