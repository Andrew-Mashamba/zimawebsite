# ZIMA Solutions Limited - Brand Design Guide

## Company Information
- **Name:** ZIMA Solutions Limited
- **TIN:** 181-314-605
- **Incorporated:** January 17, 2025
- **Tagline:** "Build Your Future"

---

## Brand Colors

### Color Palette - ZIMA Blue Spectrum

#### Primary Blue (Blue-900 - Stable, Classic, Confident)
- **Hex:** `#1e3a8a`
- **Name:** Blue-900 (Tailwind)
- **RGB:** R:30, G:58, B:138
- **Usage:** Primary branding, logo, headers, CTAs, main accents, navigation

#### Secondary Blue (Secure, Collected, Worldly)
- **Hex:** `#3b82f6`
- **Name:** Blue-500 (Tailwind)
- **RGB:** R:59, G:130, B:246
- **Usage:** Interactive elements, hover states, links, buttons

#### Accent Blue (Calm, Useful, Approachable)
- **Hex:** `#93c5fd`
- **Name:** Blue-300 (Tailwind)
- **RGB:** R:147, G:197, B:253
- **Usage:** Subtle backgrounds, highlights, badges, soft accents

### Secondary Color - Pure White
- **Hex:** `#feffff`
- **CMYK:** C:0, M:0, Y:0, K:0
- **RGB:** R:254, G:255, B:255
- **Usage:** Backgrounds, text on dark backgrounds, clean spaces

### Supporting Colors (Recommended)
- **Dark Gray:** `#2c3e50` - Body text, professional contrast
- **Light Gray:** `#ecf0f1` - Section backgrounds, subtle dividers
- **Success Green:** `#27ae60` - Success states, positive actions
- **Warning Orange:** `#f39c12` - Alerts, important information
- **Error Red:** `#e74c3c` - Errors, critical alerts

---

## Typography

### Primary Font - Roboto Slab
- **Type:** Serif
- **Weights:** 300 (Light), 400 (Regular), 700 (Bold)
- **Usage:** Headings (H1-H6), Hero text, Section titles
- **CDN:** `https://fonts.google.com/specimen/Roboto+Slab`

```css
font-family: 'Roboto Slab', serif;
```

### Secondary Font - Source Sans Pro
- **Type:** Sans-serif
- **Weights:** 300 (Light), 400 (Regular), 600 (Semibold), 700 (Bold)
- **Usage:** Body text, paragraphs, UI elements, buttons
- **CDN:** `https://fonts.google.com/specimen/Source+Sans+Pro`

```css
font-family: 'Source Sans Pro', sans-serif;
```

### Font Pairing Examples

```css
/* Headings */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Roboto Slab', serif;
    color: #2c3e50;
}

/* Body Text */
p, span, div {
    font-family: 'Source Sans Pro', sans-serif;
    color: #2c3e50;
}

/* Buttons */
button, .btn {
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 600;
}
```

---

## Color Usage Guidelines

### Background Combinations

**Option 1 - Clean Tech Look:**
```css
background: #feffff;
color: #2c3e50;
accent: #1e3a8a;
```

**Option 2 - Bold Statement:**
```css
background: #1e3a8a;
color: #feffff;
accent: #93c5fd;
```

**Option 3 - Subtle Sections:**
```css
background: #93c5fd;
color: #1e3a8a;
accent: #3b82f6;
```

**Option 4 - Gradient Hero:**
```css
background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #93c5fd 100%);
color: #feffff;
accent: #feffff;
```

### Button Styles

**Primary Button:**
```css
background-color: #1e3a8a;
color: #feffff;
border: none;
```

**Primary Button Hover:**
```css
background-color: #3b82f6;
color: #feffff;
border: none;
```

**Secondary Button:**
```css
background-color: transparent;
color: #1e3a8a;
border: 2px solid #1e3a8a;
```

**Secondary Button Hover:**
```css
background-color: #93c5fd;
color: #1e3a8a;
border: 2px solid #1e3a8a;
```

**Ghost Button:**
```css
background-color: transparent;
color: #feffff;
border: 2px solid #feffff;
```

---

## Logo Usage

### Minimum Size
- Digital: 120px width
- Print: 25mm width

### Clear Space
- Maintain minimum clear space equal to the height of "ZIMA" text on all sides

### Color Variations
1. **Full Color:** Blue-900 (#1e3a8a) on white
2. **Dark Version:** Blue-500 (#3b82f6) on Blue-900 (#1e3a8a)
3. **Light Version:** Blue-900 (#1e3a8a) on Blue-300 (#93c5fd)
4. **Reversed:** White on Blue-900 (#1e3a8a) background
5. **Monochrome:** Black on white / White on black

---

## Typography Scale

```css
/* Desktop */
h1: 48px (3rem) - Roboto Slab Bold
h2: 36px (2.25rem) - Roboto Slab Bold
h3: 28px (1.75rem) - Roboto Slab Regular
h4: 24px (1.5rem) - Roboto Slab Regular
h5: 20px (1.25rem) - Roboto Slab Regular
h6: 18px (1.125rem) - Roboto Slab Regular
body: 16px (1rem) - Source Sans Pro Regular
small: 14px (0.875rem) - Source Sans Pro Regular

/* Mobile */
h1: 32px (2rem)
h2: 28px (1.75rem)
h3: 24px (1.5rem)
h4: 20px (1.25rem)
h5: 18px (1.125rem)
h6: 16px (1rem)
body: 16px (1rem)
small: 14px (0.875rem)
```

---

## Spacing System

```css
--space-xs: 4px;
--space-sm: 8px;
--space-md: 16px;
--space-lg: 24px;
--space-xl: 32px;
--space-2xl: 48px;
--space-3xl: 64px;
```

---

## Implementation

### Google Fonts Import

```html
<!-- Add to <head> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
```

### CSS Variables

```css
:root {
    /* ZIMA Blue Spectrum (Tailwind Blue Scale) */
    --color-blue-900: #1e3a8a;      /* Primary - Stable, Classic, Confident */
    --color-blue-500: #3b82f6;      /* Secondary - Secure, Collected, Worldly */
    --color-blue-300: #93c5fd;      /* Accent - Calm, Useful, Approachable */
    
    /* Primary Colors */
    --color-primary: #1e3a8a;
    --color-secondary: #feffff;
    --color-dark: #2c3e50;
    --color-light: #ecf0f1;
    
    /* Supporting Colors */
    --color-success: #27ae60;
    --color-warning: #f39c12;
    --color-error: #e74c3c;
    
    /* Fonts */
    --font-heading: 'Roboto Slab', serif;
    --font-body: 'Source Sans Pro', sans-serif;
    
    /* Spacing */
    --space-xs: 4px;
    --space-sm: 8px;
    --space-md: 16px;
    --space-lg: 24px;
    --space-xl: 32px;
    --space-2xl: 48px;
    --space-3xl: 64px;
}
```

---

## Brand Voice

- **Professional:** Expert but approachable
- **Empowering:** "Build Your Future" - client-focused
- **Innovative:** Forward-thinking, modern solutions
- **Reliable:** Trustworthy partner in digital transformation
- **Clear:** Technical excellence explained simply

---

## Design Principles

1. **Clean & Modern:** Minimize clutter, maximize impact
2. **User-Centric:** Design for client empowerment
3. **Accessible:** WCAG 2.1 AA compliance
4. **Responsive:** Mobile-first approach
5. **Consistent:** Maintain brand identity across all touchpoints

---

*Last Updated: November 25, 2025*
*ZIMA Solutions Limited - Build Your Future*
