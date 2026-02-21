<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

/**
 * Prevent Directory Traversal Middleware
 *
 * Blocks requests that contain directory traversal patterns.
 * Logs all blocked attempts for security monitoring.
 */
class PreventDirectoryTraversal
{
    /**
     * Suspicious patterns that indicate directory traversal attempts
     */
    private array $suspiciousPatterns = [
        // Basic traversal
        '../',
        '..\\',
        '..%2f',
        '..%5c',
        '%2e%2e%2f',
        '%2e%2e/',
        '%2e%2e%5c',
        '..%252f',
        '%252e%252e%252f',

        // Double encoding
        '%c0%ae',
        '%c1%9c',

        // Sensitive file paths
        '/etc/passwd',
        '/etc/shadow',
        '/etc/hosts',
        'boot.ini',
        'win.ini',
        '/proc/self',
        '/dev/null',

        // PHP wrappers
        'php://',
        'phar://',
        'zip://',
        'data://',
        'expect://',
        'input://',
        'filter://',
        'glob://',
    ];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = urldecode($request->path());
        $queryString = urldecode($request->getQueryString() ?? '');
        $fullUrl = $path . '?' . $queryString;

        foreach ($this->suspiciousPatterns as $pattern) {
            if (stripos($fullUrl, $pattern) !== false) {
                Log::channel('security')->critical('Directory traversal attempt blocked', [
                    'ip' => $request->ip(),
                    'path' => $request->path(),
                    'query' => $request->getQueryString(),
                    'pattern_matched' => $pattern,
                    'user_agent' => $request->userAgent(),
                    'referer' => $request->header('referer'),
                ]);

                abort(403);
            }
        }

        // Also check request body for file paths
        $input = $request->all();
        if ($this->containsTraversalInInput($input)) {
            Log::channel('security')->critical('Directory traversal in request body blocked', [
                'ip' => $request->ip(),
                'path' => $request->path(),
                'user_agent' => $request->userAgent(),
            ]);

            abort(403);
        }

        return $next($request);
    }

    /**
     * Recursively check input array for traversal patterns
     */
    private function containsTraversalInInput(array $input): bool
    {
        foreach ($input as $value) {
            if (is_array($value)) {
                if ($this->containsTraversalInInput($value)) {
                    return true;
                }
            } elseif (is_string($value)) {
                $decoded = urldecode($value);
                foreach ($this->suspiciousPatterns as $pattern) {
                    if (stripos($decoded, $pattern) !== false) {
                        return true;
                    }
                }
            }
        }

        return false;
    }
}
