# ZIMA Website – Services vs Products

**Definitions (per ZIMA):**
- **Service** = Work that does **not** involve complete development of a product. Examples: integration, installation, consultation.
- **Product** = Anything ZIMA has **coded** to perform a certain task that is **sold** to clients. Individual solutions to specific tasks.

---

## SERVICES (integration, installation, consultation)

| Name | Where it appears | Notes |
|------|------------------|--------|
| **RTGS Integration with Bank of Tanzania** | Home (service-list), /services/rtgs-integration | Connecting client systems to BOT RTGS – integration work. |
| **TIPS Integration – Tanzania Instant Payment System** | Home, /services/tips-integration | Connecting to TIPS – integration work. |
| **GePG Gateway Integration (Version 2.0)** | Home, /services/gepg-gateway | Connecting to Government e-Payment Gateway – integration work. |
| **NIDA Integration** | Home, /services/nida-integration | Integration with NIDA (uses product **Zima NIDA Gate**). |

---

## PRODUCTS (coded software/systems sold to clients)

**Product-as-a-service:** Some products can also be delivered as a **service** when the client uses ZIMA hosting and pays a subscription (e.g. we run and maintain the product for them). These are still products; the hosting/subscription option is a service wrapper. Examples: **Mobile Push**, **SMS Service**, **Collection Solution (Pay by Link)**.

### Payment & banking infrastructure
| Name | Where it appears | Notes |
|------|------------------|--------|
| **Zima NIDA Gate** | /services/nida-integration | Gateway product for NIDA verification (used in NIDA Integration service). |
| **API Gateway & Open Banking Platform** | Home, /services/api-gateway | Coded platform for API management / open banking. |
| **Mobile Push Service** (platform) | Home, /services/mobile-push-service | Coded platform to facilitate payments via MNOs. *Also offered as a service* (ZIMA hosting + subscription). |
| **SMS Service** (gateway/platform) | Home, /services/sms-service | Coded SMS gateway/API – lowest cost in Tanzania. *Also offered as a service* (ZIMA hosting + subscription). |
| **Collection Solution (Pay by Link)** | Home (Financial Services) | Digital payment collection system. *Also offered as a service* (ZIMA hosting + subscription). |
| **Channels Reconciliation System** | Home (Financial Services) | Multi-channel reconciliation software. |
| **TanQR Merchant Management** | Home (Financial Services) | Merchant payment platform (TanQR). |

### Lending & finance
| Name | Where it appears | Notes |
|------|------------------|--------|
| **Comprehensive Loan Management** | Home, /services/loan-management | Full-cycle loan origination system. |
| **Salary Advance Management** | Home (Financial Services) | Salary advance platform. |
| **Vehicle Financing Platform** | Home (Financial Services) | Vehicle loan management system. |
| **Microfinance Management System** | Home (Microfinance) | MFI software. |
| **SACCOS Management System** | Home (Microfinance) | SACCO software. |
| **VICOBA Integration** (product) | Home (Microfinance) | Coded product to connect Village Community Banks (VICOBA) to formal banking; digitize group savings, loans, member records; mobile money integration. |
| **Membership Referral System (Web & App)** | Home, /services/membership-referral-system | SACCO referral platform. |
| **Investment Groups Platform** | Home (Microfinance) | Digital platform for investment groups. |
| **AgriBusiness Financing Suite** | Home (Microfinance) | Agricultural finance platform. |
| **Government Loans (eLoans)** | Home (Compliance) | Digital platform for government-backed loans. |

### KYC & digital banking
| Name | Where it appears | Notes |
|------|------------------|--------|
| **Account Opening (Remote & Branch)** | Home (Financial Services) | Digital KYC and account opening software. |

### Compliance & regulatory
| Name | Where it appears | Notes |
|------|------------------|--------|
| **BOT RTSIS Reporting System** | Home (Compliance) | Automated BOT supervisory reporting. |
| **Contracts & Documents Management** | Home (Compliance) | Document management system. |
| **Legal Cases Management** | Home (Compliance) | Litigation tracking system. |

### Enterprise systems
| Name | Where it appears | Notes |
|------|------------------|--------|
| **HR Management System (HRMS)** | Home (Enterprise) | HR / payroll software. |
| **Business Management ERP** | Home (Enterprise) | ERP for SMEs. |
| **Inventory Management System** | Home (Enterprise) | Inventory and asset management. |
| **Tenants Management System** | Home (Enterprise) | Property and rental management. |
| **Incidents Management System** | Home (Enterprise) | IT/operational incident tracking. |

### Sector-specific
| Name | Where it appears | Notes |
|------|------------------|--------|
| **School Management System** | Home (Sector-Specific) | School ERP. |
| **Zahanati Management System** | Home (Sector-Specific) | Healthcare facility management. |
| **Events Management System** | Home (Sector-Specific) | Event management software. |
| **Notification Engine** | Home (Sector-Specific) | Messaging platform (SMS, email, WhatsApp, push). |

### AI & automation
| Name | Where it appears | Notes |
|------|------------------|--------|
| **AI Agents** (WhatsApp, web chat, API) | Home, /ai-agents | Coded conversational AI agents. |
| **Zona AI – Intelligent Assistant** | Home (AI & Innovation) | AI-powered virtual assistant. |

---

## Summary counts

| Type | Count |
|------|--------|
| **Services** | 4 |
| **Products** | 34 |

---

## Pages / routes by type

**Dedicated service pages (integration/consultation):**
- `/services/rtgs-integration`
- `/services/tips-integration`
- `/services/gepg-gateway`
- `/services/nida-integration` (describes both the **service** and the **product** Zima NIDA Gate)

**Dedicated product pages (coded systems sold):**
- `/services/api-gateway`
- `/services/mobile-push-service`
- `/services/sms-service`
- `/services/membership-referral-system`
- `/services/loan-management`
- `/ai-agents`

**Note:** Current URLs use `/services/` for all. No URL change required. The site uses **Our Services** (4: RTGS, TIPS, GePG, NIDA Integration) and **Our Products** (34). VICOBA is a product (Microfinance section). Mobile Push, SMS Service, and Collection Solution (Pay by Link) are products that can also be delivered as a service when clients use ZIMA hosting and pay a subscription. Projects have been removed from navigation for now.
