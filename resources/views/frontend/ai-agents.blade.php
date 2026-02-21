@extends('layouts.web')

@section('title', 'AI Agents – Industry Solutions | WhatsApp, Web Chat & API | ZIMA Solutions')
@section('title', 'AI Agents – 36+ WhatsApp, Web Chat & API Bots | ZIMA Solutions')
@section('meta_title', 'AI Agents – 36+ WhatsApp, Web Chat & API Bots | ZIMA Solutions')
@section('meta_description', '36 ZIMA AI agents for healthcare, hospitality, retail, education, real estate, and more. Automate bookings, payments, reminders, and support on WhatsApp, web chat, and API. Tanzania.')
@section('meta_keywords', 'AI agents, WhatsApp business automation, web chat bot, conversational AI API, customer service automation, booking bot, Tanzania fintech, ZIMA Solutions')
@section('og_title', 'AI Agents – 36+ WhatsApp, Web Chat & API | ZIMA Solutions')
@section('og_description', 'AI agents for healthcare, hospitality, retail, education, real estate. Bookings, payments, support on WhatsApp, web chat, API.')
@section('twitter_title', 'AI Agents – 36+ Bots | ZIMA Solutions')
@section('twitter_description', 'AI agents for healthcare, hospitality, retail, education. WhatsApp, web chat, API. Tanzania.')
@section('og_title', 'AI Agents – Industry Solutions | ZIMA Solutions')
@section('og_description', 'AI Agents that work on WhatsApp, web chat, and API. Transform conversations into automated service journeys—bookings, payments, reminders, and real-time support.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "AI Agents – Industry Solutions | ZIMA Solutions Limited",
    "description": "Conversational AI agents for WhatsApp, web chat, and API across healthcare, hospitality, retail, education, and more.",
    "url": "{{ url('/ai-agents') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Products", "item": "{{ url('/service') }}"},
            {"@type": "ListItem", "position": 3, "name": "AI Agents", "item": "{{ url('/ai-agents') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
<section class="ai-agents-hero" aria-label="AI Agents Introduction">
    <div class="ai-agents-container">
        <nav aria-label="Breadcrumb" style="margin-bottom: 16px;">
            <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 8px; font-size: 14px; opacity: 0.9;">
                <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                <li style="color: #fff;">/</li>
                <li><a href="{{ route('our-products') }}" style="color: #fff; text-decoration: none;">Products</a></li>
                <li style="color: #fff;">/</li>
                <li style="color: #fff;">AI Agents</li>
            </ol>
        </nav>
        <h1 class="ai-agents-hero-title">AI Agents – Industry Solutions</h1>
        <p class="ai-agents-hero-lead">
            Our AI Agents transform everyday conversations into fully automated service journeys — from bookings and payments to reminders, tracking, and real-time support.
        </p>
        <p class="ai-agents-channels">
            <strong>Works where your customers are:</strong> WhatsApp, web chat widgets on your site, and API for your own apps and systems.
        </p>
        <div class="ai-agents-cta-wrap">
            <a href="{{ route('contact') }}" class="ai-agents-cta-primary">Get Started</a>
            <a href="{{ route('our-products') }}" class="ai-agents-cta-secondary">View All Products</a>
        </div>
    </div>
</section>

<section class="ai-agents-industries" aria-label="Industry solutions">
    <div class="ai-agents-container">
        @php
            $agents = config('ai_agents', []);
            $byIndustry = [];
            foreach ($agents as $slug => $agent) {
                $byIndustry[$agent['industry']][$slug] = $agent;
            }
        @endphp
        @foreach($byIndustry as $industry => $industryAgents)
        <h2 class="ai-agents-section-title">{{ $industry }}</h2>
        <div class="ai-agents-grid">
            @foreach($industryAgents as $slug => $agent)
            <a href="{{ route('ai-agents.show', $slug) }}" class="ai-agent-card ai-agent-card-link" style="text-decoration: none; color: inherit;">
                <h3 class="ai-agent-name">{{ $agent['name'] }}</h3>
                <p class="ai-agent-niche">{{ $agent['niche'] }}</p>
                <p class="ai-agent-desc">{{ $agent['short_description'] }}</p>
                <span class="ai-agent-learn-more">Learn more →</span>
            </a>
            @endforeach
        </div>
        @endforeach
    </div>
</section>

<section class="ai-agents-cta-section" aria-label="Call to action">
    <div class="ai-agents-container">
        <h2 class="ai-agents-cta-title">Ready to automate your customer conversations?</h2>
        <p class="ai-agents-cta-text">Deploy an AI Agent on WhatsApp, your website, or via API. We tailor the solution to your industry and workflows.</p>
        <a href="{{ route('contact') }}" class="ai-agents-cta-primary">Contact Us</a>
    </div>
</section>

@push('styles')
<style>
.ai-agents-container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ai-agents-hero {
    background: linear-gradient(135deg, var(--color-primary, #1F3B8D) 0%, #2a4a9e 100%);
    color: #fff;
    padding: 64px 24px 56px;
    text-align: center;
}
.ai-agents-hero-title {
    font-family: var(--font-heading, 'Roboto Slab', serif);
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    font-weight: 700;
    margin: 0 0 16px;
    color: #fff;
}
.ai-agents-hero-lead {
    font-size: 1.125rem;
    line-height: 1.6;
    max-width: 640px;
    margin: 0 auto 12px;
    opacity: 0.95;
    color: #fff;
}
.ai-agents-channels {
    font-size: 0.95rem;
    opacity: 0.9;
    max-width: 560px;
    margin: 0 auto 28px;
    color: #fff;
}
.ai-agents-channels strong { color: #FF621B; }
.ai-agents-cta-wrap { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; }
.ai-agents-cta-primary {
    display: inline-block;
    padding: 14px 28px;
    background: #FF621B;
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.2s, transform 0.2s;
}
.ai-agents-cta-primary:hover { background: #e55514; color: #fff; transform: translateY(-1px); }
.ai-agents-cta-secondary {
    display: inline-block;
    padding: 14px 28px;
    background: transparent;
    color: #fff;
    border: 2px solid rgba(255,255,255,0.7);
    font-weight: 600;
    text-decoration: none;
    border-radius: 8px;
    transition: border-color 0.2s, color 0.2s;
}
.ai-agents-cta-secondary:hover { border-color: #fff; color: #fff; }
.ai-agents-industries { padding: 48px 0 56px; }
.ai-agents-section-title {
    font-family: var(--font-heading, 'Roboto Slab', serif);
    font-size: 1.5rem;
    color: var(--color-primary, #1F3B8D);
    margin: 40px 0 20px;
    padding-bottom: 8px;
    border-bottom: 2px solid rgba(31, 59, 141, 0.2);
}
.ai-agents-section-title:first-of-type { margin-top: 0; }
.ai-agents-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}
.ai-agent-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 20px;
    transition: box-shadow 0.2s, border-color 0.2s;
}
.ai-agent-card:hover {
    box-shadow: 0 8px 24px rgba(31, 59, 141, 0.1);
    border-color: rgba(31, 59, 141, 0.3);
}
.ai-agent-card-link:hover .ai-agent-learn-more { color: #FF621B; }
.ai-agent-learn-more {
    display: inline-block;
    margin-top: 12px;
    font-size: 14px;
    font-weight: 600;
    color: #1F3B8D;
    transition: color 0.2s;
}
.ai-agent-name {
    font-family: var(--font-heading, 'Roboto Slab', serif);
    font-size: 1.15rem;
    color: var(--color-primary, #1F3B8D);
    margin: 0 0 4px;
}
.ai-agent-niche {
    font-size: 0.8rem;
    color: var(--color-gray, #6B7280);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin: 0 0 10px;
}
.ai-agent-desc {
    font-size: 0.9rem;
    line-height: 1.5;
    color: #374151;
    margin: 0;
}
.ai-agents-cta-section {
    background: #f8f9fa;
    padding: 56px 24px;
    text-align: center;
}
.ai-agents-cta-title {
    font-family: var(--font-heading, 'Roboto Slab', serif);
    font-size: 1.5rem;
    color: var(--color-dark, #2c3e50);
    margin: 0 0 12px;
}
.ai-agents-cta-text {
    max-width: 520px;
    margin: 0 auto 24px;
    color: #4b5563;
}
@media (max-width: 640px) {
    .ai-agents-hero { padding: 40px 16px 40px; }
    .ai-agents-grid { grid-template-columns: 1fr; }
}
</style>
@endpush
@endsection
