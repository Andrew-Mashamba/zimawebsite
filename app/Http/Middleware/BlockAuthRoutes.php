<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Block Authentication Routes Middleware
 *
 * This middleware blocks all authentication-related routes for a public website.
 * Returns 404 to hide the existence of these routes from attackers.
 */
class BlockAuthRoutes
{
    /**
     * Authentication routes to block
     */
    private array $blockedPaths = [
        'login',
        'register',
        'forgot-password',
        'reset-password',
        'two-factor-challenge',
        'user/profile',
        'user/password',
        'user/two-factor-authentication',
        'user/two-factor-qr-code',
        'user/two-factor-recovery-codes',
        'user/two-factor-secret-key',
        'user/confirmed-two-factor-authentication',
        'user/profile-information',
        'user/confirm-password',
        'user/confirmed-password-status',
        'dashboard',
        'email/verify',
        'email/verification-notification',
        'logout',
        'sanctum/csrf-cookie',
    ];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = trim($request->path(), '/');

        foreach ($this->blockedPaths as $blocked) {
            if ($path === $blocked || str_starts_with($path, $blocked . '/')) {
                // Return 404 to hide route existence
                abort(404);
            }
        }

        return $next($request);
    }
}
