@extends('layouts.web')

@section('title', 'Strategic Partnership Opportunity | ZIMA Solutions')
@section('title', 'Strategic Partnership – 50/50 Co-Build | ZIMA Solutions')
@section('meta_title', 'Strategic Partnership – 50/50 Co-Build | ZIMA Solutions')
@section('meta_description', 'Strategic partnerships with ZIMA: 50/50 co-invest, co-build, co-own. Your idea + our technology (fintech, AI agents, integrations) = scalable business in Tanzania.')
@section('meta_keywords', 'partnership Tanzania, strategic partnership, tech partnership, co-invest, ZIMA Solutions')
@section('og_title', 'Strategic Partnership – 50/50 Co-Build | ZIMA Solutions')
@section('og_description', '50/50 co-invest, co-build, co-own. Your idea + our technology = scalable business in Tanzania.')
@section('twitter_title', 'Strategic Partnership | ZIMA Solutions')
@section('twitter_description', '50/50 co-build partnerships. Your idea + our technology. Tanzania.')
@section('og_title', 'Strategic Partnership Opportunity | ZIMA Solutions')
@section('og_description', 'Build together. Share risk. Share success. 50/50 partnership to co-build high-impact digital solutions.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Strategic Partnership Opportunity",
    "url": "{{ url('/partnership-programme') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Partnership Programme", "item": "{{ url('/partnership-programme') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}
<style>
.pp-hero { background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 80px 24px 60px; text-align: center; }
.pp-hero .brand { font-size: 14px; letter-spacing: 0.2em; opacity: 0.9; margin-bottom: 8px; color: #fff; }
.pp-hero h1 { font-family: 'Roboto Slab', serif; font-size: clamp(22px, 3.5vw, 32px); font-weight: 700; margin-bottom: 8px; color: #fff; }
.pp-hero .tagline { font-size: 18px; font-weight: 600; margin-bottom: 24px; color: #FF621B; }
.pp-hero .formula { font-size: 16px; opacity: 0.95; margin-bottom: 20px; color: #fff; }
.pp-hero .intro { font-size: 16px; line-height: 1.7; max-width: 640px; margin: 0 auto 16px; color: #fff; }
.pp-hero .footer-line { font-size: 13px; opacity: 0.85; margin-top: 24px; color: #fff; }
.pp-section { padding: 48px 24px; max-width: 1200px; margin: 0 auto; }
.pp-section-alt { background: #f5f6f8; }
.pp-h2 { font-family: 'Roboto Slab', serif; font-size: 24px; font-weight: 700; color: #1F3B8D; margin-bottom: 20px; text-align: center; }
.pp-h3 { font-size: 17px; font-weight: 700; color: #1a1a1a; margin-bottom: 12px; }
.pp-body { font-size: 16px; line-height: 1.75; color: #374151; margin-bottom: 16px; }
.pp-table { width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 15px; }
.pp-table th, .pp-table td { border: 1px solid #e5e7eb; padding: 14px 16px; text-align: center; }
.pp-table th { background: #1F3B8D; color: #fff; font-weight: 600; }
.pp-table tr:nth-child(even) { background: #f9fafb; }
.pp-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin: 24px 0; }
@media (max-width: 700px) { .pp-stats { grid-template-columns: repeat(2, 1fr); } }
.pp-stat { background: #fff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px; text-align: center; }
.pp-stat-num { font-size: 28px; font-weight: 700; color: #1F3B8D; }
.pp-stat-label { font-size: 13px; color: #6b7280; margin-top: 4px; }
.pp-lead-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
.pp-lead-table th, .pp-lead-table td { border: 1px solid #e5e7eb; padding: 12px 14px; text-align: left; }
.pp-lead-table th { background: #1F3B8D; color: #fff; }
.pp-list { margin: 12px 0; padding-left: 22px; line-height: 1.8; color: #374151; }
.pp-steps { display: grid; grid-template-columns: repeat(6, 1fr); gap: 8px; margin: 20px 0; }
@media (max-width: 768px) { .pp-steps { grid-template-columns: 1fr; } }
.pp-step { background: #fff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; text-align: center; }
.pp-step-num { font-weight: 700; color: #FF621B; margin-bottom: 6px; }
.pp-step-title { font-size: 13px; font-weight: 600; color: #1F3B8D; }
.pp-step-desc { font-size: 12px; color: #6b7280; margin-top: 4px; }
.pp-compare { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0; }
@media (max-width: 600px) { .pp-compare { grid-template-columns: 1fr; } }
.pp-compare-box { border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px; background: #fff; }
.pp-compare-box h4 { margin: 0 0 12px; font-size: 16px; color: #1F3B8D; }
.pp-compare-box ul { margin: 0; padding-left: 20px; line-height: 1.8; font-size: 14px; color: #374151; }
.pp-ideas { display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px 20px; margin: 16px 0; }
@media (max-width: 500px) { .pp-ideas { grid-template-columns: 1fr; } }
.pp-ideas li { margin-bottom: 4px; }
.pp-contact-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; margin: 24px 0; }
.pp-contact-item { padding: 16px; background: #fff; border: 1px solid #e5e7eb; border-radius: 8px; }
.pp-contact-item strong { display: block; color: #1F3B8D; margin-bottom: 6px; font-size: 13px; }
.pp-breadcrumb { margin-bottom: 16px; font-size: 14px; opacity: 0.9; }
.pp-breadcrumb a { color: #fff; text-decoration: none; }
.pp-ul-clean { list-style: none; padding: 0; margin: 12px 0; }
.pp-ul-clean li { margin-bottom: 8px; padding-left: 20px; position: relative; }
.pp-ul-clean li::before { content: "✓"; position: absolute; left: 0; color: #FF621B; font-weight: 700; }
</style>

{{-- Hero --}}
<section class="pp-hero">
    <div style="max-width: 1200px; margin: 0 auto;">
        <nav aria-label="Breadcrumb" class="pp-breadcrumb"><a href="/">Home</a> / Partnership Programme</nav>
        <p class="brand">ZIMA Solutions</p>
        <h1>STRATEGIC PARTNERSHIP OPPORTUNITY</h1>
        <p class="tagline">Build Together. Share Risk. Share Success.</p>
        <p class="formula">YOUR IDEA + OUR TECHNOLOGY = A SCALABLE BUSINESS</p>
        <p class="intro">ZIMA Solutions Limited invites visionary entrepreneurs, companies, and institutions to form true strategic partnerships. If you have a strong business idea or a growing project that needs world-class technology, we offer a transparent <strong>50/50 partnership</strong> to co-invest, co-build, and co-own high-impact digital solutions.</p>
        <p class="intro">This is not a vendor relationship. This is shared risk, shared ownership, and shared upside.</p>
        <p class="footer-line">Let's Build Something That Lasts</p>
        <p class="footer-line">ZIMA Solutions Limited | TIN: 181-314-605 | Registered in Tanzania</p>
        <p class="footer-line" style="margin-top: 8px;"><strong>Build the Future. Together.</strong></p>
    </div>
</section>

{{-- Partnership Model --}}
<section class="pp-section">
    <h2 class="pp-h2">THE PARTNERSHIP MODEL</h2>
    <p class="pp-body" style="text-align: center;">Fair. Transparent. Aligned.</p>
    <table class="pp-table">
        <thead>
            <tr><th>Area</th><th>You</th><th>ZIMA</th></tr>
        </thead>
        <tbody>
            <tr><td><strong>Equity Ownership</strong></td><td>50%</td><td>50%</td></tr>
            <tr><td><strong>Investment & Costs</strong></td><td>50%</td><td>50%</td></tr>
            <tr><td><strong>Revenue & Profits</strong></td><td>50%</td><td>50%</td></tr>
            <tr><td><strong>Strategic Decisions</strong></td><td>Joint</td><td>Joint</td></tr>
        </tbody>
    </table>
    <p class="pp-body" style="text-align: center;">No hidden charges. No vendor lock-in. No one-sided contracts. Only long-term collaboration built on trust and results.</p>
</section>

{{-- What ZIMA Brings --}}
<section class="pp-section pp-section-alt">
    <h2 class="pp-h2">WHAT ZIMA BRINGS</h2>
    <p class="pp-body" style="text-align: center;">Proven Technology. Real Execution.</p>
    <p class="pp-body">We have built and deployed 26+ production-ready solutions across fintech, enterprise, and public-sector systems.</p>

    <h3 class="pp-h3">Financial Technology & Payments</h3>
    <ul class="pp-list">
        <li>Bank of Tanzania integrations (RTGS, TIPS, GePG)</li>
        <li>Payment gateways & merchant systems</li>
        <li>Loan & credit management platforms</li>
        <li>Mobile money integrations (M-Pesa, Airtel, Tigo)</li>
        <li>TanQR merchant & payment solutions</li>
    </ul>

    <h3 class="pp-h3">Enterprise & Business Systems</h3>
    <ul class="pp-list">
        <li>ERP & Business Management Systems</li>
        <li>HR, Payroll & Compliance platforms</li>
        <li>Inventory, procurement & asset management</li>
        <li>Secure document management with e-signatures</li>
    </ul>

    <h3 class="pp-h3">Sector-Focused Platforms</h3>
    <ul class="pp-list">
        <li>Healthcare & clinic management systems</li>
        <li>School & education management solutions</li>
        <li>Agricultural financing & farmer platforms</li>
        <li>SACCOS, MFI & VICOBA digitization</li>
        <li>Cooperative & member-based systems</li>
    </ul>

    <h3 class="pp-h3">Advanced & Emerging Technology</h3>
    <ul class="pp-list">
        <li>AI-powered virtual assistants (Zona AI)</li>
        <li>API gateways & open banking platforms</li>
        <li>Real-time messaging & notification engines</li>
        <li>Secure, cloud-native architectures</li>
    </ul>
</section>

{{-- Why ZIMA - Stats --}}
<section class="pp-section">
    <h2 class="pp-h2">WHY ZIMA?</h2>
    <p class="pp-body" style="text-align: center;">Results You Can Trust</p>
    <div class="pp-stats">
        <div class="pp-stat"><div class="pp-stat-num">50+</div><div class="pp-stat-label">Clients Served</div></div>
        <div class="pp-stat"><div class="pp-stat-num">20+</div><div class="pp-stat-label">Enterprise Systems Live</div></div>
        <div class="pp-stat"><div class="pp-stat-num">99.9%</div><div class="pp-stat-label">Uptime Infrastructure</div></div>
        <div class="pp-stat"><div class="pp-stat-num">24/7</div><div class="pp-stat-label">Support & Monitoring</div></div>
    </div>
</section>

{{-- Leadership --}}
<section class="pp-section pp-section-alt">
    <h2 class="pp-h2">LEADERSHIP & EXECUTION TEAM</h2>
    <table class="pp-lead-table">
        <thead>
            <tr><th>Role</th><th>Name</th><th>Focus</th></tr>
        </thead>
        <tbody>
            <tr><td>CEO</td><td>Andrew Mashamba</td><td>Strategy, innovation, partnerships</td></tr>
            <tr><td>Finance & Operations</td><td>Caroline Ceasar Shija</td><td>Financial governance & operations</td></tr>
            <tr><td>Technical Officer</td><td>Simon Mpembee</td><td>Architecture & system integrations</td></tr>
            <tr><td>Business Development</td><td>Khafsa Hassan Lulela</td><td>Market growth & partnerships</td></tr>
        </tbody>
    </table>
    <h3 class="pp-h3">Technical Excellence</h3>
    <ul class="pp-ul-clean">
        <li>Full-stack & scalable architectures</li>
        <li>Bank-grade security & compliance</li>
        <li>Regulatory experience (BOT & financial systems)</li>
        <li>Agile development & continuous improvement</li>
        <li>Long-term maintenance & support</li>
    </ul>
</section>

{{-- Ideal Partners --}}
<section class="pp-section">
    <h2 class="pp-h2">IDEAL PARTNERS</h2>
    <p class="pp-body"><strong>Entrepreneurs & Visionaries</strong> who have:</p>
    <ul class="pp-list">
        <li>A validated market need in Tanzania or East Africa</li>
        <li>Clear problem-solution alignment</li>
        <li>Industry knowledge and execution capacity</li>
        <li>Long-term growth mindset</li>
    </ul>
    <p class="pp-body"><strong>Companies & Institutions</strong> that:</p>
    <ul class="pp-list">
        <li>Have strong ideas but limited technical capacity</li>
        <li>Need to digitize existing services or customers</li>
        <li>Want to scale without outsourcing ownership</li>
        <li>Believe in shared-value partnerships</li>
    </ul>
    <p class="pp-body"><strong>Priority Sectors:</strong> Financial Services & Fintech | Healthcare & Healthtech | Education & Edtech | Agriculture & Agritech | Government & Civic Tech | Retail & E-commerce | Real Estate & Property Management | Logistics & Supply Chain</p>
</section>

{{-- How We Work --}}
<section class="pp-section pp-section-alt">
    <h2 class="pp-h2">HOW WE WORK TOGETHER</h2>
    <p class="pp-body" style="text-align: center;">Simple. Structured. Effective.</p>
    <div class="pp-steps">
        <div class="pp-step"><div class="pp-step-num">1</div><div class="pp-step-title">CONNECT</div><div class="pp-step-desc">Share your idea or project</div></div>
        <div class="pp-step"><div class="pp-step-num">2</div><div class="pp-step-title">EVALUATE</div><div class="pp-step-desc">Joint feasibility & market assessment</div></div>
        <div class="pp-step"><div class="pp-step-num">3</div><div class="pp-step-title">AGREE</div><div class="pp-step-desc">Clear partnership & ownership terms</div></div>
        <div class="pp-step"><div class="pp-step-num">4</div><div class="pp-step-title">BUILD</div><div class="pp-step-desc">Co-invest and co-develop</div></div>
        <div class="pp-step"><div class="pp-step-num">5</div><div class="pp-step-title">LAUNCH</div><div class="pp-step-desc">Go to market together</div></div>
        <div class="pp-step"><div class="pp-step-num">6</div><div class="pp-step-title">SCALE</div><div class="pp-step-desc">Grow, optimize, and expand</div></div>
    </div>
</section>

{{-- Partnership Ideas --}}
<section class="pp-section">
    <h2 class="pp-h2">PARTNERSHIP IDEAS WE'RE READY TO BUILD</h2>
    <ul class="pp-ideas">
        <li>Digital lending platforms</li>
        <li>Healthcare appointment & payment systems</li>
        <li>School fees & parent engagement platforms</li>
        <li>Farmer-to-marketplace solutions</li>
        <li>Event ticketing & management systems</li>
        <li>Property rental & management platforms</li>
        <li>Fleet & transport management systems</li>
        <li>Restaurant & hospitality POS</li>
        <li>Cooperative & savings group platforms</li>
        <li>Freelancer & talent marketplaces</li>
    </ul>
    <p class="pp-body">Have another idea? We are open and ready.</p>
</section>

{{-- Vendor vs Partnership --}}
<section class="pp-section pp-section-alt">
    <h2 class="pp-h2">WHAT MAKES THIS DIFFERENT</h2>
    <p class="pp-body" style="text-align: center;">Vendor Model vs Strategic Partnership</p>
    <div class="pp-compare">
        <div class="pp-compare-box">
            <h4>Traditional Vendor</h4>
            <ul>
                <li>You pay everything</li>
                <li>Vendor delivers & exits</li>
                <li>One-sided risk</li>
                <li>Fixed scope</li>
                <li>You own alone</li>
            </ul>
        </div>
        <div class="pp-compare-box">
            <h4>ZIMA Partnership</h4>
            <ul>
                <li>We co-invest 50/50</li>
                <li>We stay and grow</li>
                <li>Shared risk & reward</li>
                <li>Flexible, evolving</li>
                <li>We build together</li>
            </ul>
        </div>
    </div>
</section>

{{-- Success Targets --}}
<section class="pp-section">
    <h2 class="pp-h2">OUR SUCCESS TARGETS</h2>
    <p class="pp-body" style="text-align: center;">What We Aim to Achieve Together</p>
    <ul class="pp-ul-clean">
        <li>Sustainable recurring revenue</li>
        <li>Thousands of active users</li>
        <li>40-60% operational efficiency gains</li>
        <li>High customer satisfaction (above industry NPS)</li>
        <li>Systems built to scale 10x and beyond</li>
    </ul>
</section>

{{-- Get in Touch --}}
<section class="pp-section pp-section-alt">
    <h2 class="pp-h2">GET IN TOUCH</h2>
    <div class="pp-contact-grid">
        <div class="pp-contact-item"><strong>EMAIL</strong><a href="mailto:partnerships@zima.co.tz">partnerships@zima.co.tz</a></div>
        <div class="pp-contact-item"><strong>PHONE</strong><a href="tel:+255692410353">+255 69 241 0353</a></div>
        <div class="pp-contact-item"><strong>WEBSITE</strong><a href="https://zima.co.tz" target="_blank" rel="noopener">https://zima.co.tz</a></div>
        <div class="pp-contact-item"><strong>LOCATION</strong>Makongo, Kinondoni<br>Dar es Salaam</div>
    </div>
</section>

{{-- Next Steps & Confidentiality --}}
<section class="pp-section">
    <h2 class="pp-h2">NEXT STEPS</h2>
    <ol class="pp-list" style="list-style: decimal; padding-left: 22px;">
        <li>Send us your idea or project brief</li>
        <li>Schedule a strategy discussion</li>
        <li>Meet the team and define the partnership</li>
    </ol>
    <p class="pp-body" style="margin-top: 24px; padding: 20px; background: #f0f4ff; border-radius: 8px; border-left: 4px solid #1F3B8D;"><strong>CONFIDENTIALITY GUARANTEED.</strong> All discussions are treated with strict confidentiality. NDAs can be signed before detailed disclosures.</p>
    <p class="pp-body" style="text-align: center; margin-top: 32px;">Innovation succeeds when vision meets execution.<br>Let's build meaningful businesses together.</p>
    <p class="pp-body" style="text-align: center; font-size: 14px; color: #6b7280;">— ZIMA Solutions Limited<br>TIN: 181-314-605 | Registered in Tanzania<br><strong>Build the Future. Together.</strong></p>
    <p style="text-align: center; margin-top: 32px;"><a href="{{ route('contact') }}?subject=Partnership%20Programme" style="display: inline-block; background: #FF621B; color: #fff; padding: 14px 32px; border-radius: 50px; text-decoration: none; font-weight: 600;">Contact Us</a></p>
</section>
@endsection
