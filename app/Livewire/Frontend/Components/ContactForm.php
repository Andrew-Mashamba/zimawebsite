<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Validate;

/**
 * Contact Form Component with Military-Grade Security
 *
 * Features:
 * - Honeypot fields to trap bots
 * - Timestamp validation (too-fast submission detection)
 * - Rate limiting per IP
 * - Suspicious content detection
 * - Input sanitization
 * - Security event logging
 */
class ContactForm extends Component
{
    #[Validate('required|min:2|max:100')]
    public string $name = '';

    #[Validate('required|email|max:100')]
    public string $email = '';

    #[Validate('nullable|max:20')]
    public ?string $phone = '';

    #[Validate('nullable|max:100')]
    public ?string $company = '';

    #[Validate('nullable|max:50')]
    public ?string $interest = '';

    #[Validate('required|min:10|max:2000')]
    public string $message = '';

    // Honeypot fields - must remain empty (bots will fill these)
    public string $website = '';
    public string $fax_number = '';

    // Timestamp for bot detection (forms submitted too quickly are suspicious)
    public int $form_loaded_at = 0;

    public bool $submitted = false;
    public string $error = '';

    public function mount(): void
    {
        // Record when form was loaded
        $this->form_loaded_at = time();

        // Handle pre-filled subject from query string
        $subject = request()->query('subject');
        if ($subject !== null && $subject !== '') {
            $decoded = strip_tags(urldecode($subject));
            $this->message = "Re: {$decoded}\n\n";
        }
    }

    public function submit()
    {
        $this->error = '';
        $ip = request()->ip();
        $userAgent = request()->userAgent() ?? 'unknown';

        // ========================================
        // HONEYPOT CHECK
        // If honeypot fields are filled, it's a bot
        // ========================================
        if (!empty($this->website) || !empty($this->fax_number)) {
            Log::channel('security')->warning('Contact form honeypot triggered', [
                'ip' => $ip,
                'user_agent' => $userAgent,
                'honeypot_website' => substr($this->website, 0, 50),
                'honeypot_fax' => substr($this->fax_number, 0, 50),
            ]);

            // Fake success to confuse bots
            $this->fakeSuccess();
            return;
        }

        // ========================================
        // TIMESTAMP VALIDATION
        // Forms submitted in under 3 seconds are suspicious
        // ========================================
        $timeElapsed = time() - $this->form_loaded_at;
        if ($timeElapsed < 3) {
            Log::channel('security')->warning('Contact form submitted too quickly', [
                'ip' => $ip,
                'time_elapsed' => $timeElapsed,
                'user_agent' => $userAgent,
            ]);

            // Fake success to confuse bots
            $this->fakeSuccess();
            return;
        }

        // ========================================
        // RATE LIMITING
        // 5 submissions per hour per IP
        // ========================================
        $rateLimitKey = 'contact-form:' . $ip;
        if (RateLimiter::tooManyAttempts($rateLimitKey, 5)) {
            $this->error = 'Too many submissions. Please try again in an hour.';
            Log::channel('security')->warning('Contact form rate limit exceeded', [
                'ip' => $ip,
                'user_agent' => $userAgent,
            ]);
            return;
        }

        // ========================================
        // VALIDATION
        // ========================================
        $this->validate();

        // ========================================
        // SUSPICIOUS CONTENT CHECK
        // Block SQL injection, XSS, and spam patterns
        // ========================================
        $contentToCheck = $this->name . ' ' . $this->email . ' ' . $this->message;
        if ($this->containsSuspiciousContent($contentToCheck)) {
            Log::channel('security')->warning('Suspicious content in contact form', [
                'ip' => $ip,
                'email' => $this->email,
                'message_preview' => substr($this->message, 0, 100),
                'user_agent' => $userAgent,
            ]);
            $this->error = 'Your message contains content that cannot be processed.';
            return;
        }

        // ========================================
        // SEND EMAIL
        // ========================================
        try {
            // Hit rate limiter
            RateLimiter::hit($rateLimitKey, 3600); // 1 hour decay

            $recipientEmail = config('mail.contact_to', 'info@zima.co.tz');

            // Sanitize all inputs before sending
            Mail::to($recipientEmail)->send(new ContactFormMail(
                name: $this->sanitize($this->name),
                email: filter_var($this->email, FILTER_SANITIZE_EMAIL),
                phone: $this->phone ? $this->sanitize($this->phone) : null,
                company: $this->company ? $this->sanitize($this->company) : null,
                interest: $this->interest ? $this->sanitize($this->interest) : null,
                messageContent: $this->sanitize($this->message)
            ));

            // Log successful submission
            Log::info('Contact form submitted successfully', [
                'from' => $this->email,
                'ip' => $ip,
                'interest' => $this->interest,
            ]);

            $this->reset(['name', 'email', 'phone', 'company', 'interest', 'message', 'website', 'fax_number']);
            $this->submitted = true;
            $this->dispatch('contact-form-submitted');

        } catch (\Exception $e) {
            $this->error = 'Sorry, there was an error sending your message. Please try again or contact us directly at info@zima.co.tz';
            Log::error('Contact form error: ' . $e->getMessage(), [
                'email' => $this->email,
                'ip' => $ip,
            ]);
        }
    }

    /**
     * Fake success response to confuse bots
     */
    private function fakeSuccess(): void
    {
        // Reset form and show fake success
        $this->reset(['name', 'email', 'phone', 'company', 'interest', 'message', 'website', 'fax_number']);
        $this->submitted = true;
        // Don't dispatch event for fake submissions
    }

    /**
     * Check for suspicious/malicious content patterns
     */
    private function containsSuspiciousContent(string $content): bool
    {
        $suspiciousPatterns = [
            // SQL injection patterns
            '/union\s+(all\s+)?select/i',
            '/insert\s+into/i',
            '/update\s+\w+\s+set/i',
            '/delete\s+from/i',
            '/drop\s+(table|database)/i',
            '/exec\s*\(/i',
            '/xp_cmdshell/i',
            "/'.*or.*'.*='/i",
            '/\b(and|or)\s+\d+=\d+/i',

            // XSS patterns
            '/<script[\s\S]*?>[\s\S]*?<\/script>/i',
            '/javascript\s*:/i',
            '/on(load|error|click|mouse|focus|blur)\s*=/i',
            '/<iframe/i',
            '/<object/i',
            '/<embed/i',
            '/<link/i',
            '/<meta/i',

            // PHP injection
            '/<\?php/i',
            '/<\?=/i',
            '/eval\s*\(/i',
            '/base64_decode\s*\(/i',
            '/file_get_contents\s*\(/i',
            '/shell_exec\s*\(/i',
            '/system\s*\(/i',
            '/passthru\s*\(/i',
            '/exec\s*\(/i',
            '/popen\s*\(/i',
            '/proc_open\s*\(/i',

            // File inclusion
            '/\.\.\//i',
            '/\/etc\/passwd/i',
            '/\/etc\/shadow/i',

            // Common spam patterns
            '/\[url=/i',
            '/\[link=/i',
            '/click\s+here\s+to\s+(buy|order|purchase)/i',
            '/viagra|cialis|casino|lottery|winner|bitcoin.*investment/i',
        ];

        foreach ($suspiciousPatterns as $pattern) {
            if (preg_match($pattern, $content)) {
                return true;
            }
        }

        // Check for excessive URLs (spam indicator)
        $urlCount = preg_match_all('/https?:\/\//i', $content);
        if ($urlCount > 3) {
            return true;
        }

        return false;
    }

    /**
     * Sanitize input string
     */
    private function sanitize(string $input): string
    {
        // Remove null bytes and control characters
        $input = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', '', $input);

        // Strip HTML tags
        $input = strip_tags($input);

        // Trim whitespace
        $input = trim($input);

        return $input;
    }

    public function resetForm()
    {
        $this->submitted = false;
        $this->error = '';
        $this->form_loaded_at = time();
    }

    public function render()
    {
        return view('livewire.frontend.components.contact-form');
    }
}
