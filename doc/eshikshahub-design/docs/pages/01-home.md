# 01 · Home

Reference: `pages/home-desktop.html`, `home-tablet.html`, `home-mobile.html`
States: `state-mega-menu-desktop.html`, `state-mobile-menu.html`

| # | Section | Background | Content | Desktop → Tablet → Mobile |
|---|---|---|---|---|
| 1 | Hero | Photo + 70% navy overlay | `.lbl.dk` "UGC-Approved Online Degrees", H1 "Best Online Learning Platform", lead. Buttons: Get Free Counselling (primary) + Explore Courses (outline dark). Quick Enquiry form card on the right (name, mobile, course, university). | Form beside text → form below text → form stacks under hero |
| 1b | Proof strip | White blocks overlapping the hero bottom | `.stats`, 4 blocks: Google Rating 4.9/5 · Reviews 50+ learners · Universities 12 partners · Programs 10 degrees | 4 → 2×2 → 2×2 |
| 2 | Universities | White | Label, H2 "Top-Ranked Partner Universities", lead, 12-logo grid | 6 cols → 4 → 2 |
| 3 | About | Off-white | Two overlapping photos + orange square; label, H2 "Welcome to eShikshaHub", 6 `.irow` items (award, laptop, graduation-cap, briefcase, target, map), "More About Us" link | 2 col → stacked → stacked |
| 4 | Hiring partners | Navy | `.lbl.dk`, off-white H2 "Careers with Global Brands", marquee | — |
| 5 | Courses | White | H2 "Explore Our Courses", UG / PG cards with image, level label, Apply Now + View Details | 4 → 2 → 1 |
| 6 | Why Choose Us | Off-white | `4fr/8fr`: heading + tall photo "Student with a mentor" · 8 `.wt` tiles (graduation-cap, video, file-badge, clipboard-list, library, messages-square, rupee, headset) | 2-col tiles → photo row + 2-col → photo above, 1-col |
| 7 | Reviews | White | Google reviews carousel: stars, quote, avatar initial, name | 3 → 2 → 1 |
| 8 | CTA (locked) | Photo + navy | See DESIGN.md §5.11 | |
| 9 | Gallery | Off-white | 5 event photos, hover: zoom + expand icon + caption | Masonry → 2 col → 1 col |
| 10 | Footer (locked) | Off-white / tint | See DESIGN.md §5.12 | |

## Motion
- Hero lines rise with a stagger; the hero photo scales slowly.
- Proof stats count up.
- The partner marquee loops and pauses on hover.
- Why tiles stagger in and use the navy hover.
- Reviews auto-advance every 5s.
- The gallery zooms and shows a caption on hover.
- The footer wordmark rises and its objects drift in parallax.
