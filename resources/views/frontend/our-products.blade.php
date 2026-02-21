@extends('layouts.web')

@section('title', 'Our Products – 27+ Solutions for Payments, Lending, KYC, SACCO | ZIMA Solutions')
@section('meta_title', 'Our Products – 27+ Solutions for Payments, Lending, KYC, SACCO | ZIMA Solutions')
@section('meta_description', 'ZIMA products: Collection Solution, TanQR, Loan Management, SACCOS Management, SACCOS Members Portal, SACCOS Members Mobile App, Microfinance, Account Opening, NIDA Gate, SMS, Mobile Push, and more. For banks, MFIs, SACCOS, and enterprises in Tanzania.')
@section('meta_keywords', 'ZIMA products, pay by link, TanQR, loan management system, microfinance software, NIDA KYC, SMS gateway, SACCO software, Tanzania fintech')
@section('og_title', 'Our Products – 27+ Solutions | ZIMA Solutions')
@section('og_description', 'Collection, TanQR, SACCOS Members Portal & Mobile App, loan management, microfinance, NIDA, SMS, mobile push, and more for Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Our Products",
    "description": "ZIMA products: Collection Solution, TanQR, SACCOS Management, SACCOS Members Portal, SACCOS Members Mobile App, Loan Management, Microfinance, Account Opening, NIDA Gate, SMS, Mobile Push, and more. For banks, MFIs, SACCOS, and enterprises in Tanzania.",
    "url": "{{ url('/our-products') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Products", "item": "{{ url('/our-products') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}
<section class="products-grid-page" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 100px 24px 60px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
            <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.9; color: #fff;">
                <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                <li style="color: #fff;">/</li>
                <li style="color: #fff;">Products</li>
            </ol>
        </nav>
        <h1 style="font-family: 'Roboto Slab', serif; font-size: 42px; font-weight: 700; margin-bottom: 16px; color: #fff;">Our Products</h1>
        <p style="font-size: 18px; line-height: 1.6; opacity: 0.9; max-width: 600px; margin: 0 auto; color: #fff;">Software and platforms we build and sell. Individual solutions to specific tasks for banks, MFIs, SACCOS, and enterprises.</p>
    </div>
</section>

<section style="padding: 60px 24px 80px; background: #f8f9fa;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div class="solution-cards-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px;">
            @php
            $productCards = [
                ['title' => 'AI Agents', 'desc' => 'Conversational AI for WhatsApp, web chat, and API. Industry-specific automation for healthcare, hospitality, retail, education, and more.', 'icon' => 'robot', 'url' => route('ai-agents')],
                ['title' => 'API Gateway & Open Banking', 'desc' => 'Secure API management platform for open banking. Expose, consume, and monetize banking services with fintechs and third-party ecosystems.', 'icon' => 'code', 'url' => route('services.api')],
                ['title' => 'Mobile Push (Payments via MNOs)', 'desc' => 'Platform to facilitate payments via M-Pesa, Airtel Money, and Tigo Pesa. Customers approve on their phone—ideal for collections, bills, e-commerce.', 'icon' => 'mobile-alt', 'url' => route('services.mobile-push')],
                ['title' => 'SMS Gateway', 'desc' => 'Bulk and transactional SMS at the lowest cost in Tanzania. HTTP & SMPP API, all networks, delivery reports and sender ID.', 'icon' => 'sms', 'url' => route('services.sms')],
                ['title' => 'Membership Referral System', 'desc' => 'SACCO referral platform. Members refer via web and app; track referrals, manage incentives. TCDC-aligned.', 'icon' => 'users', 'url' => route('services.membership-referral')],
                ['title' => 'Loan Management System', 'desc' => 'Full-cycle loan origination: application, risk assessment, disbursement, repayment tracking, and collections.', 'icon' => 'money-bill-wave', 'url' => route('services.loan')],
                ['title' => 'Collection Solution (Pay by Link)', 'desc' => 'Digital payment collection system. Generate secure payment links for loan repayments, invoices, and transactions. Integrates with M-Pesa, Airtel, Tigo, banks.', 'icon' => 'link', 'url' => route('products.show', 'collection-solution')],
                ['title' => 'Channels Reconciliation System', 'desc' => 'Automated multi-channel reconciliation for banks. Reconcile across core banking, mobile money, ATMs, POS, and digital channels with audit-ready accuracy.', 'icon' => 'balance-scale', 'url' => route('products.show', 'channels-reconciliation')],
                ['title' => 'TanQR Merchant Management', 'desc' => 'Unified merchant payment platform supporting Tanzania\'s TanQR standard. QR-based payments, settlements, and reporting.', 'icon' => 'qrcode', 'url' => route('products.show', 'tanqr-merchant-management')],
                ['title' => 'Salary Advance Management', 'desc' => 'Automated salary advance platform. Issue instant advances linked to payroll with automatic deductions. For employers and banks.', 'icon' => 'wallet', 'url' => route('products.show', 'salary-advance-management')],
                ['title' => 'Vehicle Financing Platform', 'desc' => 'End-to-end vehicle loan management. Digital applications, credit scoring, collateral tracking, repayment reminders. Integrates with TRA.', 'icon' => 'car', 'url' => route('products.show', 'vehicle-financing-platform')],
                ['title' => 'Account Opening (Remote & Branch)', 'desc' => 'Digital KYC and account opening. Remote or in-branch with biometric verification, NIDA integration, and instant account activation.', 'icon' => 'user-plus', 'url' => route('products.show', 'account-opening')],
                ['title' => 'Microfinance Management System', 'desc' => 'Complete MFI software. Group and individual micro-loans, flat rate, declining balance, Islamic finance. TCDC approved.', 'icon' => 'hand-holding-usd', 'url' => route('products.show', 'microfinance-management-system')],
                ['title' => 'SACCOS Management System', 'desc' => 'End-to-end SACCO software. Member savings, shares, loans, dividends, regulatory reporting. TCDC and BOT compliant.', 'icon' => 'users-cog', 'url' => route('products.show', 'saccos-management-system')],
                ['title' => 'SACCOS Members Portal', 'desc' => 'Web portal for SACCO members. View shares, savings, loans, statements, and submit requests. TCDC-aligned for Tanzanian SACCOS.', 'icon' => 'desktop', 'url' => route('products.show', 'saccos-members-portal')],
                ['title' => 'SACCOS Members Mobile Application', 'desc' => 'Mobile app for SACCO members. Check shares, savings, loans, make payments and requests on the go. iOS and Android.', 'icon' => 'mobile-alt', 'url' => route('products.show', 'saccos-members-mobile-app')],
                ['title' => 'VICOBA Integration', 'desc' => 'Connect Village Community Banks to formal banking. Digitize group savings, loans, member records. Mobile money for financial inclusion.', 'icon' => 'hands-helping', 'url' => route('products.show', 'vicoba-integration')],
                ['title' => 'Investment Groups Platform', 'desc' => 'Digital platform for investment groups (vikundi vya uwekezaji). Group savings, investments, profit-sharing, transparent reporting.', 'icon' => 'chart-line', 'url' => route('products.show', 'investment-groups-platform')],
                ['title' => 'AgriBusiness Financing Suite', 'desc' => 'Agricultural finance platform. Farmer loans, subsidies, crop insurance, cooperative financing. Digital farmer profiling.', 'icon' => 'tractor', 'url' => route('products.show', 'agribusiness-financing-suite')],
                ['title' => 'BOT RTSIS Reporting System', 'desc' => 'Automated Real-Time Supervisory Information System for Bank of Tanzania compliance. Accurate, audit-ready regulatory reporting.', 'icon' => 'shield-alt', 'url' => route('products.show', 'bot-rtsis-reporting')],
                ['title' => 'Government Loans (eLoans)', 'desc' => 'Digital platform for government-backed loans. HESLB student loans, SME funds, social welfare. Verification and fraud prevention.', 'icon' => 'university', 'url' => route('products.show', 'government-loans-eloans')],
                ['title' => 'Contracts & Documents Management', 'desc' => 'Centralized document management. Contracts, legal documents, compliance records. E-signatures, version control, approvals.', 'icon' => 'file-contract', 'url' => route('products.show', 'contracts-documents-management')],
                ['title' => 'Legal Cases Management', 'desc' => 'Litigation tracking for banks and corporates. Court cases, legal risks, compliance deadlines, lawyer assignments.', 'icon' => 'gavel', 'url' => route('products.show', 'legal-cases-management')],
                ['title' => 'HR Management System (HRMS)', 'desc' => 'Complete HR: recruitment, payroll, NSSF/WCF compliance, training, performance evaluation. Tanzanian labor law compliant.', 'icon' => 'id-card', 'url' => route('products.show', 'hr-management-system')],
                ['title' => 'Business Management ERP', 'desc' => 'Comprehensive ERP for SMEs. Finance, HR, sales, procurement, inventory. Real-time reporting and decision support.', 'icon' => 'building', 'url' => route('products.show', 'business-management-erp')],
                ['title' => 'Inventory Management System', 'desc' => 'Digital inventory and asset management. Fixed assets, stock, procurement, supplier payments. Automated controls and audit trails.', 'icon' => 'boxes', 'url' => route('products.show', 'inventory-management-system')],
                ['title' => 'Tenants Management System', 'desc' => 'Property and rental management. Units, leases, rental payments, maintenance. Mobile money for rent collection.', 'icon' => 'home', 'url' => route('products.show', 'tenants-management-system')],
                ['title' => 'Incidents Management System', 'desc' => 'IT and operational incident tracking. Log, track, resolve with SLA management. Improve service delivery.', 'icon' => 'exclamation-triangle', 'url' => route('products.show', 'incidents-management-system')],
                ['title' => 'School Management System', 'desc' => 'Complete school ERP. Student records, fees collection, academic reporting, online payments. Nursery to higher education.', 'icon' => 'graduation-cap', 'url' => route('products.show', 'school-management-system')],
                ['title' => 'Zahanati Management System', 'desc' => 'Healthcare facility management. Patient records, billing, medicine inventory, NHIF integration, insurance claims.', 'icon' => 'hospital', 'url' => route('products.show', 'zahanati-management-system')],
                ['title' => 'Events Management System', 'desc' => 'Digital event management. Registration, contribution tracking, vendor coordination, secure payments. Harambees, weddings, corporate.', 'icon' => 'calendar-alt', 'url' => route('products.show', 'events-management-system')],
                ['title' => 'Notification Engine', 'desc' => 'Centralized messaging platform. Real-time and scheduled notifications via SMS, email, WhatsApp, push. Campaigns and transactional alerts.', 'icon' => 'bell', 'url' => route('products.show', 'notification-engine')],
                ['title' => 'Zona AI – Intelligent Assistant', 'desc' => 'AI-powered virtual assistant. 24/7 customer support in Swahili and English, automated inquiries, intelligent system assistance.', 'icon' => 'robot', 'url' => route('products.show', 'zona-ai')],
            ];
            @endphp
            @foreach($productCards as $card)
            <div class="solution-card-wrapper" style="background: #fff; border-radius: 12px; padding: 32px 28px; text-align: center; border: 1px solid #e5e7eb; transition: all 0.3s ease;">
                <div style="width: 64px; height: 64px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-{{ $card['icon'] }}" style="font-size: 26px; color: #fff;"></i>
                </div>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #1F3B8D; margin: 0 0 12px;">{{ $card['title'] }}</h2>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">{{ $card['desc'] }}</p>
                <a href="{{ $card['url'] }}" style="display: inline-block; margin-top: 20px; font-weight: 600; color: #FF621B; font-size: 14px; text-decoration: none;">Learn more →</a>
            </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 48px;">
            <a href="{{ route('contact') }}" style="display: inline-block; background: #FF621B; color: #fff; padding: 16px 36px; border-radius: 50px; text-decoration: none; font-weight: 600;">Request a Demo</a>
        </div>
    </div>
</section>

<style>
.solution-card-wrapper:hover {
    box-shadow: 0 12px 32px rgba(31, 59, 141, 0.12);
    border-color: rgba(31, 59, 141, 0.2);
    transform: translateY(-4px);
}
@media (max-width: 640px) {
    .solution-cards-grid { grid-template-columns: 1fr; }
}
</style>
@endsection
