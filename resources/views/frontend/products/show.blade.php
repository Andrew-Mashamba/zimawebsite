@extends('layouts.web')

@section('title', $product['title'] . ' | ZIMA Solutions')
@section('meta_title', $product['title'] . ' – Tanzania | ZIMA Solutions')
@section('meta_description', $product['meta_description'] ?? $product['short_description'])
@section('meta_keywords', $product['meta_keywords'] ?? '')
@section('og_title', $product['title'] . ' | ZIMA Solutions')
@section('og_description', $product['short_description'])
@section('twitter_title', $product['title'] . ' | ZIMA Solutions')
@section('twitter_description', $product['short_description'])

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": {!! json_encode($product['title']) !!},
    "description": {!! json_encode($product['short_description']) !!},
    "brand": { "@type": "Brand", "name": "ZIMA Solutions" },
    "url": "{{ url()->current() }}",
    "image": "{{ asset('/vf/zima.png') }}",
    "areaServed": { "@type": "Country", "name": "Tanzania" },
    "offers": { "@type": "Offer", "availability": "https://schema.org/InStock", "url": "{{ url()->current() }}" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": {!! json_encode($product['title'] . ' | ZIMA Solutions') !!},
    "description": {!! json_encode($product['meta_description'] ?? $product['short_description']) !!},
    "url": "{{ url()->current() }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Products", "item": "{{ url('/our-products') }}"},
            {"@type": "ListItem", "position": 3, "name": {!! json_encode($product['title']) !!}, "item": "{{ url()->current() }}"}
        ]
    }
}
</script>
@if(!empty($product['faqs']))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($product['faqs'] as $faq)
        {
            "@type": "Question",
            "name": {!! json_encode($faq['q']) !!},
            "acceptedAnswer": { "@type": "Answer", "text": {!! json_encode($faq['a']) !!} }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}
<div class="product-page-container" style="padding: 0;">
    {{-- Hero --}}
    <section class="product-hero" aria-label="Product overview" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 24px 80px; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; flex-wrap: wrap; gap: 8px; font-size: 14px; opacity: 0.9;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li style="color: rgba(255,255,255,0.8);">/</li>
                    <li><a href="{{ route('our-products') }}" style="color: #fff; text-decoration: none;">Products</a></li>
                    <li style="color: rgba(255,255,255,0.8);">/</li>
                    <li style="color: #fff;">{{ $product['title'] }}</li>
                </ol>
            </nav>
            <div style="width: 72px; height: 72px; background: rgba(255,255,255,0.15); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px;">
                <i class="fas fa-{{ $product['icon'] ?? 'cube' }}" style="font-size: 32px; color: #fff;"></i>
            </div>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: clamp(28px, 4vw, 44px); font-weight: 700; margin-bottom: 20px; line-height: 1.2; color: #fff;">{{ $product['title'] }}</h1>
            <p style="font-size: 18px; line-height: 1.65; opacity: 0.95; max-width: 700px; margin: 0 auto 32px;">{{ $product['short_description'] }}</p>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
                <a href="{{ route('contact') }}?subject={{ urlencode('Request Demo - ' . $product['title']) }}" style="background: #FF621B; color: #fff; padding: 16px 32px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Demo</a>
                <a href="{{ route('contact') }}?subject={{ urlencode('Get Quote - ' . $product['title']) }}" style="background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.8); padding: 14px 30px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Get Quote</a>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section aria-label="Product features" style="padding: 80px 24px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 32px; margin-bottom: 48px; color: #1F3B8D;">Features for the Tanzania market</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                @foreach($product['features'] as $feature)
                <article style="background: #f8f9fa; padding: 28px; border-radius: 12px; border: 1px solid #e5e7eb;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 12px; font-weight: 700;">{{ $feature['title'] }}</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0; font-size: 15px;">{{ $feature['description'] }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    @if(!empty($product['faqs']))
    {{-- FAQ --}}
    <section aria-label="Frequently asked questions" style="padding: 64px 24px; background: #f8f9fa;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 28px; margin-bottom: 32px; color: #1F3B8D;">Frequently asked questions</h2>
            <div style="display: flex; flex-direction: column; gap: 20px;">
                @foreach($product['faqs'] as $faq)
                <div style="background: #fff; padding: 20px 24px; border-radius: 10px; border: 1px solid #e5e7eb;">
                    <h3 style="color: #1F3B8D; font-size: 16px; margin-bottom: 10px; font-weight: 600;">{{ $faq['q'] }}</h3>
                    <p style="color: #4b5563; line-height: 1.65; margin: 0; font-size: 15px;">{{ $faq['a'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Explore more (internal linking for SEO) --}}
    <section aria-label="Explore more solutions" style="padding: 56px 24px; background: #fff; border-top: 1px solid #e5e7eb;">
        <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; margin-bottom: 24px; color: #1F3B8D;">Explore more</h2>
            <p style="color: #6b7280; margin-bottom: 20px; font-size: 15px;">View our full range of products and solutions.</p>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
                <a href="{{ route('our-products') }}" style="display: inline-block; padding: 12px 24px; background: #f0f4ff; color: #1F3B8D; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 15px;">View all products</a>
                <a href="{{ route('ai-agents') }}" style="display: inline-block; padding: 12px 24px; background: #f0f4ff; color: #1F3B8D; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 15px;">AI Agents</a>
                <a href="{{ route('our-services') }}" style="display: inline-block; padding: 12px 24px; background: #f0f4ff; color: #1F3B8D; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 15px;">Our services</a>
                <a href="{{ route('contact') }}" style="display: inline-block; padding: 12px 24px; background: #1F3B8D; color: #fff; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 15px;">Contact us</a>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section aria-label="Call to action" style="padding: 80px 24px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; margin-bottom: 16px;">Ready to get started?</h2>
            <p style="font-size: 17px; margin-bottom: 28px; opacity: 0.95;">Get in touch for a demo or a custom quote for {{ $product['title'] }}.</p>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
                <a href="{{ route('contact') }}?subject={{ urlencode('Schedule Demo - ' . $product['title']) }}" style="background: #fff; color: #FF621B; padding: 16px 36px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Schedule a Demo</a>
                <a href="{{ route('contact') }}" style="background: transparent; color: #fff; border: 2px solid #fff; padding: 14px 34px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us</a>
            </div>
        </div>
    </section>
</div>
@endsection
