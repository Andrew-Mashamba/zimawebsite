# ZIMA Solutions – SEO Strategy

This document describes the **implemented** SEO approach for the ZIMA website. It reflects the current site structure, data sources, and technical choices. For detailed Google Search Central–style guidance (sitemaps, meta, structured data, Core Web Vitals), see [docs/SEO.md](SEO.md).

---

## 1. Page inventory & hierarchy

### 1.1 Hub pages (indexable)

| URL | Purpose |
|-----|--------|
| `/` | Home (single-page sections) |
| `/about` | About ZIMA |
| `/service` | Solutions overview (anchors to #rtgs, #tips, etc.) |
| `/our-services` | Services hub – links to all 9 service detail pages |
| `/our-products` | Products hub – links to all product detail pages |
| `/ai-agents` | AI Agents hub – links to all 36 agent detail pages |
| `/team` | Projects/portfolio |
| `/contact` | Contact form (supports `?subject=` pre-fill) |
| `/invest-in-tanzania` | Investment content |
| `/financial-inclusion-initiatives` | Financial inclusion |
| `/partnership-programme` | Partnership programme |

### 1.2 Detail pages (indexable)

- **Services (9):** `/services/rtgs-integration`, `/services/tips-integration`, `/services/gepg-gateway`, `/services/api-gateway`, `/services/loan-management`, `/services/nida-integration`, `/services/mobile-push-service`, `/services/sms-service`, `/services/membership-referral-system`
- **Products (27):** `/products/{slug}` – slugs from `config/products.php` (e.g. `collection-solution`, `saccos-members-portal`, `saccos-members-mobile-app`)
- **AI Agents (36):** `/ai-agents/{slug}` – slugs from `config/ai_agents.php` (e.g. `dr-amani`, `safariguide`)

### 1.3 Legal & documents

- `/privacy-policy`, `/terms-of-service` – indexable
- `/pdf/partnership-proposal`, `/word/partnership-proposal` – document downloads (no need to index every variant)

### 1.4 Non-indexed

- Auth: `/login`, `/register`, `/password/`, `/email/`, 2FA, etc.
- Dashboard: `/dashboard`, `/user/*`
- API/Livewire: `/api/`, `/livewire/`, `/sanctum/`
- Admin/debug: `/admin/`, `/_debugbar/`

---

## 2. Technical SEO

### 2.1 Layout & meta (all public pages)

- **Layout:** `resources/views/layouts/web.blade.php` – every frontend page extends it.
- **Canonical:** Set in layout from current URL (no duplicate parameters).
- **Title & meta description:** Each page sets `@section('title')` and `@section('meta_description')`; product, service, and AI agent detail pages use **unique** titles and descriptions from config or view.
- **Robots:** No `noindex` on public pages; auth/dashboard are disallowed in `robots.txt`, not via meta.

### 2.2 Sitemap

- **URL:** `/sitemap.xml` – generated dynamically by `SitemapController@index` (no static file; the route returns XML on request).
- **Included (~88 URLs):**
  - **Main (8):** `/`, `/about`, `/service`, `/our-services`, `/our-products`, `/team`, `/contact`, `/ai-agents`
  - **AI agents (36):** all `/ai-agents/{slug}` from `config('ai_agents')`
  - **Initiative (3):** `/invest-in-tanzania`, `/financial-inclusion-initiatives`, `/partnership-programme`
  - **Services (9):** all `/services/rtgs-integration`, `tips-integration`, `gepg-gateway`, `api-gateway`, `loan-management`, `nida-integration`, `mobile-push-service`, `sms-service`, `membership-referral-system`
  - **Products (27):** all `/products/{slug}` from `config('products')`
  - **Legal (2):** `/privacy-policy`, `/terms-of-service`
  - **Documents (2):** `/pdf/partnership-proposal`, `/word/partnership-proposal`
  - **LLM (1):** `/llms.txt`
- **Not in sitemap:** `/welcome` (duplicate of `/`; canonical is home).
- **Format:** Standard `<urlset>` with `<loc>` and `<lastmod>` (ISO 8601, Africa/Dar_es_Salaam). Optional XSL for browser display.
- **Reference:** `public/robots.txt` includes `Sitemap: https://zima.co.tz/sitemap.xml` (and image sitemap if used).

### 2.3 robots.txt

- **Location:** `public/robots.txt`
- **Allow:** `/`, `/about`, `/service`, `/team`, `/contact` (and by default public paths).
- **Disallow:** `/admin/`, `/dashboard/`, `/login`, `/register`, `/password/`, `/email/`, `/api/`, `/livewire/`, `/storage/`, `/_debugbar/`, `/sanctum/`, `/user/`; also `/*?*` to avoid duplicate content from query strings (contact `?subject=` is for UX only; we don’t rely on those URLs for SEO).

---

## 3. On-page SEO

### 3.1 Titles and meta descriptions

- **Main pages:** Unique titles and meta descriptions in each view.
- **Service detail pages:** Unique per service (in `resources/views/frontend/services/*.blade.php`).
- **Product detail pages:** From `config/products.php` – each product has `name` and `meta_description` (or equivalent); used in `resources/views/frontend/products/show.blade.php`.
- **AI agent detail pages:** From `config/ai_agents.php` – each agent has name and description; used in `resources/views/frontend/ai-agents/show.blade.php`.

### 3.2 Headings

- **Hero H1:** Every service, product, and AI agent detail page has a single H1 in the hero (e.g. product/service/agent name). Hero text uses `color: #fff` where overlaying images for readability.
- **Structure:** Clear hierarchy (H1 → H2 → H3) for sections (features, benefits, CTAs).

### 3.3 Breadcrumbs (UI + schema)

- **Service pages:** Breadcrumb: Home → Our Services → [Service name]. Links use `route('our-services')` and `url('/our-services')` where relevant.
- **Product pages:** Home → Products → [Product name].
- **AI agent pages:** Home → AI Agents → [Agent name].
- **Schema:** BreadcrumbList JSON-LD on detail pages so search engines understand hierarchy.

### 3.4 Accessibility (aria-labels)

- Hero, feature blocks, and CTA sections use `aria-label` where it helps screen readers and clarity (e.g. “Main content”, “Contact CTA”).
- “Explore more” block uses `aria-label="Explore more solutions"`.

---

## 4. Structured data (JSON-LD)

- **Service detail pages:** `WebPage` with clear `description`.
- **Product detail pages:** `Product` + `WebPage`; optional `FAQPage` when FAQs exist. Dynamic text is escaped (e.g. `json_encode`) to avoid invalid JSON.
- **AI agent detail pages:** `SoftwareApplication` + `WebPage`.
- **Breadcrumbs:** `BreadcrumbList` on detail pages.
- All output in `<script type="application/ld+json">` in `@section('structured_data')` (or equivalent) in the main layout.

---

## 5. Internal linking

### 5.1 Hub → detail

- **Our Services:** `/our-services` links to all 9 service pages.
- **Our Products:** `/our-products` links to all product detail pages (from `config/products.php`).
- **AI Agents:** `/ai-agents` lists all agents with links to `/ai-agents/{slug}`.

### 5.2 Detail → hub & related

- **Explore more block:** `resources/views/frontend/partials/explore-more.blade.php` – used on service and product detail pages. Links to:
  - Our services
  - Our products
  - AI Agents
  - Contact us
- **CTAs:** Primary CTAs point to contact (e.g. `route('contact')`); contact form supports `?subject=` for pre-filled subject.
- **Footer & header:** Main nav and footer link to key hubs (About, Solutions/Service, Contact, etc.) and legal pages.

### 5.3 Anchor links

- Home single-page: `/#about`, `/#services`, `/#impact`, `/#clients`, `/#contact`.
- Service overview: `/service` with anchors like `#rtgs`, `#tips`, `#gepg`, `#api`, `#microfinance`, `#loans`.

---

## 6. Content & UX alignment

- **Tanzania-focused:** Product, service, and AI agent copy (in config and views) targets Tanzania (e.g. GePG, NIDA, TIPS, RTGS, MNO payments, SACCO).
- **CTAs:** Contact, “Request a quote”, “Request Concept Note” (e.g. Financial Inclusion → contact with subject) – all use proper routes, not bare `#contact`.
- **Documents:** “Download/View partnership proposal” and “Request Concept Note” are aligned with conversion goals without creating thin or duplicate URLs for every query.

---

## 7. Data sources (for consistency)

| Content type | Config / source | Used in |
|--------------|-----------------|--------|
| Products | `config/products.php` (27) | ProductController, product show view, sitemap |
| AI agents | `config/ai_agents.php` (36) | AiAgentController, ai-agents show view, sitemap |
| Services | Routes + views (9) | Service views, sitemap, explore-more |

When adding a new product or AI agent, add the entry to the config and ensure the slug is in the sitemap (products and agents are already included via `array_keys(config('products', []))` and `array_keys(config('ai_agents', []))`).

---

## 8. Checklist for new pages

When adding a new indexable page:

1. **Route:** Add to `routes/web.php` (or appropriate file).
2. **Sitemap:** Add URL in `SitemapController::getPages()`.
3. **Title & meta:** Set unique `@section('title')` and `@section('meta_description')`.
4. **Canonical:** Layout handles it; avoid duplicate URLs with parameters.
5. **Structured data:** Add WebPage (and Product/Service/SoftwareApplication if applicable); use `json_encode` for dynamic strings.
6. **Breadcrumbs:** Add UI + BreadcrumbList schema if it’s a sub-page.
7. **Internal links:** Link from the relevant hub (our-services, our-products, ai-agents) and consider adding the “Explore more” partial.
8. **Robots:** No change needed unless the page should be noindex (then add meta or adjust robots.txt).

This strategy is aligned with the practices described in [docs/SEO.md](SEO.md) and with the site structure in [docs/WEBSITE-STRUCTURE.md](WEBSITE-STRUCTURE.md). For actions driven by Google Search Console data (indexing, CTR, Core Web Vitals), see [docs/SEO-PERFORMANCE-ACTIONS.md](SEO-PERFORMANCE-ACTIONS.md).
