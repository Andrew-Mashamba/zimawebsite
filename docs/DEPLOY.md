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
