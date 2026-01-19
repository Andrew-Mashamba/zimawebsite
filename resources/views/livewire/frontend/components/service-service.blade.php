<div>
    <style>
        .features-section {
            padding: 80px 40px;
            background: #ffffff;
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .features-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .features-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .features-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 38px;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .features-subtitle {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .feature-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 35px 30px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .feature-card:hover {
            background: #ffffff;
            border-color: #e5e7eb;
            box-shadow: 0 10px 30px rgba(31, 59, 141, 0.1);
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .feature-icon i {
            font-size: 30px;
            color: #ffffff;
        }

        .feature-card h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 20px;
            margin-bottom: 12px;
        }

        .feature-card p {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }

        @media (max-width: 992px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .features-grid {
                grid-template-columns: 1fr;
            }
            .features-section {
                padding: 60px 20px;
            }
            .features-title {
                font-size: 28px;
            }
        }
    </style>

    <section class="features-section">
        <div class="features-container">
            <div class="features-header">
                <p class="features-label">Why Choose Us</p>
                <h2 class="features-title">Comprehensive Solution Features</h2>
                <p class="features-subtitle">
                    Our enterprise solutions are built with cutting-edge technology and industry best practices.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Bank-Grade Security</h3>
                    <p>End-to-end encryption, secure APIs, and compliance with BOT security standards for all transactions.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Real-Time Processing</h3>
                    <p>Instant transaction processing with sub-second response times for critical payment operations.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Scalable Architecture</h3>
                    <p>Cloud-ready infrastructure designed to handle growing transaction volumes without performance degradation.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>Easy Integration</h3>
                    <p>RESTful APIs and comprehensive documentation for seamless integration with existing core banking systems.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Dedicated technical support team available around the clock to ensure uninterrupted operations.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Built-in compliance with Bank of Tanzania regulations, KYC/AML requirements, and industry standards.</p>
                </div>
            </div>
        </div>
    </section>
</div>
