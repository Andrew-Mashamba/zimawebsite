# Proposed Website Organization – For Humans & Bots

This document proposes a clearer **information architecture (IA)** and **URL/navigation structure** so the site is easier for people to use and for search engines to crawl and index.

---

## 1. Current Issues

| Issue | Why it’s confusing |
|-------|---------------------|
| **`/service` vs `/services/...`** | Singular overview URL vs plural child URLs; “Solutions” in nav but “service” in path. |
| **`/team` = “Projects”** | URL says “team”, nav says “Projects”; different mental models. |
| **AI Agents at root** | It’s a solution but lives next to About/Contact; not clearly under “what we offer”. |
| **Flat main nav** | Many items (Home, About, Solutions dropdown, Projects, Clients, Contact) plus AI Agents; hierarchy is unclear. |
| **Legal at root** | Fine for SEO, but not grouped as “legal” in structure. |
| **`/welcome`** | Duplicate of home; dilutes focus and can confuse bots. |

---

## 2. Proposed Information Architecture (IA)

Think of the site in **four top-level buckets**:

```
┌─────────────────────────────────────────────────────────────────────────┐
│  ZIMA WEBSITE                                                            │
├─────────────────────────────────────────────────────────────────────────┤
│  1. WHO WE ARE      →  About, Team/People (optional), Story              │
│  2. WHAT WE DO      →  Solutions (overview + all solution pages)          │
│  3. PROOF & REACH   →  Projects, Clients (can stay on home or separate)   │
│  4. GET IN TOUCH    →  Contact                                            │
├─────────────────────────────────────────────────────────────────────────┤
│  SUPPORTING         →  Legal (Privacy, Terms), Resources (PDF/Word)      │
└─────────────────────────────────────────────────────────────────────────┘
```

- **Humans:** “Who we are” / “What we do” / “Proof” / “Contact” is easy to scan.
- **Bots:** Clear topical clusters (about, solutions, contact, legal) and a logical link hierarchy.

---

## 3. Proposed URL Structure (SEO-Friendly Hierarchy)

Two approaches: **A) Keep current URLs** (no redirects) and improve nav + internal links, or **B) Align URLs to IA** (with redirects).

### Option A – Keep Current URLs (recommended first step)

No URL changes. Improve only:

- **Navigation** and **footer** grouping (see Section 4).
- **Breadcrumbs** on every page.
- **Internal links** from overview pages to detail pages (and back).
- **Sitemap** order and optional priority/changefreq to reflect hierarchy.
- **Canonical:** Use `https://zima.co.tz/` for home; consider **301 redirect** `/welcome` → `/` to avoid duplicate content.

Result: Same URLs, clearer structure for users and crawlers.

### Option B – Align URLs to IA (optional, with redirects)

| Current URL | Proposed URL | Rationale |
|-------------|--------------|-----------|
| `/` | `/` | Keep |
| `/welcome` | **Remove** → 301 to `/` | One canonical home. |
| `/about` | `/about` | Keep |
| `/service` | `/solutions` | One word, matches “Solutions” in nav; plural for “all solutions”. |
| `/services/rtgs-integration` | `/solutions/rtgs-integration` | All solutions under one parent. |
| `/services/tips-integration` | `/solutions/tips-integration` | Same. |
| … (all other `/services/*`) | `/solutions/*` | Same slug, new parent. |
| `/ai-agents` | `/solutions/ai-agents` | AI Agents is a solution; same branch as others. |
| `/team` | `/projects` | Nav already says “Projects”; URL matches. |
| `/contact` | `/contact` | Keep |
| `/privacy-policy` | `/legal/privacy-policy` | Group legal under `/legal/`. |
| `/terms-of-service` | `/legal/terms-of-service` | Same. |
| `/pdf/partnership-proposal` | `/resources/partnership-proposal` or keep `/pdf/...` | Optional; “resources” is more semantic. |
| `/sitemap.xml` | `/sitemap.xml` | Keep |

Result: Clean hierarchy for bots (`/solutions/*`, `/legal/*`, `/projects`), consistent naming for users. **All old URLs must 301 redirect to new ones** to preserve SEO.

---

## 4. Proposed Navigation (Header) – For Humans

**Principle:** Main nav has **5–7 items**; “Solutions” is the only dropdown. Labels match what users look for.

### Main nav (desktop)

| Label | Link | Notes |
|-------|------|--------|
| **Home** | `/` | — |
| **About** | `/about` | Who we are. |
| **Solutions** | `/solutions` or `/service` (current) | **Dropdown:** Overview first, then key solutions (e.g. AI Agents, RTGS, TIPS, GePG, API Gateway, NIDA, Mobile Push, SMS, Loan Management, Membership Referral), then “View all”. |
| **Projects** | `/projects` or `/team` (current) | Proof / portfolio. |
| **Contact** | `/contact` | Get in touch. |

**Remove from main nav:** “Clients” as a top-level item. Keep “Clients” as a **section on the home page** (e.g. `/#clients`) and optionally one link in the Solutions dropdown or footer (“Case studies / Clients”).

**AI Agents:** In the **Solutions** dropdown (e.g. first or second item), not as a separate top-level nav item. Same for other solution sub-pages.

**Mobile:** Same items; “Solutions” expands to show the same dropdown links.

### Footer

- **Quick links:** Home, About, Solutions (overview), Projects, Contact.
- **Solutions (list):** AI Agents, RTGS, TIPS, GePG, API Gateway, NIDA, Mobile Push, SMS, Membership Referral, Loan Management, “View all” (overview).
- **Contact:** Same as now (address, phone, email, hours).
- **Legal:** Privacy Policy, Terms of Service.

Footer and header use the **same URLs** (current or new, depending on Option A vs B).

---

## 5. Breadcrumbs – For Humans & Bots

Add **breadcrumbs** to every page (except Home). Bots use them for understanding hierarchy; users use them for orientation.

Examples (with **current** URLs):

| Page | Breadcrumb |
|------|------------|
| About | Home > About |
| Solutions overview | Home > Solutions |
| RTGS Integration | Home > Solutions > RTGS Integration |
| AI Agents | Home > Solutions > AI Agents |
| Projects | Home > Projects |
| Contact | Home > Contact |
| Privacy Policy | Home > Privacy Policy |

Implementation: Use **JSON-LD BreadcrumbList** (you already have some); add visible breadcrumb UI (e.g. under the hero) on each template. Schema and visible trail should match.

---

## 6. Internal Linking – For Bots & Discovery

- **Solutions overview** (`/service` or `/solutions`): Link to **every** solution page (AI Agents, RTGS, TIPS, GePG, API, NIDA, Mobile Push, SMS, Loan Management, Membership Referral). Use descriptive anchor text (e.g. “RTGS Integration”, “AI Agents”).
- **Home:** “Solutions” section should link to the overview and/or 2–3 flagship solutions.
- **Each solution page:** “Back to Solutions” or “View all solutions” linking to the overview.
- **Footer:** As above, list all solutions with correct URLs.
- **Contact:** Linked from header, footer, and from key conversion points (e.g. end of solution pages).

This gives crawlers a clear path: Home → Solutions → each solution, and back.

---

## 7. Sitemap & Technical SEO – For Bots

- **Sitemap order** (suggested):
  1. Home
  2. About
  3. Solutions overview
  4. Each solution page (AI Agents, then the rest in a consistent order)
  5. Projects
  6. Contact
  7. Legal (Privacy, Terms)
  8. PDF/Word if you want them indexed (otherwise noindex or omit)

- **Optional:** Set `priority` and `changefreq` (e.g. home 1.0/daily, solutions 0.9/weekly, legal 0.5/monthly). Not required for indexing but can help.
- **Canonical:** Every page has a self-referencing canonical URL.
- **Redirect:** `/welcome` → `/` (301) so only one URL represents the home page.
- **Structured data:** Keep and extend Organization, Service, BreadcrumbList, ContactPage where relevant.

---

## 8. Summary: What to Do First (No URL Changes)

1. **Redirect** `/welcome` → `/` (301).
2. **Navigation:** Reduce to Home, About, Solutions (dropdown), Projects, Contact. Put AI Agents and all solution sub-pages inside the Solutions dropdown. Remove “Clients” from main nav (keep on home).
3. **Breadcrumbs:** Add visible breadcrumbs + BreadcrumbList schema on all pages except Home.
4. **Internal links:** Solutions overview links to every solution; each solution page links back to overview.
5. **Sitemap:** Reorder entries to match the IA (home, about, solutions, then list of solutions, projects, contact, legal).
6. **Docs:** Update WEBSITE-STRUCTURE.md to describe this IA and nav.

If you later adopt **Option B** (URL changes), add 301 redirects from old URLs to new ones and update all internal links and sitemap.

---

## 9. Quick Reference – Proposed Nav & URLs (Option A)

```
Main nav:
  Home          → /
  About         → /about
  Solutions     → /service  [dropdown: AI Agents, RTGS, TIPS, GePG, API, NIDA, Mobile Push, SMS, Loan, Referral, View all]
  Projects      → /team
  Contact       → /contact

Footer:
  Quick: Home, About, Solutions, Projects, Contact
  Solutions: (same list as dropdown)
  Legal: Privacy, Terms
```

This keeps your current URLs but makes the organization of the website clearer for humans and easier for bots to index.
