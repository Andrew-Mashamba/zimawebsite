<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();
    }

    /**
     * Configure rate limiting for the application.
     */
    protected function configureRateLimiting(): void
    {
        // Global rate limit: 120 requests per minute per IP
        RateLimiter::for('global', function (Request $request) {
            return Limit::perMinute(120)
                ->by($request->ip())
                ->response(function (Request $request, array $headers) {
                    return response('Too Many Requests. Please slow down.', 429, $headers);
                });
        });

        // Contact form: 5 submissions per hour per IP
        RateLimiter::for('contact-form', function (Request $request) {
            return Limit::perHour(5)
                ->by($request->ip())
                ->response(function (Request $request, array $headers) {
                    return response()->json([
                        'error' => 'Too many contact form submissions. Please try again later.',
                    ], 429, $headers);
                });
        });

        // PDF/Document downloads: 20 per hour per IP
        RateLimiter::for('downloads', function (Request $request) {
            return Limit::perHour(20)
                ->by($request->ip())
                ->response(function (Request $request, array $headers) {
                    return response('Too many download requests. Please try again later.', 429, $headers);
                });
        });

        // API endpoints: 60 requests per minute
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->ip());
        });

        // Sitemap: 10 requests per minute (prevent crawling abuse)
        RateLimiter::for('sitemap', function (Request $request) {
            return Limit::perMinute(10)->by($request->ip());
        });
    }
}
