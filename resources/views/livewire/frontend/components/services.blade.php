<div>
    <style>
        /* Contact Section - ZIMA Brand */
        .contact-section {
            background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 50%, #3559af 100%);
            padding: 80px 40px;
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 98, 27, 0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .contact-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .contact-title {
            color: #ffffff;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .contact-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        /* Contact Form */
        .contact-form-wrapper {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .contact-form h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #2c3e50;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #1F3B8D;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(31, 59, 141, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px 32px;
            background: #FF621B;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 700;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background: #e55516;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 98, 27, 0.4);
        }

        /* Contact Info */
        .contact-info-wrapper {
            color: #ffffff;
        }

        .contact-info-wrapper h3 {
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .info-icon i {
            font-size: 20px;
            color: #FF621B;
        }

        .info-content h4 {
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .info-content p,
        .info-content a {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 1.6;
        }

        .info-content a:hover {
            color: #FF621B;
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .social-link {
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-link:hover {
            background: #FF621B;
            transform: translateY(-3px);
        }

        .social-link i {
            font-size: 18px;
            color: #ffffff;
        }

        /* Business Hours */
        .business-hours {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
        }

        .business-hours h4 {
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 15px;
            color: #FF621B;
        }

        .hours-item {
            display: flex;
            justify-content: space-between;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.8);
        }

        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .contact-title {
                font-size: 32px;
            }
        }

        /* Form States */
        .form-group.has-error input,
        .form-group.has-error textarea,
        .form-group.has-error select {
            border-color: #dc2626;
        }

        .field-error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .submit-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .submit-btn .spinner {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 0.8s linear infinite;
            margin-right: 8px;
            vertical-align: middle;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .alert {
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .success-message {
            text-align: center;
            padding: 40px 20px;
        }

        .success-message i {
            font-size: 60px;
            color: #10b981;
            margin-bottom: 20px;
        }

        .success-message h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .success-message p {
            color: #6B7280;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .reset-btn {
            background: #1F3B8D;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .reset-btn:hover {
            background: #15306e;
        }
    </style>

    <section id="contact" class="contact-section" aria-label="Contact ZIMA Solutions">
        <div class="contact-container">
            <!-- Header -->
            <div class="contact-header">
                <p class="contact-label">Get In Touch</p>
                <h2 class="contact-title">Let's Build Your Future Together</h2>
                <p class="contact-subtitle">
                    Ready to transform your operations with intelligent digital solutions? Reach out to discuss how we can help achieve your goals.
                </p>
            </div>

            <!-- Contact Grid -->
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    @if($submitted)
                        <div class="success-message">
                            <i class="fas fa-check-circle"></i>
                            <h3>Message Sent Successfully!</h3>
                            <p>Thank you for contacting us. We'll get back to you within 24 hours.</p>
                            <button type="button" wire:click="resetForm" class="reset-btn">Send Another Message</button>
                        </div>
                    @else
                        <form wire:submit.prevent="submit" class="contact-form">
                            <h3>Send Us a Message</h3>

                            @if($error)
                                <div class="alert alert-error">
                                    {{ $error }}
                                </div>
                            @endif

                            <div class="form-row">
                                <div class="form-group @error('name') has-error @enderror">
                                    <label for="name">Full Name *</label>
                                    <input wire:model="name" type="text" id="name" placeholder="John Doe">
                                    @error('name') <p class="field-error">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group @error('email') has-error @enderror">
                                    <label for="email">Email Address *</label>
                                    <input wire:model="email" type="email" id="email" placeholder="john@company.com">
                                    @error('email') <p class="field-error">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('phone') has-error @enderror">
                                    <label for="phone">Phone Number</label>
                                    <input wire:model="phone" type="tel" id="phone" placeholder="+255 XXX XXX XXX">
                                    @error('phone') <p class="field-error">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group @error('company') has-error @enderror">
                                    <label for="company">Company Name</label>
                                    <input wire:model="company" type="text" id="company" placeholder="Company Ltd">
                                    @error('company') <p class="field-error">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group @error('interest') has-error @enderror">
                                <label for="interest">Area of Interest</label>
                                <select wire:model="interest" id="interest">
                                    <option value="">Select a solution...</option>
                                    <optgroup label="Bank of Tanzania Integration">
                                        <option value="RTGS Integration">RTGS Integration</option>
                                        <option value="TIPS Integration">TIPS Integration</option>
                                        <option value="GePG Gateway">GePG Gateway</option>
                                        <option value="BOT RTSIS Reporting">BOT RTSIS Reporting</option>
                                    </optgroup>
                                    <optgroup label="Financial Services">
                                        <option value="Loan Management System">Loan Management System</option>
                                        <option value="Microfinance System">Microfinance System</option>
                                        <option value="SACCOS Management">SACCOS Management</option>
                                        <option value="VICOBA Integration">VICOBA Integration</option>
                                        <option value="Salary Advance System">Salary Advance System</option>
                                        <option value="Vehicle Financing">Vehicle Financing</option>
                                    </optgroup>
                                    <optgroup label="Payment Solutions">
                                        <option value="API Gateway Service">API Gateway Service</option>
                                        <option value="TanQR Merchant System">TanQR Merchant System</option>
                                        <option value="Collection Solution">Collection Solution (Pay by Link)</option>
                                        <option value="Channels Reconciliation">Channels Reconciliation</option>
                                    </optgroup>
                                    <optgroup label="Enterprise Systems">
                                        <option value="HR Management System">HR Management System</option>
                                        <option value="School Management System">School Management System</option>
                                        <option value="Healthcare/Zahanati System">Healthcare/Zahanati System</option>
                                        <option value="Business ERP">Business Management ERP</option>
                                        <option value="Inventory Management">Inventory Management</option>
                                    </optgroup>
                                    <optgroup label="Other">
                                        <option value="Custom Development">Custom Development</option>
                                        <option value="Zona AI Assistant">Zona AI Assistant</option>
                                        <option value="Partnership Inquiry">Partnership Inquiry</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                    </optgroup>
                                </select>
                                @error('interest') <p class="field-error">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group @error('message') has-error @enderror">
                                <label for="message">Your Message *</label>
                                <textarea wire:model="message" id="message" placeholder="Tell us about your project or inquiry..."></textarea>
                                @error('message') <p class="field-error">{{ $message }}</p> @enderror
                            </div>
                            <button type="submit" class="submit-btn" wire:loading.attr="disabled">
                                <span wire:loading wire:target="submit" class="spinner"></span>
                                <span wire:loading.remove wire:target="submit">Send Message</span>
                                <span wire:loading wire:target="submit">Sending...</span>
                            </button>
                        </form>
                    @endif
                </div>

                <!-- Contact Info -->
                <div class="contact-info-wrapper">
                    <h3>Contact Information</h3>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Head Office</h4>
                            <p>Makongo, Near Ardhi University<br>Kinondoni, Dar es Salaam, Tanzania</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Phone</h4>
                            <a href="tel:+255692410353">+255 69 241 0353</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email</h4>
                            <a href="mailto:info@zima.co.tz">info@zima.co.tz</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div class="info-content">
                            <h4>Tax Identification</h4>
                            <p>TIN: 181-314-605</p>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <nav class="social-links" aria-label="Social media links">
                        <a href="https://www.linkedin.com/company/zima-solutions" class="social-link" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/zimasolutions" class="social-link" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on Facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/zimasolutions" class="social-link" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on Twitter" aria-label="Twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/zimasolutions" class="social-link" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on Instagram" aria-label="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </nav>

                    <!-- Business Hours -->
                    <div class="business-hours">
                        <h4>Business Hours</h4>
                        <div class="hours-item">
                            <span>Monday - Friday</span>
                            <span>8:00 AM - 5:00 PM</span>
                        </div>
                        <div class="hours-item">
                            <span>Saturday</span>
                            <span>9:00 AM - 1:00 PM</span>
                        </div>
                        <div class="hours-item">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
