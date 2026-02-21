<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .contact-list-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 24px 80px;
        }
        .contact-list-title {
            font-family: 'Roboto Slab', serif;
            font-size: 28px;
            font-weight: 700;
            color: #1F3B8D;
            margin-bottom: 40px;
            text-align: center;
        }
        .contact-info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }
        .contact-info-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 28px 24px;
            border-left: 4px solid #1F3B8D;
            transition: box-shadow 0.2s, border-left-color 0.2s;
        }
        .contact-info-card:hover {
            box-shadow: 0 8px 24px rgba(31, 59, 141, 0.1);
            border-left-color: #FF621B;
        }
        .contact-info-card .icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }
        .contact-info-card .icon i {
            font-size: 20px;
            color: #fff;
        }
        .contact-info-card h4 {
            font-family: 'Roboto Slab', serif;
            font-size: 16px;
            color: #1F3B8D;
            margin: 0 0 8px;
            font-weight: 700;
        }
        .contact-info-card p,
        .contact-info-card a {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            color: #374151;
            line-height: 1.6;
            margin: 0;
            text-decoration: none;
        }
        .contact-info-card a:hover {
            color: #FF621B;
        }
        @media (max-width: 640px) {
            .contact-list-wrap { padding: 40px 16px 60px; }
            .contact-list-title { font-size: 24px; }
        }
    </style>

    <div class="contact-list-wrap">
        <h2 class="contact-list-title">Contact Information</h2>
        <div class="contact-info-cards">
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                <h4>Office</h4>
                <p>Makongo, Near Ardhi University<br>Kinondoni, Dar es Salaam, Tanzania</p>
            </div>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>
                <h4>Phone</h4>
                <p><a href="tel:+255692410353">+255 69 241 0353</a></p>
            </div>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                <h4>Email</h4>
                <p><a href="mailto:info@zima.co.tz">info@zima.co.tz</a></p>
            </div>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-clock" aria-hidden="true"></i></div>
                <h4>Hours</h4>
                <p>Mon – Fri: 8:00 AM – 5:00 PM</p>
            </div>
        </div>
    </div>

    <livewire:frontend.components.contact-form />
</div>
