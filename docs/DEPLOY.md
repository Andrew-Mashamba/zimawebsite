# Deploy checklist (ZIMA website)

## After deploying to production (e.g. zima.co.tz)

Run these on the **server** (in the project root) so Laravel picks up the latest routes and config:

```bash
php artisan route:clear
php artisan config:clear
```

If you use route/config caching for performance, rebuild **after** the clear:

```bash
php artisan config:cache
php artisan route:cache
```

**Why:** If the server was using an old `bootstrap/cache/routes-v7.php` (or similar), routes like `our-services` and `our-products` won’t exist until the cache is cleared or regenerated. That causes “Route [our-services] not defined” on the live site even though the route is in `routes/web.php`.

## Optional: add to your deploy script

```bash
git pull
composer install --no-dev --optimize-autoloader
php artisan route:clear
php artisan config:clear
php artisan view:clear
# optional: php artisan route:cache && php artisan config:cache
```

## Cache for static assets (Lighthouse: “Use efficient cache lifetimes”)

Lighthouse may report **app-*.js** (Vite build) or other static files with **no cache** or short TTL. That usually means the **web server** is serving them (not Laravel), so our middleware never runs.

**Fix:** Configure the server to send long cache for hashed assets.

### Nginx (e.g. in `server` or `location`)

```nginx
location ~* ^/(build|vf)/.+\.(js|css|jpg|jpeg|png|gif|webp|woff2?|ttf|eot)$ {
    add_header Cache-Control "public, max-age=31536000, immutable";
}
```

### Apache (e.g. in `.htaccess` or vhost)

```apache
<IfModule mod_headers.c>
    <FilesMatch "\.(js|css|jpg|jpeg|png|gif|webp|woff2?|ttf|eot)$">
        Header set Cache-Control "public, max-age=31536000, immutable"
    </FilesMatch>
</IfModule>
```

Vite filenames include a hash (e.g. `app-CqflisoM.js`), so long cache is safe. After changing server config, reload the server and re-run Lighthouse.
