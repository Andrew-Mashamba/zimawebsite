<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Sanitize Input Middleware
 *
 * Removes potentially dangerous characters from all input.
 * Acts as a first line of defense against injection attacks.
 */
class SanitizeInput
{
    /**
     * Fields to exclude from sanitization
     * (e.g., password fields that might contain special characters)
     */
    protected array $except = [
        'password',
        'password_confirmation',
        'current_password',
    ];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $input = $request->all();

        array_walk_recursive($input, function (&$value, $key) {
            if (is_string($value) && !in_array($key, $this->except, true)) {
                $value = $this->sanitize($value);
            }
        });

        $request->merge($input);

        return $next($request);
    }

    /**
     * Sanitize a string value
     */
    private function sanitize(string $value): string
    {
        // Remove null bytes (can be used for path traversal)
        $value = str_replace(chr(0), '', $value);

        // Remove other potentially dangerous control characters
        // Keep newlines (\n, \r), tabs (\t) for legitimate text input
        $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', '', $value);

        return $value;
    }
}
