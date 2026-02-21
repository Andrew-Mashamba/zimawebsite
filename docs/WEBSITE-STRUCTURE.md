# ZIMA Solutions Website – Structure & Page Organization

## 1. Overview

The site is a **Laravel 11** app with **Livewire 3** for interactive UI. All public pages use the same layout (`layouts.web`) and share a global **header** and **footer**. Content is grouped as **Services** (integration, installation, consultation) and **Products** (coded software ZIMA sells). Pages are organized into: **Landing (Home)**, **Main pages**, **Service/Product landing pages** (under `/services/` and `/ai-agents`), **Legal**, **PDF/Word downloads**, and **Auth/Dashboard**. Projects are not in the main nav for now.

---

## 2. Layout & Shared Components

| Layer | Location | Role |
|-------|----------|------|
| **Layout** | `resources/views/layouts/web.blade.php` | Wraps every frontend page: `<head>`, meta, structured data, Vite/Livewire assets, brand CSS. |
| **Header** | `livewire/frontend/components/header.blade.php` | Sticky top bar: logo, phone/email/hours, social links, main nav, mobile menu. |
| **Footer** | `livewire/frontend/components/footer.blade.php` | About snippet, Quick Links, Solutions, Contact, legal links, social. |
| **Main content** | `@yield('body-section')` in `web.blade.php` | Page-specific content; each page extends the layout and fills this section. |

Every frontend page:

1. `@extends('layouts.web')`
2. Defines `@section('title')`, meta, optional `@section('structured_data')`
3. Fills `@section('body-section')` with sections and/or Livewire components

---

## 3. Route & Page Map

### 3.1 Public – Top-level pages

| URL | Route name | View | Description |
|-----|------------|------|-------------|
| `/` | — | `frontend.home-page` | Home (single-page style with sections) |
| `/welcome` | `welcome` | `frontend.home-page` | Same as Home |
| `/about` | `about` | `frontend.about-page` | About us |
| `/service` | `service` | `frontend.service-page` | Solutions overview + anchors (#rtgs, #tips, #gepg, #api, #microfinance, #loans) |
| `/team` | `team` | `frontend.team-page` | Projects/portfolio (nav label: “Projects”) |
| `/contact` | `contact` | `frontend.contact-page` | Contact (supports `?subject=` pre-fill) |
| `/ai-agents` | `ai-agents` | `frontend.ai-agents` | AI Agents listing (WhatsApp, web chat, API) |
| `/our-services` | `our-services` | `frontend.our-services` | Services hub – links to all service detail pages |
| `/our-products` | `our-products` | `frontend.our-products` | Products hub – links to all product detail pages |
| `/invest-in-tanzania` | `invest-in-tanzania` | `frontend.invest-in-tanzania` | Invest in Tanzania |
| `/financial-inclusion-initiatives` | `financial-inclusion-initiatives` | `frontend.financial-inclusion-initiatives` | Financial inclusion |
| `/partnership-programme` | `partnership-programme` | `frontend.partnership-programme` | Partnership programme |

### 3.2 Public – Product and AI agent detail pages

| URL | Route name | Controller | Description |
|-----|------------|------------|-------------|
| `/products/{slug}` | `products.show` | `ProductController@show` | Product detail (27 products from `config/products.php`) |
| `/ai-agents/{slug}` | `ai-agents.show` | `AiAgentController@show` | AI agent detail (36 agents from `config/ai_agents.php`) |

### 3.3 Public – Service landing pages (under `/services`)

| URL | Route name | View | Description |
|-----|------------|------|-------------|
| `/services/rtgs-integration` | `services.rtgs` | `frontend.services.rtgs-integration` | RTGS |
| `/services/tips-integration` | `services.tips` | `frontend.services.tips-integration` | TIPS |
| `/services/gepg-gateway` | `services.gepg` | `frontend.services.gepg-gateway` | GePG |
| `/services/api-gateway` | `services.api` | `frontend.services.api-gateway` | API Gateway |
| `/services/loan-management` | `services.loan` | `frontend.services.loan-management` | Loan management |
| `/services/nida-integration` | `services.nida` | `frontend.services.nida-integration` | NIDA Integration (Zima NIDA Gate) |
| `/services/mobile-push-service` | `services.mobile-push` | `frontend.services.mobile-push-service` | Mobile Push Service (MNO payments) |
| `/services/sms-service` | `services.sms` | `frontend.services.sms-service` | SMS Service (lowest cost Tanzania) |
| `/services/membership-referral-system` | `services.membership-referral` | `frontend.services.membership-referral-system` | Membership Referral System (SACCO Web & App) |

### 3.4 Public – Legal

| URL | Route name | View |
|-----|------------|------|
| `/privacy-policy` | `privacy-policy` | `frontend.privacy-policy` |
| `/terms-of-service` | `terms-of-service` | `frontend.terms-of-service` |

### 3.5 Public – PDF & Word

| URL | Route name | Controller | Description |
|-----|------------|------------|-------------|
| `/pdf/partnership-proposal` | `pdf.partnership-proposal` | `PdfController@partnershipProposal` | Download PDF |
| `/pdf/partnership-proposal/view` | `pdf.partnership-proposal.view` | `PdfController@viewPartnershipProposal` | View PDF |
| `/pdf/partnership-proposal/save` | `pdf.partnership-proposal.save` | `PdfController@savePartnershipProposal` | Save PDF |
| `/word/partnership-proposal` | `word.partnership-proposal` | `WordController@partnershipProposal` | Download Word |

### 3.6 Public – Other

| URL | Controller | Description |
|-----|------------|-------------|
| `/sitemap.xml` | `SitemapController@index` | Dynamic sitemap |

### 3.7 Authenticated

| URL | Route name | View | Description |
|-----|------------|------|-------------|
| `/dashboard` | `dashboard` | `dashboard` | App layout; auth + verified middleware |

Auth (Jetstream/Fortify) uses `resources/views/auth/*` and `resources/views/layouts/guest.blade.php` / `layouts/app.blade.php` (login, register, 2FA, etc.).

---

## 4. Home page structure (single-page sections)

The **Home** page (`frontend/home-page.blade.php`) is a long page built from sections, each backed by a Livewire component:

| Section ID | Component | Purpose |
|------------|------------|--------|
| `#home` | `livewire:frontend.components.welcome` | Hero |
| `#about` | `livewire:frontend.components.about-us` | About ZIMA |
| `#services` | `livewire:frontend.components.service-list` | Solutions list |
| `#impact` | `livewire:frontend.components.our-work-page` | Impact / projects |
| `#clients` | `livewire:frontend.components.other-work` | Clients |
| `#contact` | `livewire:frontend.components.services` | Contact CTA |

Header links use `/#about`, `/#services`, `/#impact`, `/#clients`, `/#contact` for in-page scrolling when on Home.

---

## 5. Other main pages – components

| Page | Main Livewire components |
|------|---------------------------|
| **About** | `welcome-about` |
| **Service** | `service-service` (and likely service list / blocks) |
| **Team (Projects)** | `welcome-team`, team listing |
| **Contact** | `welcome-contact`, `contact-form`, `contact-list` (or similar) |

(Exact component set for Service/Contact can be confirmed in their blade files.)

---

## 6. Navigation structure (from header)

- **Home** → `/`
- **About** → `/#about` (home) or `/about`
- **Solutions** → `/service` with dropdown:
  - `/service#rtgs`, `#tips`, `#gepg`, `#api`, `#microfinance`, `#loans`
  - “View All Solutions” → `/service`
- **Contact** → `/#contact` or `/contact`

Projects and Clients are not in the main nav. Solutions dropdown groups **Services** (RTGS, TIPS, GePG, NIDA) and **Products** (AI Agents, API Gateway, Mobile Push, SMS, Membership Referral, Loan Management). Footer: Quick Links; Services; Products; Contact; Legal.

---

## 7. View & component file locations

```
resources/views/
├── layouts/
│   ├── web.blade.php          # Main frontend layout
│   ├── app.blade.php          # Dashboard/auth layout
│   ├── guest.blade.php
│   └── about.blade.php
├── frontend/
│   ├── home-page.blade.php
│   ├── about-page.blade.php
│   ├── service-page.blade.php
│   ├── our-services.blade.php
│   ├── our-products.blade.php
│   ├── ai-agents.blade.php
│   ├── team-page.blade.php
│   ├── contact-page.blade.php
│   ├── invest-in-tanzania.blade.php
│   ├── financial-inclusion-initiatives.blade.php
│   ├── partnership-programme.blade.php
│   ├── privacy-policy.blade.php
│   ├── terms-of-service.blade.php
│   ├── products/
│   │   └── show.blade.php        # Product detail (slug from ProductController)
│   ├── ai-agents/
│   │   └── show.blade.php        # AI agent detail (slug from AiAgentController)
│   └── services/
│       ├── rtgs-integration.blade.php
│       ├── tips-integration.blade.php
│       ├── gepg-gateway.blade.php
│       ├── api-gateway.blade.php
│       ├── loan-management.blade.php
│       ├── nida-integration.blade.php
│       ├── mobile-push-service.blade.php
│       ├── sms-service.blade.php
│       └── membership-referral-system.blade.php
├── livewire/frontend/components/
│   ├── header.blade.php
│   ├── footer.blade.php
│   ├── welcome.blade.php
│   ├── about-us.blade.php
│   ├── welcome-about.blade.php
│   ├── service-list.blade.php
│   ├── service-service.blade.php
│   ├── services.blade.php
│   ├── our-work-page.blade.php
│   ├── other-work.blade.php
│   ├── welcome-team.blade.php
│   ├── main-team.blade.php
│   ├── other-team.blade.php
│   ├── welcome-contact.blade.php
│   ├── contact-form.blade.php
│   ├── contact-list.blade.php
│   ├── pricing.blade.php
│   ├── project-steps.blade.php
│   ├── number-summary.blade.php
│   ├── number-summary-with-circle.blade.php
│   └── news.blade.php
├── pdf/
│   └── partnership-proposal.blade.php
├── auth/           # Jetstream auth views
├── profile/
└── dashboard.blade.php
```

---

## 8. Summary diagram

```
/ (Home) ─────────────── Single-page: #home, #about, #services, #impact, #clients, #contact
/about
/service ─────────────── Overview + anchors to #rtgs, #tips, #gepg, #api, #microfinance, #loans
/our-services ────────── Hub linking to all 9 service detail pages
/our-products ────────── Hub linking to all product detail pages
/ai-agents ───────────── AI Agents listing – industry solutions
/products/{slug} ──────── Product detail (27 products, see config/products.php)
/ai-agents/{slug} ─────── AI agent detail (36 agents, see config/ai_agents.php)
/services/rtgs-integration
/services/tips-integration
/services/gepg-gateway
/services/api-gateway
/services/loan-management
/services/nida-integration
/services/mobile-push-service
/services/sms-service
/services/membership-referral-system
/team (Projects)
/contact
/invest-in-tanzania
/financial-inclusion-initiatives
/partnership-programme
/privacy-policy
/terms-of-service
/pdf/partnership-proposal (view, save)
/word/partnership-proposal
/sitemap.xml
/dashboard (auth)
```

All public pages use **one layout** (`web`), one **header**, one **footer**, and are organized as: landing (home), main (about, service, our-services, our-products, team, contact), service/product/agent detail pages, legal, and document download routes. For SEO approach (sitemap, meta, structured data, internal linking), see [docs/SEO-STRATEGY.md](SEO-STRATEGY.md).
