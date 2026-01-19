<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $pages = $this->getPages();

        $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($pages as $page) {
            $content .= '    <url>' . "\n";
            $content .= '        <loc>' . htmlspecialchars($page['loc']) . '</loc>' . "\n";
            $content .= '        <lastmod>' . $page['lastmod'] . '</lastmod>' . "\n";
            $content .= '    </url>' . "\n";
        }

        $content .= '</urlset>';

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }

    private function getPages(): array
    {
        $baseUrl = config('app.url', 'https://zima.co.tz');
        $now = now()->setTimezone('Africa/Dar_es_Salaam')->toIso8601String();

        return [
            // Main Pages
            [
                'loc' => $baseUrl . '/',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/about',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/service',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/team',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/contact',
                'lastmod' => $now,
            ],

            // Service Landing Pages
            [
                'loc' => $baseUrl . '/services/rtgs-integration',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/tips-integration',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/gepg-gateway',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/api-gateway',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/loan-management',
                'lastmod' => $now,
            ],

            // Legal Pages
            [
                'loc' => $baseUrl . '/privacy-policy',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/terms-of-service',
                'lastmod' => $now,
            ],
        ];
    }
}
