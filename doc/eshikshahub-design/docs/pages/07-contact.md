# 07 · Contact

Reference: `pages/contact-desktop.html`, `contact-tablet.html`, `contact-mobile.html`

| # | Section | Background | Content |
|---|---|---|---|
| 1 | Hero (compact) | Photo "Counsellor on a call with a headset" + overlay | Breadcrumb, H1 "We're Here to Help", lead |
| 2 | Contact blocks | White, overlapping the hero by 104px | Call (+91-96278-49717), WhatsApp Us, Email (info@eshikshahub.in), Visit Our Office (navy, off-white text, orange icon tile). Mobile: the WhatsApp block is `#128C7E` with white text. |
| 3 | Form + Reach Us | Off-white section, white form card + navy aside | Form: name, email, mobile, course, university, message → Send Message. Aside: `.lbl.dk` "Reach Us", "Talk to a Counsellor", phone / email / Noida / Agra lines with orange 24px icons, Chat on WhatsApp. |
| 3b | Form states | — | Default, focus, error (alert-circle + message), success (navy, orange headset tile, "We'll call you shortly.") |
| 4 | Offices | White | Noida (Sharkspace, A-83, Sector 63, UP 201301) and Agra (AVR Complex, A-1, Fatehabad Road, UP 283111). Map embed + Get Directions. |
| 5–6 | CTA (no form) + Footer | | Locked, `noform` |

Contact blocks: 4 cols desktop → 2×2 tablet → 2×2 mobile.

## Motion
- Contact blocks lift on hover.
- Field focus: orange border in 150ms.
- Error: the field nudges 4px once (disabled under reduced motion).
- The success panel fades in.
