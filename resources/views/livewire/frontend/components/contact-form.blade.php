<div class="contact-form-page">
    <style>
        .contact-form-page .contact-form-wrapper {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .contact-form-page .contact-form h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 24px;
        }
        .contact-form-page .form-group {
            margin-bottom: 20px;
        }
        .contact-form-page .form-group label {
            display: block;
            color: #374151;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .contact-form-page .form-group input,
        .contact-form-page .form-group textarea,
        .contact-form-page .form-group select {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        .contact-form-page .form-group input:focus,
        .contact-form-page .form-group textarea:focus,
        .contact-form-page .form-group select:focus {
            outline: none;
            border-color: #1F3B8D;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(31, 59, 141, 0.1);
        }
        .contact-form-page .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        .contact-form-page .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        @media (max-width: 600px) {
            .contact-form-page .form-row { grid-template-columns: 1fr; }
        }
        .contact-form-page .submit-btn {
            width: 100%;
            padding: 16px 32px;
            background: #FF621B;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .contact-form-page .submit-btn:hover:not(:disabled) {
            background: #e55516;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 98, 27, 0.4);
        }
        .contact-form-page .submit-btn:disabled { opacity: 0.7; cursor: not-allowed; }
        .contact-form-page .alert {
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 15px;
        }
        .contact-form-page .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        .contact-form-page .field-error { color: #dc2626; font-size: 13px; margin-top: 5px; }
        .contact-form-page .form-group.has-error input,
        .contact-form-page .form-group.has-error textarea,
        .contact-form-page .form-group.has-error select { border-color: #dc2626; }
        .contact-form-page .success-message { text-align: center; padding: 40px 20px; }
        .contact-form-page .success-message i { font-size: 48px; color: #10b981; margin-bottom: 16px; }
        .contact-form-page .success-message h3 { color: #1F3B8D; font-family: 'Roboto Slab', serif; font-size: 22px; margin-bottom: 8px; }
        .contact-form-page .success-message p { color: #6b7280; margin-bottom: 20px; }
        .contact-form-page .reset-btn {
            background: #1F3B8D;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }
        .contact-form-page .reset-btn:hover { background: #15306e; }
        .contact-form-page .submit-btn .spinner {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid #fff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: cf-spin 0.8s linear infinite;
            margin-right: 8px;
            vertical-align: middle;
        }
        @keyframes cf-spin { to { transform: rotate(360deg); } }
    </style>

    <div class="contact-form-wrapper">
        @if($submitted)
            <div class="success-message">
                <i class="fas fa-check-circle"></i>
                <h3>Message sent successfully</h3>
                <p>Thank you for contacting us. We'll get back to you within 24 hours.</p>
                <button type="button" wire:click="resetForm" class="reset-btn">Send another message</button>
            </div>
        @else
            <form wire:submit.prevent="submit" class="contact-form">
                <h3>Send us a message</h3>
                @if($error)
                    <div class="alert alert-error">{{ $error }}</div>
                @endif
                <div class="form-row">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="contact-name">Full name *</label>
                        <input wire:model="name" type="text" id="contact-name" placeholder="John Doe">
                        @error('name') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group @error('email') has-error @enderror">
                        <label for="contact-email">Email address *</label>
                        <input wire:model="email" type="email" id="contact-email" placeholder="john@company.com">
                        @error('email') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group @error('phone') has-error @enderror">
                        <label for="contact-phone">Phone number</label>
                        <input wire:model="phone" type="tel" id="contact-phone" placeholder="+255 XXX XXX XXX">
                        @error('phone') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group @error('company') has-error @enderror">
                        <label for="contact-company">Company name</label>
                        <input wire:model="company" type="text" id="contact-company" placeholder="Company Ltd">
                        @error('company') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group @error('interest') has-error @enderror">
                    <label for="contact-interest">Area of interest</label>
                    <select wire:model="interest" id="contact-interest">
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
                            <option value="API Gateway Service">API Gateway Service</option>
                            <option value="SMS Service">SMS Service</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option value="Partnership Inquiry">Partnership Inquiry</option>
                            <option value="Invest in Tanzania">Invest in Tanzania</option>
                            <option value="Financial Inclusion">Financial Inclusion</option>
                            <option value="General Inquiry">General Inquiry</option>
                        </optgroup>
                    </select>
                    @error('interest') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-group @error('message') has-error @enderror">
                    <label for="contact-message">Your message *</label>
                    <textarea wire:model="message" id="contact-message" placeholder="Tell us about your project or inquiry..."></textarea>
                    @error('message') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <button type="submit" class="submit-btn" wire:loading.attr="disabled">
                    <span wire:loading wire:target="submit" class="spinner"></span>
                    <span wire:loading.remove wire:target="submit">Send message</span>
                    <span wire:loading wire:target="submit">Sending...</span>
                </button>
            </form>
        @endif
    </div>
</div>
