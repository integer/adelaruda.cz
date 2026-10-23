# Design system: adelaruda.cz

Style guide for the website of Mgr. Adéla Rudá, psychologist and psychotherapist in Prague.
It describes the visual language of the site so that future changes stay consistent.

- Styles: `www/style.css` (one stylesheet shared by all pages)
- Pages: `www/index.html` (Czech, primary) and `www/en/index.html` (English mirror)
- Plain HTML and CSS, no build step, no framework, no JavaScript libraries

Sections 1 to 7 and 9 are the rules. Section 8 describes how the components are built today;
components may change as long as they follow the rules.

## 1. Character

The site should feel like the practice itself: calm, warm, personal and trustworthy.

- **Light and airy.** White page, soft cream surfaces, generous spacing. Nothing loud.
- **Personal, not corporate.** Real photos of Adéla and of the office carry the visuals.
- **Content first.** One narrow reading column with long-form text that is easy to read.
- **Flat.** No shadows, no gradients, no textures. Depth comes only from cream surfaces on white.
- **Restrained accent.** Navy does the work, rose marks what matters.

## 2. Color

| Token              | Value                     | Role                                                                                                   |
|--------------------|---------------------------|--------------------------------------------------------------------------------------------------------|
| `--color-navy`     | `#123c69`                 | All text, headings and links. Base of the header and navigation.                                       |
| `--color-navy-a`   | `rgba(18, 60, 105, 0.85)` | Sticky navigation background (with `backdrop-filter: blur(4px)`).                                      |
| `--color-navy-b`   | `rgba(18, 60, 105, 0.75)` | Header band (renders as about `#4d6d8f` on white).                                                     |
| `--color-rose`     | `#ac3b61`                 | Accent: h2 rule, h4/h6, link hover, input focus, callout borders, table group headings, button hover.  |
| `--color-rose-lt`  | `#c65a7f`                 | Primary button background, hover of the GDPR toggle.                                                   |
| `--color-cream`    | `#f5f1ef`                 | Text on navy and on buttons. Lightest warm tint.                                                       |
| `--color-cream-bg` | `#eee2dc`                 | Warm surface: cards, callouts, place cards, table headings.                                            |
| `--color-white`    | `#ffffff`                 | Page background, form fields.                                                                          |

Supporting values (not tokens): `#f7f4f2` table zebra (cream tint), `#bbb` form field border,
success message `#eaf6ee` / `#3a9e5f` / `#1f6b3d`, error message `#fdf0f3` with rose.

Rules

- The palette is closed: navy, rose, cream and white. Other shades are allowed only as tints or
  transparency of these. The only other hue is green, reserved for the success message.
- Text is navy, never black or grey. On navy surfaces text is cream.
- Rose is an accent for small areas (lines, small headings, hover states, buttons). Never body text,
  never large backgrounds.
- The photos (beige walls, brick, greenery, blue cushions) harmonise with cream and navy.
  New colours must not compete with the photography.
- Text meets WCAG AA contrast: 4.5:1, or 3:1 for large text (at least 18.66 px bold or 24 px regular).

## 3. Typography

Fonts from Google Fonts with `display=swap`:

- **Nunito** 400 and 700 for everything (`--font-base`).
- **Roboto Serif** italic 400 (optical size 8 to 144) only for the tagline under the name.
  It is the emotional accent, never used for body text or headings.

| Element             | Size                        | Weight                  | Color                  | Notes                                            |
|---------------------|-----------------------------|-------------------------|------------------------|--------------------------------------------------|
| Base (`body`)       | 1rem (16 px)                | 400                     | navy                   | line-height 1.65                                 |
| Paragraphs, lists   | `larger` (about 1.2rem)     | 400                     | navy                   | main reading size, about 19 px                   |
| Lead (`p.claim`)    | `x-large` (1.5rem)          | 400, first sentence 700 | navy                   | opening statement                                |
| h1                  | 2.4rem                      | 700                     | navy (cream in header) |                                                  |
| h2                  | 1.9rem                      | 700                     | navy                   | 2 px rose rule underneath                        |
| h3                  | 1.45rem                     | 700                     | navy                   |                                                  |
| h4                  | 1.3rem                      | 700                     | rose                   | list headings inside sections and cards          |
| h5                  | 1rem                        | 700                     | navy                   | small card titles                                |
| h6                  | 0.9rem                      | 700                     | rose                   |                                                  |
| Tagline             | 1.15rem                     | Roboto Serif italic 400 | cream                  |                                                  |
| UI text             | 0.85 to 0.95rem             | 700                     | navy / cream           | buttons, labels, fields, table, language switch  |

- Headings: line-height 1.25, 2rem above, 0.5rem below.
- Sentence case everywhere. No all-caps and no letter-spaced labels (nav links only have a slight
  0.05rem tracking).
- Key facts are emphasised with `<strong>` / `<b>` (for example "24 hodin předem").
- Links: navy, underlined, weight 600 (renders as 700). On hover rose, without underline.

## 4. Layout and spacing

- One centered content column: `--max-width: 860px`, side padding 1.5rem, 4rem at the bottom.
- Content (text, photos, cards) always stays inside the column. Only background surfaces
  (header, navigation) span the full viewport width.
- `--gap: 2rem` between cards and columns.
- Vertical rhythm: headings 2rem above and 0.5rem below, photos and card groups 1.5rem above and below.
- Fluid layout built on flex-wrap (cards `flex: 1 1 300px`, pricing 260 px + 420 px, form columns
  220 px). Everything must work from 320 px wide.
- Anchors have `scroll-margin-top: 4rem` so targets are not hidden under the sticky navigation.

## 5. Shape, lines, depth

- `--radius-sm: 4px`: buttons, form fields, nav pills, callouts, place cards, status messages.
- `--radius-md: 8px`: photos, service cards.
- `50%`: circular elements (the contact portrait).
- Accent lines are rose: 2 px (h2 rule, GDPR content border), 3 px on the left edge of callouts
  and status messages.
- No shadows and no gradients. The LinkedIn logo keeps its own brand gradient.

## 6. Motion

- Only short state transitions: colour, background and border 0.15 s; opacity and the toggle arrow 0.2 s.
- Hover: links turn rose, buttons darken (rose-lt to rose), logos go from 75 % to 100 % opacity,
  the LinkedIn icon scales to 1.15.
- No decorative animation, parallax or scroll effects.

## 7. Imagery

- Photos only: portraits of Adéla outdoors (`portret_zed.jpg`, `portret_strom.jpg`), the office
  (`kancl.webp` panorama, `kancelar_detail.jpg`) and a small portrait for contact (`kontakt.jpg`, 400×400).
- Photos are shown large, with 8 px rounded corners, `object-fit: cover`, no filters, overlays or text on top.
- The contact portrait is a 170 px circle.
- No illustrations, stock images or decorative icon sets. The only icon is the LinkedIn logo.
- Partner logos (ČAP, VZP) sit at the end of the page, 130 px tall, 75 % opacity, 100 % on hover.
- Every image has a meaningful `alt` text in the language of the page.

## 8. Components (current implementation)

### Navigation
Sticky at the top, full width, `--color-navy-a` with a 4 px backdrop blur. Inside the 860 px column
the name "Adéla Rudá" sits on the left (cream, bold, hidden under 820 px) and the links on the right.
Links are cream pills: bold, no underline, padding `0.3rem 0.65rem`, 4 px radius. Hover and active
state: cream background, navy text. The active link follows the section in view
(IntersectionObserver). The language switch "CZ | EN" closes the row: 0.85rem, 80 % opacity.
On narrow screens the links wrap and are centered.

### Hero
`header.hero` (`#uvod`): full-width cream band. From 760 px two columns (text 1.1fr, photo 0.9fr),
stacked below. Text: h1 name, tagline (Roboto Serif italic 1.15rem, navy), lead `p.claim`,
chips with key facts, intro paragraph and two buttons (primary to the booking form, secondary to
the services). Photo: `portret_zed.jpg` in a 2:3 portrait crop (4:3 on small screens), 8 px radius.

### Sections
`section.section`: 4.5rem vertical padding (3rem on small screens). `.section--cream` alternates the
background: hero cream, O mně white, Služby cream, Podmínky a ceník white, Kontakt cream, footer white.
Surfaces inside a cream section are white, surfaces inside a white section are cream-bg.

### Section heading
h2 followed by a short rose line, 3.5rem × 2 px (`h2::after`).

### Lead
`p.claim`: bold statement, `x-large`.

### Chips
`.chips`: key facts in the hero. White background, 4 px radius, 0.95rem bold navy, wrapping row.

### Photo
`.image-container`: 8 px radius, `overflow: hidden`, 1.5rem vertical margin. `.split` places text
and a photo side by side from 760 px, photo on the left in a 4:5 crop.

### Timeline
`.cv` for education and practice: rows divided by 1 px cream-bg lines, the period in a 7.5rem left
column (0.95rem bold rose), the description on the right. Under 560 px the period sits above the
text. Main degrees are bold, training programmes link to their websites.

### Tiles
`.dlazdice` for the forms of cooperation: grid with 300 px minimum columns, white tiles with 8 px
radius, a bold 1.3rem title and one sentence.

### Service cards
`.services-wrapped` grid (300 px minimum columns, 2rem gap). `.service-card`: white, 8 px radius,
1.8rem padding. Contains an h3, an intro paragraph, an h4 in rose and a bullet list with rose
markers and bold labels.

### Steps
`.kroky`: numbered vertical steps. The number sits in a 2.5rem cream-bg circle, a 2 px cream-bg line
connects the steps, the title is an h4 in rose followed by a short paragraph.

### Terms
`.podminky`: definition rows with a bold title in a 12rem left column and the text on the right,
divided by 1 px cream-bg lines. Stacked under 640 px.

### Callout
`.info-panel`: cream-bg background, 3 px rose left border, 4 px radius, padding `0.9rem 1.2rem`,
text 1.1rem. Used for the booking note in the form and for the payment details.

### Disclosure
`details.gdpr-toggle`: summary in rose, bold, with a `›` arrow that rotates 90° when open.
The content is indented with a 2 px rose left border.

### Pricing
`.cenik` holds two `.cena-karta` cards: cream-bg, 8 px radius, 1.8rem padding. Each has an h4
with the type of therapy, optionally who it is for, and rows "duration / price" divided by white
lines. Prices are 1.45rem bold and use a non-breaking space as the thousands separator (1 500 Kč).

### Contact
`.kontakt-grid`: two white cards (5fr / 7fr from 760 px). The contact card is centered: 170 px
circular portrait, name as h3, email, phone, IČ, bank account, a bilingual note and the LinkedIn
icon (30 px). The second card holds the booking form.

### Where we meet
`.misto`: the office photo next to two stacked place cards. `.kontakt__karta`: white, 4 px radius,
1.5rem padding, h4 title (Praha / Online), address and a "mapa" button.

### Buttons
`.button-primary`: rose-lt background, cream text, 1 px border in the same colour, 4 px radius,
padding `0.6rem 1.4rem`, 1.2rem bold. Hover: rose. `.button-secondary`: transparent with a 1 px navy
border and navy text; on hover it fills navy with cream text.

### Form
Bold 0.9rem labels above the fields. Fields: full width, 1 px `#bbb` border, 4 px radius, padding
`0.55rem 0.75rem`, 0.95rem; on focus a rose border and a 1 px rose outline. Textarea at least 120 px
high, vertical resize only. Email and place sit side by side in `.row` / `.six.columns` (they wrap
under 220 px). The status message under the button is green on success and rose on error, both
with a 3 px left border.

### Focus
Keyboard focus shows a 2 px rose outline with a 2 px offset (`:focus-visible`).

### Footer
`footer.site-footer` on white with the partner logos `.loga`: centered wrapping row, 1.5rem gap.

## 9. Content and voice

- Czech lives at `/`, English at `/en/`. Both pages share the same structure, the same section ids
  (`uvod`, `o-mne`, `sluzby`, `cenik`, `kontakt`) and `style.css`. A change in one language is
  mirrored in the other.
- First person, warm, direct and plain. The reader is addressed with the formal "vy" (lowercase on
  the web) and gender-inclusive forms ("sám/a", "osamělý/á").
- No marketing hype or superlatives. Avoid typography that reads as machine-written, notably the
  em dash (—). Czech text uses the en dash (–) only where it belongs typographically.
- Non-breaking space after one-letter Czech prepositions and conjunctions where a line could break
  (`i&nbsp;online`).
- Facts that matter to clients are bold: cancellation 24 hours ahead, insurance contributions.

## 10. Known deviations

Current inconsistencies, not part of the style:

- Buttons use 1.2rem instead of the 0.85 to 0.95rem UI text size. Cream on rose-lt reaches only
  about 3.6:1, which meets WCAG AA for large bold text but not at the smaller size, so the two rules
  cannot both hold with the current button colours.
- Section 4 names flex-wrap widths (cards 300 px, pricing 260 + 420 px). Layouts now use CSS grid
  with the same 300 px minimum column.
- `--color-navy-b` is defined but unused: the header is now a cream hero, so the tagline and h1 are
  navy instead of cream.
- Unused files in `www/assets/`: `kontakt_old.jpg`, `zed.webp`, `portret-drevo.webp`,
  `kancl-detail.webp`, `kancelar_detail.webp`.
