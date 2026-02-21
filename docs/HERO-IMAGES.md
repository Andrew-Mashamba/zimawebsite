# Hero slider images (n4, n5, n6) – ERR_CONNECTION_RESET

## What the error means

**`Failed to load resource: net::ERR_CONNECTION_RESET`** for `n4.jpg`, `n5.jpeg`, `n6.jpeg` means the browser started loading the image but the **connection was closed** before the file finished transferring. The server or something in the network (firewall, proxy, hosting limit) is cutting the connection.

## Likely cause: file size and timeouts

The hero images are very large:

| File     | Approx size | Typical for web hero |
|----------|-------------|------------------------|
| n4.jpg   | ~6 MB       | 200–500 KB            |
| n5.jpeg  | ~9 MB       | 200–500 KB            |
| n6.jpeg  | ~9.5 MB     | 200–500 KB            |

When the server takes too long to send the file, or a proxy/timeout limit is hit, the connection is reset and the browser reports `ERR_CONNECTION_RESET`.

## Fix: optimize the images

1. **Resize** to the size they’re shown at (e.g. max width 1920px or 1440px for full‑width hero).
2. **Compress** (e.g. 80–85% JPEG quality) so each file is roughly **200–500 KB**.
3. **Replace** the files in `public/vf/`:
   - `n4.jpg`
   - `n5.jpeg`
   - `n6.jpeg`
4. Optionally export as **WebP** and serve WebP with JPEG fallback for smaller size and faster load.

After replacing with smaller files, reload the site; the connection reset errors for these images should stop.

## If you can’t change the files right away

Temporarily point the hero slider at smaller images you already have (e.g. `n1.jpg`, `n2.jpg`, `n3.jpg` in `public/vf/`) in `resources/views/livewire/frontend/components/welcome.blade.php` so the page loads without errors until n4/n5/n6 are optimized.
