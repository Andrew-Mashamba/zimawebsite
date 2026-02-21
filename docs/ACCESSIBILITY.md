# Accessibility

## Implemented (Lighthouse / WCAG)

### Viewport
- **Zoom allowed:** `user-scalable=no` removed from the main layout (`layouts/web.blade.php`) so users can pinch-zoom. Required for low-vision users.

### Touch targets
- **Hero slider dots:** Minimum 44×44 px touch area with 12 px gap. The visible dot is centered inside the hit area. See `welcome.blade.php` `.hero-dot` and `.hero-pagination`.

### Contrast (WCAG AA)
- **Text on light backgrounds:** Orange text on white or light gray uses **#B84814** (darker orange) so contrast is at least 4.5:1. Applied to:
  - "Our Motto", "Who We Are"
  - "View services →", "View products →", and other summary card links on the homepage
- **Hero primary button:** Background **#D95214** (darker orange) with white text for sufficient contrast; hover **#C44A12**. Active pagination dot uses the same **#D95214**.

### Link and control labels
- **Header icon links:** Icon-only links in the top bar have `aria-label`:
  - Phone: `aria-label="Call us: +255 69 241 0353"`
  - Email: `aria-label="Email us: info@zima.co.tz"`
  - Contact/hours: `aria-label="Contact us and opening hours"`

## Manual checks (Lighthouse “Additional items to manually check”)

### Interactive controls are keyboard focusable
- All hero controls are native `<button>` or `<a>` and receive focus by default.
- Hero slider container has `tabindex="0"` so it can receive focus for arrow-key handling.
- **Focus indicator:** `:focus-visible` styles added in `layouts/web.blade.php` (global) and in `welcome.blade.php` (hero buttons/dots): 2px outline, offset 2px. Links use orange outline; buttons/inputs use primary blue.

### Interactive elements indicate purpose and state
- Hero prev/next buttons: `aria-label="Previous slide"` / `"Next slide"`.
- Hero dots: `aria-label="Go to slide N"` and `aria-current="true"` on the active dot (updated in JS when slide changes).
- Buttons and links use hover and focus-visible styles so they look interactive.

### Logical tab order
- DOM order matches content order: header → main → footer. No focusable offscreen elements. Hero slides use `aria-hidden` so only the active slide is exposed to assistive tech.

### Visual order matches DOM order
- No CSS reordering (e.g. flex order or position) that would make tab order diverge from visual order on the homepage hero or main sections.

### User focus is not trapped
- No modals or dialogs that trap focus. Hero carousel does not trap focus; users can tab in and out of prev/next/dots and the slider region.

### Focus directed to new content
- N/A for current design (no dynamic dialogs or injected content that would require focus management).

### HTML5 landmark elements
- **&lt;header&gt;** in `header.blade.php` (site header and nav).
- **&lt;main id="main-content" role="main"&gt;** in `layouts/web.blade.php`.
- **&lt;footer role="contentinfo" aria-label="Site footer"&gt;** in `footer.blade.php`.
- Home sections use `&lt;section&gt;` with `aria-label` or `id` where appropriate (e.g. `id="about"`, `aria-label="Who we are"`).

### Offscreen content hidden from assistive technology
- **Hero slides:** Inactive slides have `aria-hidden="true"`; the active slide has `aria-hidden="false"`. Updated in JS in `goToSlide()` so screen readers only get the visible slide.

### Custom controls have associated labels
- Hero dots: each has `aria-label="Go to slide N"`.
- Hero prev/next: `aria-label="Previous slide"` / `"Next slide"`.
- Slider region: `aria-label="Hero carousel"`, `aria-roledescription="carousel"`.

### Custom controls have ARIA roles
- Hero slider: `role="region"`, `aria-roledescription="carousel"`.
- Pagination group: `role="group"`, `aria-label="Slide navigation"`.
- All interactive controls are native `<button>` or `<a>`; no custom role needed. Footer has `role="contentinfo"` (redundant with `<footer>` but explicit).

### Keyboard support (hero)
- When focus is inside the hero slider (or on the region), **Arrow Left** / **Arrow Right** move to previous/next slide and reset autoplay.

## Color reference (accessibility)

| Use | Color | Contrast note |
|-----|--------|----------------|
| Primary brand orange (decorative / large) | #FF621B | OK for large text or on dark; avoid for small text on white |
| Text on white/light (links, labels) | #B84814 | ≥4.5:1 on #fff / #f8f9fa |
| Buttons (primary) | #D95214 bg, #FEFFFF text | Meets AA for white on orange |
| Primary blue | #1F3B8D | Use for text on white; check contrast for small text |

## Checklist for new UI

- [ ] No `user-scalable=no` or `maximum-scale<5` on viewport.
- [ ] Interactive elements (buttons, links, tabs) have at least 44×44 px touch target.
- [ ] Icon-only links/buttons have `aria-label` or visible text.
- [ ] Text on white/light uses contrast ≥4.5:1 (normal) or ≥3:1 (large); use #B84814 for orange accent text on light.
- [ ] All custom controls are keyboard focusable and show a visible `:focus-visible` indicator.
- [ ] Landmarks used: `<header>`, `<main>`, `<footer>`, `<nav>` where appropriate.
- [ ] Offscreen or hidden content (e.g. inactive carousel slides) has `aria-hidden="true"`.
- [ ] Custom controls have an accessible name (`aria-label` or `aria-labelledby`) and appropriate role if not native elements.
