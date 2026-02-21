<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * Sitemap for https://zima.co.tz/sitemap.xml
 * Generated dynamically (no static file). Expected URL count: ~88
 * (main 8 + 36 AI agents + 3 initiative + 9 services + 27 products + 2 legal + 2 document entry + llms.txt)
 */
class SitemapController extends Controller
{
    public function index(): Response
    {
        $pages = $this->getPages();

        $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $content .= '<?xml-stylesheet type="text/xsl" href="' . asset('sitemap.xsl') . '"?>' . "\n";
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
                'loc' => $baseUrl . '/our-services',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/our-products',
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
            [
                'loc' => $baseUrl . '/ai-agents',
                'lastmod' => $now,
            ],
            ...array_map(
                fn (string $slug) => ['loc' => $baseUrl . '/ai-agents/' . $slug, 'lastmod' => $now],
                array_keys(config('ai_agents', []))
            ),
            [
                'loc' => $baseUrl . '/invest-in-tanzania',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/financial-inclusion-initiatives',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/partnership-programme',
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
            [
                'loc' => $baseUrl . '/services/nida-integration',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/mobile-push-service',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/sms-service',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/services/membership-referral-system',
                'lastmod' => $now,
            ],

            // Product Detail Pages
            ...array_map(
                fn (string $slug) => ['loc' => $baseUrl . '/products/' . $slug, 'lastmod' => $now],
                array_keys(config('products', []))
            ),

            // Legal Pages
            [
                'loc' => $baseUrl . '/privacy-policy',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/terms-of-service',
                'lastmod' => $now,
            ],

            // Document entry points (discoverable by crawlers and LLMs)
            [
                'loc' => $baseUrl . '/pdf/partnership-proposal',
                'lastmod' => $now,
            ],
            [
                'loc' => $baseUrl . '/word/partnership-proposal',
                'lastmod' => $now,
            ],

            // LLM-oriented site summary (for AI crawlers and tools)
            [
                'loc' => $baseUrl . '/llms.txt',
                'lastmod' => $now,
            ],
        ];
    }
}
