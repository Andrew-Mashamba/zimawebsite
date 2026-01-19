<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Security Headers Middleware
 *
 * Adds security headers to improve Page Experience and security.
 * These headers help with:
 * - HTTPS enforcement
 * - XSS protection
 * - Content security
 * - Clickjacking prevention
 *
 * @see https://developers.google.com/search/docs/appearance/page-experience
 */
class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only add headers to HTML responses
        if ($this->isHtmlResponse($response)) {
            // HTTPS Strict Transport Security (HSTS)
            // Forces browsers to use HTTPS for 1 year
            $response->headers->set(
                'Strict-Transport-Security',
                'max-age=31536000; includeSubDomains; preload'
            );

            // Content Security Policy (CSP)
            // Helps prevent XSS attacks
            $response->headers->set(
                'Content-Security-Policy',
                $this->getContentSecurityPolicy()
            );

            // X-Content-Type-Options
            // Prevents MIME type sniffing
            $response->headers->set('X-Content-Type-Options', 'nosniff');

            // X-Frame-Options
            // Prevents clickjacking
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

            // X-XSS-Protection
            // Legacy XSS protection for older browsers
            $response->headers->set('X-XSS-Protection', '1; mode=block');

            // Referrer-Policy
            // Controls referrer information sent with requests
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

            // Permissions-Policy (formerly Feature-Policy)
            // Controls browser features
            $response->headers->set(
                'Permissions-Policy',
                'accelerometer=(), camera=(), geolocation=(), gyroscope=(), magnetometer=(), microphone=(), payment=(), usb=()'
            );

            // Cache-Control for static assets optimization
            if ($this->isStaticAsset($request)) {
                $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
            }
        }

        return $response;
    }

    /**
     * Check if the response is HTML
     */
    private function isHtmlResponse(Response $response): bool
    {
        $contentType = $response->headers->get('Content-Type', '');
        return str_contains($contentType, 'text/html') || empty($contentType);
    }

    /**
     * Check if the request is for a static asset
     */
    private function isStaticAsset(Request $request): bool
    {
        $path = $request->path();
        $staticExtensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'webp', 'avif', 'svg', 'woff', 'woff2', 'ttf', 'eot'];

        foreach ($staticExtensions as $ext) {
            if (str_ends_with($path, '.' . $ext)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the Content Security Policy header value
     */
    private function getContentSecurityPolicy(): string
    {
        $policies = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdnjs.cloudflare.com https://fonts.googleapis.com https://www.googletagmanager.com https://www.google-analytics.com",
            "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com",
            "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:",
            "img-src 'self' data: https: blob:",
            "connect-src 'self' https://www.google-analytics.com https://fonts.googleapis.com",
            "frame-src 'self' https://www.google.com",
            "frame-ancestors 'self'",
            "form-action 'self'",
            "base-uri 'self'",
            "upgrade-insecure-requests",
        ];

        return implode('; ', $policies);
    }
}
