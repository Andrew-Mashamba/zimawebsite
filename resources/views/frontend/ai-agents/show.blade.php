@extends('layouts.web')

@section('title', $agent['name'] . ' – AI Agent for ' . $agent['niche'] . ' | ZIMA Solutions')
@section('meta_title', $agent['name'] . ' AI Agent – ' . $agent['niche'] . ' | ZIMA Solutions')
@section('meta_description', $agent['meta_description'])
@section('meta_keywords', $agent['meta_keywords'] ?? '')
@section('og_title', $agent['name'] . ' – AI Agent | ZIMA Solutions')
@section('og_description', $agent['short_description'])
@section('twitter_title', $agent['name'] . ' – AI Agent | ZIMA Solutions')
@section('twitter_description', $agent['short_description'])

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": {!! json_encode($agent['name']) !!},
    "applicationCategory": "BusinessApplication",
    "description": {!! json_encode($agent['short_description']) !!},
    "offers": { "@type": "Offer", "availability": "https://schema.org/InStock" },
    "provider": { "@type": "Organization", "name": "ZIMA Solutions Limited" },
    "url": "{{ url()->current() }}",
    "areaServed": { "@type": "Country", "name": "Tanzania" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "{{ $agent['name'] }} – AI Agent for {{ $agent['niche'] }}",
    "description": {!! json_encode($agent['short_description']) !!},
    "url": "{{ url()->current() }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "AI Agents", "item": "{{ url('/ai-agents') }}"},
            {"@type": "ListItem", "position": 3, "name": "{{ $agent['name'] }}", "item": "{{ url()->current() }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}
<div class="ai-agent-detail-page">
    {{-- Hero --}}
    <section class="agent-hero" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 100px 24px 64px; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; flex-wrap: wrap; gap: 8px; font-size: 14px; opacity: 0.9;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li style="color: rgba(255,255,255,0.8);">/</li>
                    <li><a href="{{ route('ai-agents') }}" style="color: #fff; text-decoration: none;">AI Agents</a></li>
                    <li style="color: rgba(255,255,255,0.8);">/</li>
                    <li style="color: #fff;">{{ $agent['name'] }}</li>
                </ol>
            </nav>
            <p style="font-size: 13px; text-transform: uppercase; letter-spacing: 0.08em; opacity: 0.9; margin: 0 0 8px;">{{ $agent['industry'] }}</p>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: clamp(28px, 4vw, 40px); font-weight: 700; margin: 0 0 12px; color: #fff;">{{ $agent['name'] }}</h1>
            <p style="font-size: 16px; opacity: 0.95; margin: 0 0 24px; color: #FF621B; font-weight: 600;">{{ $agent['niche'] }}</p>
            <p style="font-size: 17px; line-height: 1.6; opacity: 0.95; margin: 0 0 28px;">{{ $agent['short_description'] }}</p>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
                <a href="{{ route('contact') }}?subject={{ urlencode('Request Demo - ' . $agent['name'] . ' AI Agent') }}" style="background: #FF621B; color: #fff; padding: 14px 28px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Demo</a>
                <a href="{{ route('ai-agents') }}" style="background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.8); padding: 12px 26px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">View All Agents</a>
            </div>
        </div>
    </section>

    {{-- Capabilities --}}
    <section style="padding: 64px 24px; background: #fff;">
        <div style="max-width: 1000px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 28px; margin-bottom: 32px; color: #1F3B8D;">What {{ $agent['name'] }} can do</h2>
            <ul style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 16px; list-style: none; padding: 0; margin: 0;">
                @foreach($agent['capabilities'] as $cap)
                <li style="display: flex; align-items: flex-start; gap: 12px; background: #f8f9fa; padding: 16px 20px; border-radius: 10px; border: 1px solid #e5e7eb;">
                    <i class="fas fa-check-circle" style="color: #FF621B; margin-top: 2px; flex-shrink: 0;"></i>
                    <span style="color: #374151; font-size: 15px; line-height: 1.4;">{{ $cap }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Channels --}}
    <section style="padding: 48px 24px; background: #f8f9fa;">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; margin-bottom: 20px; color: #1F3B8D;">Available on</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center;">
                @foreach($agent['channels'] as $channel)
                <span style="background: #fff; color: #1F3B8D; padding: 12px 24px; border-radius: 8px; font-weight: 600; border: 1px solid #e5e7eb;">{{ $channel }}</span>
                @endforeach
            </div>
            <p style="margin-top: 20px; color: #6b7280; font-size: 14px;">Deploy {{ $agent['name'] }} on WhatsApp, your website chat, or via API. We tailor the setup to your workflows.</p>
        </div>
    </section>

    {{-- CTA --}}
    <section style="padding: 64px 24px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 600px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 26px; margin-bottom: 12px;">Ready to deploy {{ $agent['name'] }}?</h2>
            <p style="font-size: 16px; margin-bottom: 24px; opacity: 0.95;">Get a demo or a custom quote for your {{ $agent['niche'] }} business.</p>
            <a href="{{ route('contact') }}?subject={{ urlencode('Demo - ' . $agent['name']) }}" style="background: #fff; color: #FF621B; padding: 16px 36px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us</a>
        </div>
    </section>
</div>
@endsection
