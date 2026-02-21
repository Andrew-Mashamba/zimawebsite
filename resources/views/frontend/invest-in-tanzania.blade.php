@extends('layouts.web')

@section('title', 'Invest in Tanzania – Technology Sector | ZIMA Solutions')
@section('title', 'Invest in Tanzania Technology – Fintech & Digital Infrastructure | ZIMA Solutions')
@section('meta_title', 'Invest in Tanzania Technology – Fintech & Digital Infrastructure | ZIMA Solutions')
@section('meta_description', 'Invest in Tanzania’s technology sector: fintech, RTGS/TIPS/GePG ecosystem, digital infrastructure, and innovation. Partner with ZIMA for local expertise and BOT-aligned solutions.')
@section('meta_keywords', 'invest in Tanzania, Tanzania technology investment, fintech Tanzania, foreign investment Tanzania, tech sector Tanzania')
@section('og_title', 'Invest in Tanzania Technology | ZIMA Solutions')
@section('og_description', 'Fintech, digital infrastructure, and innovation. Partner with ZIMA for local expertise in Tanzania.')
@section('twitter_title', 'Invest in Tanzania Technology | ZIMA Solutions')
@section('twitter_description', 'Fintech and digital infrastructure investment. Partner with ZIMA for local expertise.')
@section('og_title', 'Invest in Tanzania – Technology Sector | ZIMA Solutions')
@section('og_description', 'Foreign investors: explore Tanzania\'s tech sector. Fintech, digital payments, AI, and enterprise software. ZIMA as your local partner.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Invest in Tanzania – Technology Sector",
    "url": "{{ url('/invest-in-tanzania') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Invest in Tanzania", "item": "{{ url('/invest-in-tanzania') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}
<section class="invest-hero" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 100px 24px 60px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
            <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.9; color: #fff;">
                <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                <li style="color: #fff;">/</li>
                <li style="color: #fff;">Invest in Tanzania</li>
            </ol>
        </nav>
        <h1 style="font-family: 'Roboto Slab', serif; font-size: 42px; font-weight: 700; margin-bottom: 16px; color: #fff;">Invest in Tanzania’s Technology Industry</h1>
        <p style="font-size: 18px; line-height: 1.6; opacity: 0.9; max-width: 620px; margin: 0 auto; color: #fff;">For foreign companies and individuals looking to enter East Africa’s fastest-growing tech market. Partner with ZIMA for local expertise, regulatory knowledge, and execution.</p>
    </div>
</section>

<section style="padding: 60px 24px 40px; background: #fff;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; font-weight: 700; color: #1F3B8D; margin-bottom: 24px; text-align: center;">Why Tanzania’s Tech Sector</h2>
        <p style="font-size: 17px; line-height: 1.75; color: #374151; margin-bottom: 20px;">Tanzania offers a large, young population, rising mobile and internet penetration, and a government push toward digitalisation. Bank of Tanzania’s instant payment system (TIPS), national ID (NIDA), and government e-payments (GePG) create a mature infrastructure for fintech and enterprise software. English and Swahili fluency, a stable business environment, and access to EAC and SADC markets make it an attractive base for regional expansion.</p>
    </div>
</section>

<section style="padding: 40px 24px 60px; background: #f8f9fa;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; font-weight: 700; color: #1F3B8D; margin-bottom: 32px; text-align: center;">Opportunities for Investors</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
            <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid #e5e7eb;">
                <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                    <i class="fas fa-university" style="font-size: 24px; color: #fff;"></i>
                </div>
                <h3 style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #1F3B8D; margin: 0 0 10px;">Fintech & Payments</h3>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Instant payments (TIPS), mobile money, open banking APIs, and digital collections. High demand for core banking integrations, lending platforms, and regulatory reporting.</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid #e5e7eb;">
                <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                    <i class="fas fa-robot" style="font-size: 24px; color: #fff;"></i>
                </div>
                <h3 style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #1F3B8D; margin: 0 0 10px;">AI & Automation</h3>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Conversational AI, chatbots, and process automation for banks, healthcare, education, and retail. Multilingual (Swahili/English) and local compliance requirements create a clear niche.</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid #e5e7eb;">
                <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                    <i class="fas fa-building" style="font-size: 24px; color: #fff;"></i>
                </div>
                <h3 style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #1F3B8D; margin: 0 0 10px;">Enterprise & Government</h3>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">ERP, HRMS, document management, and sector solutions (schools, healthcare, SACCOs). Government digitalisation and BOT compliance drive sustained demand.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 60px 24px 40px; background: #fff;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; font-weight: 700; color: #1F3B8D; margin-bottom: 24px; text-align: center;">Why Partner with ZIMA</h2>
        <p style="font-size: 17px; line-height: 1.75; color: #374151; margin-bottom: 24px;">ZIMA Solutions is an established technology and business innovation company in Tanzania. We build and integrate fintech products, AI agents, and enterprise systems; we work with Bank of Tanzania–aligned infrastructure (RTGS, TIPS, GePG, NIDA) and understand local regulation and compliance. For foreign investors and companies, we offer:</p>
        <ul style="list-style: none; padding: 0; margin: 0 0 32px;">
            <li style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 16px; font-size: 16px; color: #374151;">
                <i class="fas fa-check-circle" style="color: #FF621B; margin-top: 4px;"></i>
                <span><strong>Local presence and credibility</strong> – Dar es Salaam–based team, known to banks, MFIs, and government entities.</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 16px; font-size: 16px; color: #374151;">
                <i class="fas fa-check-circle" style="color: #FF621B; margin-top: 4px;"></i>
                <span><strong>Regulatory and technical know-how</strong> – BOT standards, NIDA, GePG, and sector-specific compliance (TCDC, etc.).</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 16px; font-size: 16px; color: #374151;">
                <i class="fas fa-check-circle" style="color: #FF621B; margin-top: 4px;"></i>
                <span><strong>Product and integration capacity</strong> – From API gateways and SMS/mobile push to loan management, AI agents, and enterprise software.</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 16px; font-size: 16px; color: #374151;">
                <i class="fas fa-check-circle" style="color: #FF621B; margin-top: 4px;"></i>
                <span><strong>Structured partnership options</strong> – Joint ventures, white-label, distribution, or technical partnership. See our <a href="{{ route('partnership-programme') }}" style="color: #1F3B8D; font-weight: 600;">Partnership Programme</a> for details.</span>
            </li>
        </ul>
    </div>
</section>

<section style="padding: 50px 24px 70px; background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; font-weight: 700; margin-bottom: 16px;">Ready to Explore Investment in Tanzania?</h2>
        <p style="font-size: 17px; line-height: 1.6; opacity: 0.95; margin-bottom: 28px;">Get in touch for a confidential discussion on opportunities, partnerships, and how ZIMA can support your entry into Tanzania’s technology market.</p>
        <a href="{{ route('contact') }}" style="display: inline-block; background: #FF621B; color: #fff; padding: 16px 36px; border-radius: 50px; text-decoration: none; font-weight: 600;">Contact Us</a>
    </div>
</section>
@endsection
