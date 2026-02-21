<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // ==================================================
        // MILITARY GRADE SECURITY MIDDLEWARE STACK
        // ==================================================

        // 1. Directory traversal prevention (first line of defense)
        $middleware->append(\App\Http\Middleware\PreventDirectoryTraversal::class);

        // 2. Input sanitization (remove dangerous characters)
        $middleware->append(\App\Http\Middleware\SanitizeInput::class);

        // 3. Security headers (CSP, HSTS, X-Frame-Options, etc.)
        $middleware->append(\App\Http\Middleware\SecurityHeaders::class);

        // 4. Block authentication routes
        $middleware->append(\App\Http\Middleware\BlockAuthRoutes::class);

        // 5. Global rate limiting for web routes
        $middleware->web(append: [
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':global',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
