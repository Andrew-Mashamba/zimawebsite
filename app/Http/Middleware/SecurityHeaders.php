<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Security Headers Middleware
 *
 * Military-grade security headers for maximum protection.
 * Implements defense-in-depth with multiple security layers.
 *
 * @see https://securityheaders.com
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
 */
class SecurityHeaders
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Remove headers that expose server information
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');

        // Only add security headers to HTML responses
        if ($this->isHtmlResponse($response)) {
            // HTTPS Strict Transport Security (HSTS)
            // Forces HTTPS for 2 years with preload eligibility
            $response->headers->set(
                'Strict-Transport-Security',
                'max-age=63072000; includeSubDomains; preload'
            );

            // Content Security Policy (CSP)
            // Comprehensive XSS and injection protection
            $response->headers->set(
                'Content-Security-Policy',
                $this->getContentSecurityPolicy()
            );

            // X-Content-Type-Options
            // Prevents MIME type sniffing attacks
            $response->headers->set('X-Content-Type-Options', 'nosniff');

            // Cross-Origin-Opener-Policy (COOP)
            // Isolates browsing context from cross-origin documents
            $response->headers->set('Cross-Origin-Opener-Policy', 'same-origin');

            // Cross-Origin-Embedder-Policy (COEP)
            // Prevents loading cross-origin resources without explicit permission
            $response->headers->set('Cross-Origin-Embedder-Policy', 'credentialless');

            // Cross-Origin-Resource-Policy (CORP)
            // Prevents other origins from reading resources
            $response->headers->set('Cross-Origin-Resource-Policy', 'same-origin');

            // X-Frame-Options
            // Prevents clickjacking - DENY is stricter than SAMEORIGIN
            $response->headers->set('X-Frame-Options', 'DENY');

            // X-XSS-Protection
            // Legacy XSS protection for older browsers
            $response->headers->set('X-XSS-Protection', '1; mode=block');

            // Referrer-Policy
            // Strict control over referrer information
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

            // Permissions-Policy (formerly Feature-Policy)
            // Disable all sensitive browser features
            $response->headers->set(
                'Permissions-Policy',
                'accelerometer=(), autoplay=(), camera=(), cross-origin-isolated=(), display-capture=(), encrypted-media=(), fullscreen=(self), geolocation=(), gyroscope=(), keyboard-map=(), magnetometer=(), microphone=(), midi=(), payment=(), picture-in-picture=(), publickey-credentials-get=(), screen-wake-lock=(), sync-xhr=(), usb=(), xr-spatial-tracking=()'
            );

            // X-Permitted-Cross-Domain-Policies
            // Prevents Adobe Flash/PDF from loading data
            $response->headers->set('X-Permitted-Cross-Domain-Policies', 'none');

            // X-Download-Options
            // Prevents IE from executing downloads in site context
            $response->headers->set('X-Download-Options', 'noopen');

            // X-DNS-Prefetch-Control
            // Controls DNS prefetching
            $response->headers->set('X-DNS-Prefetch-Control', 'off');
        }

        // Cache-Control for static assets
        if ($this->isStaticAsset($request)) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
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
     *
     * Note: 'unsafe-inline' is required for Livewire's reactive functionality.
     * 'unsafe-eval' is required for Alpine.js used by Livewire.
     */
    private function getContentSecurityPolicy(): string
    {
        $policies = [
            // Default: Only allow same-origin resources
            "default-src 'self'",

            // Scripts: Self + inline (Livewire) + eval (Alpine.js) + trusted CDNs
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdnjs.cloudflare.com https://www.googletagmanager.com https://www.google-analytics.com",

            // Styles: Self + inline (Tailwind/Livewire) + trusted CDNs
            "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com",

            // Fonts: Self + Google Fonts + CDN
            "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:",

            // Images: Self + data URIs + HTTPS sources + blobs
            "img-src 'self' data: https: blob:",

            // Connections: Self + analytics
            "connect-src 'self' https://www.google-analytics.com https://fonts.googleapis.com",

            // Frames: Block all external frames
            "frame-src 'none'",

            // Frame ancestors: Prevent embedding on other sites (clickjacking)
            "frame-ancestors 'none'",

            // Forms: Only submit to same origin
            "form-action 'self'",

            // Base URI: Prevent base tag hijacking
            "base-uri 'self'",

            // Object/embed: Block plugins (Flash, Java, etc.)
            "object-src 'none'",

            // Media: Only same-origin media
            "media-src 'self'",

            // Workers: Only same-origin workers
            "worker-src 'self' blob:",

            // Child frames: Block all
            "child-src 'none'",

            // Manifest: Only same-origin
            "manifest-src 'self'",

            // Force HTTPS for all resources
            "upgrade-insecure-requests",

            // Block mixed content
            "block-all-mixed-content",
        ];

        return implode('; ', $policies);
    }
}
