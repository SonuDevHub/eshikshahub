# 03 · All Courses

Reference: `pages/courses-desktop.html`, `courses-tablet.html`, `courses-mobile.html`

| # | Section | Background | Content |
|---|---|---|---|
| 1 | Hero (compact) | Photo "Online class on a laptop" + overlay | Breadcrumb, H1 "Explore Our Courses", lead "10 UGC-approved online programs across UG and PG.", search field + Search button |
| 2 | Sticky filter bar | White + hairline | Tabs All / UG / PG (active = navy), duration chips 2 Yrs / 3 Yrs, "Showing 10 programs" |
| 3 | Course grid | Off-white | Cards: level chip (UG = navy with off-white text, PG = tint with `#B8410A` text), duration (clock icon), big abbreviation (BCA…), full name, Apply Now (primary, compact) + View Details link. Hover state shown on BBA. |
| 3b | Help strip | Navy | `.lbl.dk` "Need Help?", off-white H2 "Can't Decide? Ask Us", Get Free Counselling + WhatsApp (`#128C7E`) |
| 3c | UG filter state | — | Dashed reference block showing the filtered result |
| 4 | Universities | White | Locked grid |
| 5–6 | CTA + Footer | | Locked |

Programs: UG (3 yrs) BCA, BBA, BCom, BA · PG (2 yrs) MCA, MBA, MCom, MSc, MA, MAJMC.

Grid: 3 cols desktop → 2 tablet → 1 mobile (compact horizontal cards with a navy abbreviation block).

## Motion
- The filter bar sticks under the nav.
- Filtering cross-fades cards in 200ms.
- Card hover: orange top rule, −3px lift and shadow, and Apply Now turns `#B8410A` with the arrow sliding 4px.
