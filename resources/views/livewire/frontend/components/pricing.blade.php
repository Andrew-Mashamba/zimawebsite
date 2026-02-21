<div>
    <style>
        .engagement-section {
            padding: 80px 40px;
            background: #f8f9fa;
        }

        .engagement-container {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
        }

        .engagement-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .engagement-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .engagement-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 38px;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .engagement-subtitle {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .engagement-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            width: 100%;
        }

        .engagement-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 45px 35px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            flex: 1;
        }

        .engagement-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(31, 59, 141, 0.12);
        }

        .engagement-card.featured {
            border-color: #FF621B;
        }

        .engagement-card.featured::before {
            content: 'Most Popular';
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: #FF621B;
            color: #ffffff;
            padding: 6px 20px;
            border-radius: 20px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .engagement-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .engagement-card.featured .engagement-icon {
            background: linear-gradient(135deg, #FF621B, #ff8247);
        }

        .engagement-icon i {
            font-size: 32px;
            color: #ffffff;
        }

        .engagement-card h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .engagement-card p.desc {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .engagement-features {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
            text-align: left;
        }

        .engagement-features li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            color: #2c3e50;
        }

        .engagement-features li i {
            color: #FF621B;
            margin-right: 10px;
            margin-top: 3px;
        }

        .engagement-btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .engagement-btn.primary {
            background: #FF621B;
            color: #ffffff;
        }

        .engagement-btn.primary:hover {
            background: #e55516;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 98, 27, 0.3);
        }

        .engagement-btn.secondary {
            background: transparent;
            color: #1F3B8D;
            border: 2px solid #1F3B8D;
        }

        .engagement-btn.secondary:hover {
            background: #1F3B8D;
            color: #ffffff;
            transform: translateY(-2px);
        }

        @media (max-width: 992px) {
            .engagement-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
        }

        @media (max-width: 576px) {
            .engagement-section {
                padding: 60px 20px;
            }
            .engagement-title {
                font-size: 28px;
            }
        }
    </style>

    <section class="engagement-section">
        <div class="engagement-container">
            <div class="engagement-header">
                <p class="engagement-label">How We Work</p>
                <h2 class="engagement-title">Engagement Models</h2>
                <p class="engagement-subtitle">
                    Flexible partnership options designed to meet your organization's unique needs and timeline.
                </p>
            </div>

            <div class="engagement-grid">
                <!-- Project-Based -->
                <div class="engagement-card">
                    <div class="engagement-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Project-Based</h3>
                    <p class="desc">Fixed-scope implementations with clear deliverables and timelines.</p>
                    <ul class="engagement-features">
                        <li><i class="fas fa-check"></i> Defined scope and requirements</li>
                        <li><i class="fas fa-check"></i> Fixed project timeline</li>
                        <li><i class="fas fa-check"></i> Milestone-based payments</li>
                        <li><i class="fas fa-check"></i> Full documentation</li>
                        <li><i class="fas fa-check"></i> Post-launch support included</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="engagement-btn secondary">Get Quote</a>
                </div>

                <!-- Dedicated Team -->
                <div class="engagement-card featured">
                    <div class="engagement-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Dedicated Team</h3>
                    <p class="desc">A full team of experts working exclusively on your projects.</p>
                    <ul class="engagement-features">
                        <li><i class="fas fa-check"></i> Dedicated developers & analysts</li>
                        <li><i class="fas fa-check"></i> Flexible resource scaling</li>
                        <li><i class="fas fa-check"></i> Direct team communication</li>
                        <li><i class="fas fa-check"></i> Agile development process</li>
                        <li><i class="fas fa-check"></i> Monthly retainer pricing</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="engagement-btn primary">Start Partnership</a>
                </div>

                <!-- Support & Maintenance -->
                <div class="engagement-card">
                    <div class="engagement-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Support & Maintenance</h3>
                    <p class="desc">Ongoing technical support and system maintenance services.</p>
                    <ul class="engagement-features">
                        <li><i class="fas fa-check"></i> 24/7 system monitoring</li>
                        <li><i class="fas fa-check"></i> Priority issue resolution</li>
                        <li><i class="fas fa-check"></i> Regular security updates</li>
                        <li><i class="fas fa-check"></i> Performance optimization</li>
                        <li><i class="fas fa-check"></i> SLA-backed response times</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="engagement-btn secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</div>
