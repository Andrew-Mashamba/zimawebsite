@extends('layouts.web')

@section('title', 'SACCO Membership Referral System Tanzania | Web & App | ZIMA Solutions')
@section('meta_title', 'Membership Referral System for SACCOS – Web & App | ZIMA Solutions Tanzania')
@section('meta_description', 'Grow your SACCO with ZIMA Membership Referral System. Web and mobile app for members to refer new members, track referrals, and earn incentives. TCDC-aligned, built for Tanzanian SACCOS.')
@section('meta_keywords', 'SACCO referral system Tanzania, membership referral, SACCO growth, cooperative referral program, TCDC SACCO, Dar es Salaam')
@section('og_title', 'Membership Referral System for SACCOS – Web & App | ZIMA Solutions')
@section('og_description', 'Web and app platform for SACCOS to grow membership through member referrals, incentives, and tracking.')
@section('twitter_title', 'Membership Referral System for SACCOS | ZIMA Solutions')
@section('twitter_description', 'SACCO growth via member referrals. Web & app. TCDC-aligned. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "@id": "{{ url('/services/membership-referral-system') }}#service",
    "name": "Membership Referral System (Web & App)",
    "applicationCategory": "BusinessApplication",
    "description": "Digital platform for SACCOS in Tanzania to grow membership through member-driven referrals. Web and mobile app for referring new members, tracking referrals, and managing incentives. Supports TCDC and cooperative best practices.",
    "provider": { "@id": "{{ url('/') }}#organization" },
    "operatingSystem": "Web, Android, iOS",
    "url": "{{ url('/services/membership-referral-system') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Membership Referral System for SACCOS | ZIMA Solutions",
    "description": "SACCO referral platform: members refer via web and app. Track referrals, manage incentives. TCDC-aligned for Tanzanian cooperatives.",
    "url": "{{ url('/services/membership-referral-system') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "Membership Referral System", "item": "{{ url('/services/membership-referral-system') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
<div class="service-page-container" style="padding: 0;">
    <section class="service-hero" aria-label="Service overview" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 40px 80px; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.8;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('our-products') }}" style="color: #fff; text-decoration: none;">Products</a></li>
                    <li>/</li>
                    <li>Membership Referral System</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">Membership Referral System (Web & App)</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Grow your SACCO with a dedicated referral platform. Members refer new members via web and mobile app—track referrals, manage incentives, and scale membership the way successful cooperatives do in Tanzania.</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <section aria-label="Overview" style="padding: 60px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; color: #1F3B8D; margin-bottom: 20px;">Built for SACCOS in Tanzania</h2>
            <p style="color: #374151; line-height: 1.8; margin-bottom: 16px;">SACCOs grow fastest when existing members bring in new members. ZIMA’s Membership Referral System gives your SACCO a dedicated web and mobile app so members can refer family, friends, and colleagues easily. Referrers get a simple way to share a link or invite code; new members can sign up and be linked to the referrer. Your office gets a dashboard to track who referred whom, approve new members, and manage referral incentives—such as cash bonuses, interest-free loans, or other benefits—so member-driven recruitment is transparent and fair.</p>
            <p style="color: #374151; line-height: 1.8;">The system is designed for the Tanzanian cooperative context and can align with TCDC and SACCO best practices. Use it alongside your existing SACCO management system or as a standalone membership growth tool. Web and app access means members can refer on the go, and your admin team can manage everything from one place.</p>
        </div>
    </section>

    <section aria-label="Key features" style="padding: 80px 40px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Key Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Web & Mobile App</h3>
                    <p style="color: #666; line-height: 1.7;">Members refer via web or app; new members can register and link to their referrer for a smooth experience.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Referral Tracking</h3>
                    <p style="color: #666; line-height: 1.7;">See who referred whom, referral status, and new member conversion so you can measure and improve growth.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Incentive Management</h3>
                    <p style="color: #666; line-height: 1.7;">Configure and manage referral rewards—bonuses, loans, or other benefits—when new members join.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">SACCO-Ready</h3>
                    <p style="color: #666; line-height: 1.7;">Designed for Tanzanian SACCOS and cooperatives, with workflows that fit TCDC and member-based growth.</p>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Grow Your SACCO Membership?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Put member referrals at the center of your growth strategy with our Web & App referral system. Contact us for a demo.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
