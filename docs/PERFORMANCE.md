# Performance (Lighthouse & Core Web Vitals)

## Summary

- **LCP** is dominated by the hero images (n4, n5, n6). Optimizing them gives the largest gain.
- **CLS** is already low (~0.007); font and hero image dimensions help keep it stable.
- **FCP / TBT** are improved by non-render-blocking Font Awesome and font-display.

## Implemented

- **LCP image (n4.jpg):** `fetchpriority="high"`, `decoding="async"`, explicit `width`/`height`, `loading="eager"`.
- **Other hero images:** `decoding="async"`, `width`/`height`, `loading="lazy"`.
- **Hero logo (zima2.png):** `width="72"` `height="72"` to reserve space and reduce CLS.
- **Font Awesome:** Loaded with `media="print"` + `onload="this.media='all'"` so it doesn’t block first paint; `noscript` fallback.
- **Preconnect:** `fonts.googleapis.com`, `fonts.gstatic.com`, `cdnjs.cloudflare.com`.
- **Google Fonts:** Already using `display=swap` in the URL.
- **Hero images (n4, n5, n6):** Resized to 1680×940, compressed to ~120–165 KB JPEG each; WebP versions added (~57–110 KB). Template uses `<picture>` with WebP + JPEG fallback in `welcome.blade.php`. Originals backed up in `public/vf/_originals/`.

## Re-running hero image optimization

Uses **ImageMagick** (`magick`) and **libwebp** (`cwebp`). Install: `brew install imagemagick webp`.

```bash
cd public/vf/
# Backup originals first if needed: cp n4.jpg n5.jpeg n6.jpeg _originals/
magick _originals/n4.jpg -resize "1680x940^" -gravity center -extent 1680x940 -quality 82 n4.jpg
magick _originals/n5.jpeg -resize "1680x940^" -gravity center -extent 1680x940 -quality 82 n5.jpeg
magick _originals/n6.jpeg -resize "1680x940^" -gravity center -extent 1680x940 -quality 82 n6.jpeg
cwebp -q 82 n4.jpg -o n4.webp && cwebp -q 82 n5.jpeg -o n5.webp && cwebp -q 82 n6.jpeg -o n6.webp
```

## To do (remaining impact)

### 1. Hero logo – smaller asset

- **zima2.png** is 348×426 but displayed at 72×72 (~24 KB). Create a 72×72 or 144×144 (2x) version and use it in the hero (or add `srcset` with a smaller image) to save ~24 KB and avoid downscaling.

### 2. Cache lifetimes

- Ensure **app JS/CSS** (Vite build) have long cache (e.g. 1 year) with cache-busting query/hash. Many hosts set this automatically.
- Hero images: 7d is fine; after optimizing, consider longer (e.g. 30d) if filenames are stable.

### 3. Font display (optional)

- Google Fonts already uses `display=swap`. For even less CLS, consider `display=optional` or font metric overrides (e.g. `size-adjust`) so layout shifts from web fonts are minimal.

### 4. Third-party JS/CSS

- **Livewire** and **Font Awesome** are required; minification/unused code is partly upstream. Keeping Font Awesome non-render-blocking (already done) helps LCP.

## Checklist before each release

- [x] Hero images under ~500 KB each; WebP served via `<picture>`.
- [ ] LCP image has `fetchpriority="high"` and is not lazy-loaded.
- [ ] Critical third-party origins have `preconnect` (or `dns-prefetch`).
- [ ] Font Awesome (and any other non-critical CSS) loaded non-render-blocking where possible.
- [ ] Important images have explicit `width`/`height` where layout is sensitive.
- [ ] Cache headers for static assets and Vite build outputs are adequate.
