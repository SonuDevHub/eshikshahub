# 04 · Course Detail (MBA template)

Reference: `pages/course-mba-desktop.html`, `course-mba-tablet.html`, `course-mba-mobile.html`
Use this as the template for every course page: swap the name, facts, specializations, semesters and careers.

| # | Section | Background | Content |
|---|---|---|---|
| 1 | Hero | Photo "Working professional studying in the evening" + overlay | Breadcrumb Home / Courses / MBA, H1 "Online MBA Degree", lead, Apply Now + View Curriculum (outline dark) |
| 2 | Key facts | Off-white band (white on tablet/mobile) | `.stats`, 5 blocks (exact copy below) |
| 3 | Sticky tab nav | White | Overview · Specializations · Curriculum · Universities · Careers · FAQs (active underline 2px orange) |
| 4 | Overview | White | H2 "About the Program"; 6 `.wt` tiles: Live + Recorded Lectures (monitor-play), Industry Projects (briefcase), Global Case Studies (globe), Soft Skills Training (presentation), Capstone Project (clipboard-list), Placement Assistance (target). Mobile uses `.irow`. |
| 5 | Specializations | Off-white | 8 cells with tint icon tiles: Marketing, Finance, HR, Business Analytics, Data Science, Operations Management, IT & FinTech, General Management |
| 6 | Curriculum | White | Accordion Semester 1–4; open state lists subjects 1.1–1.6 |
| 7 | Learning Formats | Off-white | Photo mosaic: Top MBA Faculty, Flexible Learning, Case Studies & Projects, E-Library Access (orange icon tiles, off-white labels) |
| 8 | Why Choose Our MBA | White | 5 `.wt` tiles (calendar, briefcase, wallet, trending-up, messages-square) |
| 9 | Universities | Off-white | University logo cells + Compare link |
| 10 | Careers | White | Roles as `.irow` with icons; Sectors on a navy strip (off-white text, 2px orange top rule) |
| 11 | Partners + Recognitions | Navy | Marquee; Recognitions row with off-white Mono label and orange 24px icons |
| 12 | FAQs | Off-white | Accordion with plus / minus |
| 13–14 | CTA ("Start Your MBA Today") + Footer | | Locked |

**Desktop:** the main column sits beside a 400px **sticky enquiry card** (off-white, 4px orange top border, `top: 88px`). Alternating section backgrounds run full-bleed to the left page edge and stop at the aside column.
**Tablet/mobile:** the enquiry form sits under the key facts. Mobile has a sticky **Apply Now | Call | WhatsApp** bar.

## Key facts (exact)

| Label | Value | Unit | Helper | Icon |
|---|---|---|---|---|
| DURATION | 24 | Months | 4 semesters | calendar |
| FEES | ₹12,000 | /semester | Starting fee | indian-rupee |
| PAYMENT | No-Cost | EMI | Flexible options | credit-card |
| MODE | 100% | Online | Live + recorded | laptop |
| APPROVAL | UGC | Approved | Govt. recognised | award |

Per row: 5 desktop · 2 tablet · 2 mobile (on mobile the unit wraps under the value).

## Motion
- Key-fact values count up.
- The enquiry card sticks on desktop. The tab nav sticks and underlines the section in view (scroll-spy).
- Accordions use a 240ms height ease, and the plus turns into a minus.
- The learning-format photos zoom 1.05 on hover.
