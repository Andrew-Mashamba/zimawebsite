# Performance (Lighthouse & Core Web Vitals)

## Summary

- **LCP** is dominated by the hero images (n4, n5, n6). Optimizing them gives the largest gain.
- **CLS** is already low (~0.007); font and hero image dimensions help keep it stable.
- **FCP / TBT** are improved by non-render-blocking Font Awesome and font-display.

## Implemented

- **LCP image (n4.jpg):** `fetchpriority="high"`, `decoding="async"`, explicit `width`/`height`, `loading="eager"`.
- **Other hero images:** `decoding="async"`, `width`/`height`, `loading="lazy"`.
- **Hero logo:** Uses `zima2-hero.png` (144×176) at 72×88 display; smaller payload than full `zima2.png`. Explicit `width`/`height` to reduce CLS.
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

### 1. Hero logo – done

- **zima2-hero.png** (144×176, ~10 KB) is used in the hero; displayed at 72×88. Saves ~24 KB vs full zima2.png. Recreate with: `magick public/vf/zima2.png -resize 144x176 public/vf/zima2-hero.png`.

### 2. Cache lifetimes

- **Vite build (app-*.js, app-*.css):** If Lighthouse reports “None” for cache, the web server is likely serving `public/build/*` directly. Set long cache there (e.g. 1 year) — see **docs/DEPLOY.md** for Nginx/Apache snippets. Filenames are hashed so immutable cache is safe.
- Hero images / vf: 7d is fine; consider longer (e.g. 30d) if filenames are stable.

### 3. Google Fonts

- **Render blocking:** Google Fonts CSS is loaded with `rel="preload" as="style"` + `onload` so it doesn’t block first paint; `<noscript>` fallback included.
- **Font display:** `display=swap` is in the URL. For less CLS, consider `display=optional` or font metric overrides.

### 4. Font display – Font Awesome (optional)

- Font Awesome webfonts (cdnjs) don’t expose `font-display`; self-hosting the fonts with `font-display: swap` would address the Lighthouse hint (~100 ms).

### 5. Third-party JS/CSS

- **Livewire** and **Font Awesome** are required; minification/unused code is partly upstream. Keeping Font Awesome non-render-blocking (already done) helps LCP.

## Checklist before each release

- [x] Hero images under ~500 KB each; WebP served via `<picture>`.
- [ ] LCP image has `fetchpriority="high"` and is not lazy-loaded.
- [ ] Critical third-party origins have `preconnect` (or `dns-prefetch`).
- [ ] Font Awesome (and any other non-critical CSS) loaded non-render-blocking where possible.
- [ ] Important images have explicit `width`/`height` where layout is sensitive.
- [ ] Cache headers for static assets and Vite build outputs (see DEPLOY.md if Lighthouse reports “None” for app-*.js).
