<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;

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

    public bool $submitted = false;
    public string $error = '';

    public function mount(): void
    {
        $subject = request()->query('subject');
        if ($subject !== null && $subject !== '') {
            $decoded = urldecode($subject);
            $this->message = "Re: {$decoded}\n\n";
        }
    }

    public function submit()
    {
        $this->error = '';
        $this->validate();

        try {
            $recipientEmail = config('mail.contact_to', 'info@zima.co.tz');
            Mail::to($recipientEmail)->send(new ContactFormMail(
                name: $this->name,
                email: $this->email,
                phone: $this->phone ?: null,
                company: $this->company ?: null,
                interest: $this->interest ?: null,
                messageContent: $this->message
            ));
            $this->reset(['name', 'email', 'phone', 'company', 'interest', 'message']);
            $this->submitted = true;
            $this->dispatch('contact-form-submitted');
        } catch (\Exception $e) {
            $this->error = 'Sorry, there was an error sending your message. Please try again or contact us directly at info@zima.co.tz';
            \Log::error('Contact form error: ' . $e->getMessage());
        }
    }

    public function resetForm()
    {
        $this->submitted = false;
        $this->error = '';
    }

    public function render()
    {
        return view('livewire.frontend.components.contact-form');
    }
}
