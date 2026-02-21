# SEO Performance Actions (from Google Search Console)

This document turns GSC data into concrete actions to improve indexing, clicks, and experience. Update after each GSC review.

---

## 1. Current GSC snapshot (reference)

| Metric | Value |
|--------|--------|
| **Indexing** | 4 indexed, 8 not indexed |
| **Performance** | 12 total clicks (period in report) |
| **Top queries (impressions)** | zima solutions (6), payment gateway tanzania (6), tanzania payment gateway (5), zima (3), infozima (1), government electronic payment gateway (1) |
| **Top pages** | / (7 clicks, 153 impr), /services/gepg-gateway (4, 54), /terms-of-service (1, 15), /services/tips-integration (0, 24) |
| **Core Web Vitals** | No data yet (need more URLs in CrUX) |
| **Enhancements** | Breadcrumbs 2 valid, FAQ 1 valid, Review snippets 2 valid |
| **HTTPS** | 2 valid, 0 non-HTTPS |

---

## 2. Indexing (4 indexed, 8 not indexed)

**Goal:** Get all important public pages indexed.

- **Submit sitemap:** In Search Console → Sitemaps, ensure `https://zima.co.tz/sitemap.xml` is submitted and read without errors. Fix any URL errors reported.
- **Check “Why pages aren’t indexed”:** In GSC → Indexing → Pages, open “Why pages aren’t indexed” and fix the reasons (e.g. “Discovered – currently not indexed” → improve internal links and optionally “Request indexing” for key URLs).
- **Internal links:** Every important page should be linked from at least one other indexable page (e.g. home, our-services, our-products, ai-agents, footer). Hub pages already link to all services, products, and agents.
- **No accidental noindex:** Confirm no public content page has `noindex` in layout or view. Auth/dashboard are correctly disallowed in robots.txt only.
- **URL Inspection:** For key URLs (home, GePG, TIPS, our-services, our-products, a few product/agent pages), use “URL Inspection” → “Request indexing” after fixing any issues.

**Checklist:** Sitemap submitted ✓ | No blocking in robots ✓ | Key pages linked from home/hubs ✓ | Request indexing for priority URLs (manual in GSC).

---

## 3. Clicks and CTR (top queries with 0 clicks)

**Goal:** Improve titles and descriptions so searchers click (especially for “payment gateway tanzania”, “zima solutions”, “government electronic payment gateway”).

- **Target query in title/description:** For each top query, at least one page should use that phrase naturally in the `<title>` and meta description (first ~155 characters).
- **Home:** Include “ZIMA Solutions” and “payment gateway Tanzania” or “payment gateways” in meta description. Keep title clear and branded.
- **GePG page:** Title and description already use “Government e-Payment Gateway” and “GePG”; strengthen with “government electronic payment gateway” and “payment gateway Tanzania” where natural.
- **Payment gateway page(s):** Collection Solution (Pay by Link) and other payment products already use “Tanzania payment gateway” in keywords; ensure product titles/descriptions are compelling (benefit + Tanzania).
- **Avoid duplicate sections:** Ensure each Blade view sets title/meta once (no duplicate `@section('title')` or `@section('og_title')`) so the intended snippet is used.

**Checklist:** Home meta includes “ZIMA Solutions” + payment/fintech ✓ | GePG includes “government electronic payment gateway” / “payment gateway” ✓ | No duplicate title/OG in views ✓.

---

## 4. Structured data (Breadcrumbs, FAQ)

**Goal:** More “Valid” and zero “Invalid” in Enhancements.

- **Breadcrumbs:** All service, product, and AI agent detail pages have BreadcrumbList JSON-LD and visible breadcrumb UI. After deployment, validate with [Rich Results Test](https://search.google.com/test/rich-results). Fix any invalid markup (wrong URL, missing item).
- **FAQ:** Product and some service pages have FAQPage schema. Ensure every FAQ has valid `Question`/`Answer` and no broken `json_encode`. Add FAQ schema to more service pages if they have Q&A content.
- **Review snippets:** If you use AggregateRating or Review schema, keep it accurate and compliant with Google’s guidelines.

**Checklist:** BreadcrumbList on all detail pages ✓ | FAQPage where FAQs exist ✓ | Rich Results Test shows no errors ✓.

---

## 5. Core Web Vitals and experience

**Goal:** When data appears, aim for “Good” on LCP, FID/INP, CLS.

- **LCP:** Optimize hero images (format, size, lazy-load below the fold). Preload critical hero image if needed. Preconnect to critical origins.
- **CLS:** Give images and embeds explicit width/height; reserve space for dynamic content. Avoid inserting content above existing content.
- **FID/INP:** Keep main-thread work low; defer non-critical JS. Livewire/Vite already help; avoid heavy scripts in `<head>`.
- **Mobile:** Test on real devices; ensure tap targets are large enough and text readable without zoom.
- **HTTPS:** Already valid; keep SSL active and no mixed content.

**Checklist:** Images have dimensions ✓ | No layout shift from ads/embeds ✓ | Critical JS minimal ✓.

---

## 6. Content and relevance

- **Payment gateway:** Keep GePG and Collection Solution (and other payment products) as the main pages for “payment gateway Tanzania” and “government electronic payment gateway”. Add a short H2 or paragraph on GePG page that uses “government electronic payment gateway” once if not already.
- **ZIMA / infozima:** Home and About (if kept) should clearly state “ZIMA Solutions” and what the company does so brand queries get a clear snippet.
- **Internal links:** From home and hub pages, link to key service/product/agent pages with descriptive anchor text (e.g. “GePG integration”, “payment gateway”, “TIPS integration”).

---

## 7. Next steps (periodic)

1. **Weekly/monthly:** Check GSC Indexing → Pages and fix “not indexed” reasons.
2. **After meta changes:** Request indexing for home, GePG, TIPS, our-services, our-products.
3. **Quarterly:** Re-run Rich Results Test on a sample of detail pages; fix any new errors.
4. **When CrUX data appears:** Review Core Web Vitals by URL and device; fix Poor URLs (LCP, CLS, INP).
5. **Queries:** Monitor “payment gateway tanzania”, “zima solutions”, “government electronic payment gateway” for impressions and CTR; tweak titles/descriptions if CTR stays low.

---

*Last updated from GSC snapshot: 4 indexed, 8 not indexed; 12 clicks; top queries and pages as above.*

---

## 8. AI search (ChatGPT, Claude, Perplexity, DeepSeek)

To improve visibility and citations in AI chatbots and generative search:

- See **[docs/AI-SEARCH-GEO.md](AI-SEARCH-GEO.md)** for the full GEO guide.
- Ensure content is direct-answer style, well structured (bullets, clear H2/H3), and semantically aligned with queries like “payment gateway Tanzania”, “ZIMA Solutions”, “government electronic payment gateway”.
- `/llms.txt` is available at the site root for LLM-friendly site summary and attribution; link or reference it where useful.
