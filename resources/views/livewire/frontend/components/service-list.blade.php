<div>
    <style>
        /* Services Section - ZIMA Brand */
        .services-gradient {
            background: linear-gradient(to top left, #1F3B8D 0%, #ffffff 12%, #ffffff 100%);
        }

        .services-section {
            padding: 80px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .service-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .service-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .service-subtitle {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            max-width: 700px;
            margin-bottom: 50px;
        }

        /* Integration Services Grid */
        .integration-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 60px;
        }

        .integration-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 35px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border-left: 4px solid #1F3B8D;
            position: relative;
            overflow: hidden;
        }

        .integration-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(31, 59, 141, 0.05), rgba(255, 98, 27, 0.05));
            border-radius: 0 0 0 100%;
        }

        .integration-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(31, 59, 141, 0.15);
            border-left-color: #FF621B;
        }

        .integration-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .integration-icon i {
            font-size: 28px;
            color: #ffffff;
        }

        .integration-card h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .integration-card p {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .benefits-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .benefits-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            color: #2c3e50;
        }

        .benefits-list li::before {
            content: '\2713';
            color: #FF621B;
            font-weight: 700;
            margin-right: 10px;
            min-width: 16px;
        }

        /* Category Section */
        .category-section {
            margin-top: 60px;
        }

        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e5e7eb;
        }

        .category-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .category-icon i {
            font-size: 22px;
            color: #ffffff;
        }

        .category-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 26px;
            margin: 0;
        }

        .category-count {
            background: #FF621B;
            color: #fff;
            font-size: 12px;
            padding: 4px 10px;
            border-radius: 20px;
            margin-left: 15px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .project-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            border-top: 3px solid transparent;
            display: flex;
            flex-direction: column;
            min-height: 200px;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(31, 59, 141, 0.12);
            border-top-color: #FF621B;
        }

        .project-card h4 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .project-card p {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 13px;
            line-height: 1.6;
            margin: 0;
            flex-grow: 1;
        }

        .project-card .tag {
            display: inline-block;
            padding: 4px 10px;
            background: rgba(31, 59, 141, 0.1);
            color: #1F3B8D;
            font-size: 11px;
            font-weight: 600;
            border-radius: 20px;
            margin-top: 12px;
            font-family: 'Source Sans Pro', sans-serif;
            align-self: flex-start;
        }

        /* CTA Section */
        .cta-box {
            background: linear-gradient(135deg, #1F3B8D, #2a4a9e);
            border-radius: 16px;
            padding: 50px;
            margin-top: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cta-content h3 {
            color: #ffffff;
            font-family: 'Roboto Slab', serif;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .cta-content p {
            color: rgba(255, 255, 255, 0.85);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 16px;
            margin: 0;
        }

        .cta-btn {
            display: inline-block;
            padding: 16px 40px;
            background: #FF621B;
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 700;
            font-size: 15px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-btn:hover {
            background: #e55516;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 98, 27, 0.4);
        }

        @media (max-width: 1200px) {
            .projects-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 992px) {
            .integration-grid {
                grid-template-columns: 1fr;
            }
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .cta-box {
                flex-direction: column;
                text-align: center;
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .service-title {
                font-size: 32px;
            }
            .category-header {
                flex-wrap: wrap;
            }
        }
    </style>

    <section class="services-gradient" aria-label="Enterprise Integration Services and Digital Solutions in Tanzania">
        <div class="services-section">
            <!-- OUR SERVICES (integration, installation, consultation) -->
            <p class="service-label">What We Do</p>
            <h1 class="service-title">Our Services</h1>
            <p class="service-subtitle">
                Integration, installation, and consultation. We connect your systems to national infrastructure and formal banking—no full product build required.
            </p>

            <div class="integration-grid">
                <article class="integration-card" itemscope itemtype="https://schema.org/Service">
                    <div class="integration-icon">
                        <i class="fas fa-university" aria-hidden="true"></i>
                    </div>
                    <h3 itemprop="name">RTGS Integration with Bank of Tanzania</h3>
                    <p itemprop="description">
                        Seamless Real-Time Gross Settlement (RTGS) integration with Bank of Tanzania for high-value interbank transfers. MT message types, MT-MX conversion to ISO 20022, message translation, and automated notifications.
                    </p>
                    <ul class="benefits-list">
                        <li>Full BOT RTGS compliance and certification</li>
                        <li>ISO 20022 messaging standards support</li>
                        <li>Real-time transaction confirmations</li>
                    </ul>
                    <a href="{{ route('services.rtgs') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                </article>

                <article class="integration-card" itemscope itemtype="https://schema.org/Service">
                    <div class="integration-icon">
                        <i class="fas fa-bolt" aria-hidden="true"></i>
                    </div>
                    <h3 itemprop="name">TIPS Integration – Tanzania Instant Payment System</h3>
                    <p itemprop="description">
                        Connect to TIPS for Bank-to-Wallet, Wallet-to-Bank, Bank-to-Bank, TanQR payments, and cross-border remittances with Rwanda and EAC partners.
                    </p>
                    <ul class="benefits-list">
                        <li>24/7 instant payment processing</li>
                        <li>TanQR and mobile money interoperability</li>
                        <li>Cross-border EAC readiness</li>
                    </ul>
                    <a href="{{ route('services.tips') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                </article>

                <article class="integration-card" itemscope itemtype="https://schema.org/Service">
                    <div class="integration-icon">
                        <i class="fas fa-landmark" aria-hidden="true"></i>
                    </div>
                    <h3 itemprop="name">GePG Gateway Integration (Version 2.0)</h3>
                    <p itemprop="description">
                        Government e-Payment Gateway (GePG) integration for government revenue collection. Pay taxes, fees, licenses, and bills via branches, ATMs, mobile, internet banking, and USSD.
                    </p>
                    <ul class="benefits-list">
                        <li>Ministry of Finance GePG 2.0 compliance</li>
                        <li>Multi-channel payment collection</li>
                        <li>Automated ERV and reconciliation</li>
                    </ul>
                    <a href="{{ route('services.gepg') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                </article>

                <article class="integration-card" itemscope itemtype="https://schema.org/Service">
                    <div class="integration-icon">
                        <i class="fas fa-id-card" aria-hidden="true"></i>
                    </div>
                    <h3 itemprop="name">NIDA Integration</h3>
                    <p itemprop="description">
                        Integrate with Tanzania's National Identification Authority (NIDA) for KYC and identity verification via National ID (NIN). We use our product Zima NIDA Gate so you get one simple integration point.
                    </p>
                    <ul class="benefits-list">
                        <li>Official NIDA verification via NIN</li>
                        <li>Faster KYC and account opening</li>
                        <li>Secure, compliant</li>
                    </ul>
                    <a href="{{ route('services.nida') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                </article>
            </div>

            <!-- OUR PRODUCTS (coded software we sell) -->
            <div class="category-section" style="margin-top: 60px;">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-cube" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">Our Products</h2>
                    <span class="category-count">Software we build & sell</span>
                </div>
                <p class="service-subtitle" style="margin-bottom: 30px;">
                    Individual solutions to specific tasks—coded by ZIMA and sold to banks, MFIs, SACCOS, and enterprises.
                </p>

                <div class="integration-grid" style="margin-bottom: 40px;">
                    <article class="integration-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <div class="integration-icon">
                            <i class="fas fa-robot" aria-hidden="true"></i>
                        </div>
                        <h3 itemprop="name">AI Agents</h3>
                        <p itemprop="description">Conversational AI agents for WhatsApp, web chat, and API. Industry-specific automation for healthcare, hospitality, retail, education, and more.</p>
                        <a href="{{ route('ai-agents') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                    </article>
                    <article class="integration-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <div class="integration-icon">
                            <i class="fas fa-code" aria-hidden="true"></i>
                        </div>
                        <h3 itemprop="name">API Gateway & Open Banking Platform</h3>
                        <p itemprop="description">Secure API management platform for open banking. Expose, consume, and monetize banking services with fintechs and third-party ecosystems.</p>
                        <a href="{{ route('services.api') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                    </article>
                    <article class="integration-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <div class="integration-icon">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </div>
                        <h3 itemprop="name">Mobile Push (Payments via MNOs)</h3>
                        <p itemprop="description">Platform to facilitate payments via M-Pesa, Airtel Money, and Tigo Pesa. Customers approve on their phone—ideal for collections, bills, e-commerce.</p>
                        <a href="{{ route('services.mobile-push') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                    </article>
                    <article class="integration-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <div class="integration-icon">
                            <i class="fas fa-sms" aria-hidden="true"></i>
                        </div>
                        <h3 itemprop="name">SMS Gateway</h3>
                        <p itemprop="description">Bulk and transactional SMS at the lowest cost in Tanzania. HTTP & SMPP API, all networks, delivery reports and sender ID.</p>
                        <a href="{{ route('services.sms') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                    </article>
                    <article class="integration-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <div class="integration-icon">
                            <i class="fas fa-users" aria-hidden="true"></i>
                        </div>
                        <h3 itemprop="name">Membership Referral System (Web & App)</h3>
                        <p itemprop="description">SACCO referral platform. Members refer via web and app; track referrals, manage incentives. TCDC-aligned.</p>
                        <a href="{{ route('services.membership-referral') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                    </article>
                    <article class="integration-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <div class="integration-icon">
                            <i class="fas fa-money-bill-wave" aria-hidden="true"></i>
                        </div>
                        <h3 itemprop="name">Loan Management System</h3>
                        <p itemprop="description">Full-cycle loan origination: application, risk assessment, disbursement, repayment tracking, and collections.</p>
                        <a href="{{ route('services.loan') }}" class="cta-btn" style="margin-top: 15px; padding: 10px 24px; font-size: 14px;">Learn more</a>
                    </article>
                </div>
            </div>

            <!-- FINANCIAL SERVICES & PAYMENTS (Products) -->
            <div class="category-section">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-money-bill-wave" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">Financial Services & Payments</h2>
                    <span class="category-count">7 Products</span>
                </div>

                <div class="projects-grid">
                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Collection Solution (Pay by Link)</h4>
                        <p itemprop="description">Digital payment collection system for Tanzania. Generate secure payment links for loan repayments, invoices, and transactions. Integrates with M-Pesa, Airtel Money, Tigo Pesa, and bank transfers for maximum reach.</p>
                        <span class="tag">Digital Payments</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Channels Reconciliation System</h4>
                        <p itemprop="description">Automated multi-channel reconciliation for Tanzanian banks. Reconcile transactions across core banking, mobile money (M-Pesa, Airtel, Tigo), ATMs, POS, and digital channels with audit-ready accuracy.</p>
                        <span class="tag">Finance Operations</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Salary Advance Management</h4>
                        <p itemprop="description">Automated salary advance platform for Tanzanian employers and banks. Issue instant salary advances linked to payroll with automatic deductions. Serve government employees, corporates, and SMEs.</p>
                        <span class="tag">Consumer Lending</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Vehicle Financing Platform</h4>
                        <p itemprop="description">End-to-end vehicle loan management for Tanzania. Digital applications, credit scoring, collateral tracking, and automated repayment reminders. Integrates with TRA for vehicle verification.</p>
                        <span class="tag">Asset Finance</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Comprehensive Loan Management</h4>
                        <p itemprop="description">Full-cycle loan origination system for Tanzanian financial institutions. Application processing, risk assessment, credit scoring, disbursement, repayment tracking, and collections management.</p>
                        <span class="tag">Core Banking</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">TanQR Merchant Management</h4>
                        <p itemprop="description">Unified merchant payment platform supporting Tanzania's TanQR standard. Manage QR-based payments, settlements, and reporting across multiple acquirers and mobile money operators.</p>
                        <span class="tag">Merchant Services</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Account Opening (Remote & Branch)</h4>
                        <p itemprop="description">Digital KYC and account opening for Tanzanian banks. Enable customers to open accounts remotely via mobile or in-branch with biometric verification, NIDA integration, and instant account activation.</p>
                        <span class="tag">Digital Banking</span>
                    </article>
                </div>
            </div>

            <!-- MICROFINANCE & FINANCIAL INCLUSION -->
            <div class="category-section">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-hands-helping" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">Microfinance & Financial Inclusion</h2>
                    <span class="category-count">5 Products</span>
                </div>

                <div class="projects-grid">
                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Microfinance Management System</h4>
                        <p itemprop="description">Complete MFI software for Tanzania. Manage group and individual micro-loans from origination to repayment. Support flat rate, declining balance (EMI), and Islamic finance models. TCDC approved.</p>
                        <span class="tag">MFI Software</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">SACCOS Management System</h4>
                        <p itemprop="description">End-to-end SACCO software for Tanzania mainland and Zanzibar. Manage member savings, shares, loans, dividends, and regulatory reporting. Approved by TCDC with full BOT compliance.</p>
                        <span class="tag">SACCO ERP</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">VICOBA Integration Service</h4>
                        <p itemprop="description">Connect Village Community Banks (VICOBA) to formal banking in Tanzania. Digitize group savings, loan management, and member records. Enable mobile money integration for rural financial inclusion.</p>
                        <span class="tag">Financial Inclusion</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Investment Groups Platform</h4>
                        <p itemprop="description">Digital platform for Tanzania's investment groups (vikundi vya uwekezaji). Manage group savings, investments, profit-sharing, and member contributions with transparent reporting and mobile access.</p>
                        <span class="tag">Group Finance</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">AgriBusiness Financing Suite</h4>
                        <p itemprop="description">Agricultural finance platform for Tanzania. Manage farmer loans, subsidies, crop insurance, and cooperative financing. Digital farmer profiling supports national food security initiatives.</p>
                        <span class="tag">Agri-Finance</span>
                    </article>
                </div>
            </div>

            <!-- COMPLIANCE & REGULATORY -->
            <div class="category-section">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">Compliance & Regulatory Systems</h2>
                    <span class="category-count">4 Products</span>
                </div>

                <div class="projects-grid">
                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">BOT RTSIS Reporting System</h4>
                        <p itemprop="description">Automated Real-Time Supervisory Information System for Bank of Tanzania compliance. Submit accurate financial and regulatory data in real-time. Avoid penalties with automated, audit-ready reporting.</p>
                        <span class="tag">BOT Compliance</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Government Loans (eLoans)</h4>
                        <p itemprop="description">Digital platform for government-backed loans in Tanzania. Manage HESLB student loans, SME development funds, and social welfare financing with verification workflows and fraud prevention.</p>
                        <span class="tag">Government Finance</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Contracts & Documents Management</h4>
                        <p itemprop="description">Centralized document management for Tanzanian organizations. Digital repository for contracts, legal documents, and compliance records with e-signatures, version control, and automated approvals.</p>
                        <span class="tag">Document Management</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Legal Cases Management</h4>
                        <p itemprop="description">Litigation tracking system for Tanzanian banks and corporates. Manage court cases, legal risks, compliance deadlines, and lawyer assignments. Integrated with Tanzania court systems.</p>
                        <span class="tag">Legal Tech</span>
                    </article>
                </div>
            </div>

            <!-- ENTERPRISE SYSTEMS -->
            <div class="category-section">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-building" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">Enterprise Management Systems</h2>
                    <span class="category-count">5 Products</span>
                </div>

                <div class="projects-grid">
                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">HR Management System (HRMS)</h4>
                        <p itemprop="description">Complete human resource management for Tanzania. Recruitment, payroll processing, NSSF/WCF compliance, training management, and performance evaluation. Compliant with Tanzanian labor laws.</p>
                        <span class="tag">HR Software</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Business Management ERP</h4>
                        <p itemprop="description">Comprehensive ERP system for Tanzanian SMEs. Integrated finance, HR, sales, procurement, and inventory modules. Support business growth with real-time reporting and decision support.</p>
                        <span class="tag">ERP Software</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Inventory Management System</h4>
                        <p itemprop="description">Digital inventory and asset management for Tanzania. Track fixed assets, stock levels, procurement, and supplier payments. Reduce fraud with automated controls and audit trails.</p>
                        <span class="tag">Asset Management</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Tenants Management System</h4>
                        <p itemprop="description">Property and rental management for Tanzanian landlords and banks. Manage units, leases, rental payments, and maintenance. Integrate with mobile money for automated rent collection.</p>
                        <span class="tag">Property Tech</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Incidents Management System</h4>
                        <p itemprop="description">IT and operational incident tracking for Tanzanian enterprises. Log, track, and resolve incidents with SLA management. Improve service delivery and maintain operational resilience.</p>
                        <span class="tag">IT Service</span>
                    </article>
                </div>
            </div>

            <!-- SECTOR-SPECIFIC SOLUTIONS -->
            <div class="category-section">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-industry" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">Sector-Specific</h2>
                    <span class="category-count">4 Products</span>
                </div>

                <div class="projects-grid">
                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">School Management System</h4>
                        <p itemprop="description">Complete school ERP for Tanzanian educational institutions. Manage student records, fees collection, academic reporting, and online payments. Support nursery, primary, secondary, and higher education.</p>
                        <span class="tag">EdTech</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Zahanati Management System</h4>
                        <p itemprop="description">Healthcare facility management for Tanzanian hospitals and clinics. Patient records, billing, medicine inventory, NHIF integration, and insurance claims. Improve healthcare delivery and financing.</p>
                        <span class="tag">HealthTech</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Events Management System</h4>
                        <p itemprop="description">Digital event management for Tanzania. User registration, contribution tracking, vendor coordination, and secure payments. Perfect for harambees, weddings, and corporate events.</p>
                        <span class="tag">Event Tech</span>
                    </article>

                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Notification Engine</h4>
                        <p itemprop="description">Centralized messaging platform for Tanzanian businesses. Real-time and scheduled notifications via SMS, email, WhatsApp, and push. Marketing campaigns and transactional alerts in one platform.</p>
                        <span class="tag">Communication</span>
                    </article>
                </div>
            </div>

            <!-- AI & INNOVATION -->
            <div class="category-section">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-robot" aria-hidden="true"></i>
                    </div>
                    <h2 class="category-title">AI & Innovation</h2>
                    <span class="category-count">1 Product</span>
                </div>

                <div class="projects-grid">
                    <article class="project-card" itemscope itemtype="https://schema.org/SoftwareApplication">
                        <h4 itemprop="name">Zona AI - Intelligent Assistant</h4>
                        <p itemprop="description">AI-powered virtual assistant for Tanzanian enterprises. 24/7 customer support in Swahili and English, automated inquiries, and intelligent system assistance. Reduce call center costs while improving service.</p>
                        <span class="tag">Artificial Intelligence</span>
                    </article>
                </div>
            </div>

            <!-- CTA Box -->
            <aside class="cta-box" aria-label="Request a consultation">
                <div class="cta-content">
                    <h3>Ready to Transform Your Operations?</h3>
                    <p>Join Tanzania's leading banks, MFIs, and enterprises using ZIMA solutions. Let's discuss your requirements.</p>
                </div>
                <a href="{{ route('contact') }}" class="cta-btn">Request a Demo</a>
            </aside>
        </div>
    </section>
</div>
