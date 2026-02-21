<?php

use App\Livewire\Frontend\Components\ContactForm;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

it('loads the contact page with the form', function () {
    $response = $this->get(route('contact'));

    $response->assertStatus(200);
    $response->assertSee('Send us a message');
    $response->assertSee('Full name');
    $response->assertSee('Send message');
});

it('pre-fills the message when subject query is present', function () {
    $response = $this->get(route('contact', [
        'subject' => 'Partnership Discussion - Financial Inclusion',
    ]));

    $response->assertStatus(200);
    $response->assertSee('Re: Partnership Discussion - Financial Inclusion', false);
});

it('sends contact form email on submit', function () {
    Mail::fake();

    Livewire::test(ContactForm::class)
        ->set('name', 'John Doe')
        ->set('email', 'john@company.com')
        ->set('phone', '+255 123 456 789')
        ->set('company', 'Acme Ltd')
        ->set('interest', 'Partnership Inquiry')
        ->set('message', 'Re: Partnership Discussion - Financial Inclusion

We would like to discuss a partnership.')
        ->call('submit')
        ->assertSet('submitted', true);

    Mail::assertSent(ContactFormMail::class, function (ContactFormMail $mail) {
        return $mail->name === 'John Doe'
            && $mail->email === 'john@company.com'
            && str_contains($mail->messageContent, 'Partnership Discussion');
    });
});

it('validates required fields on submit', function () {
    Livewire::test(ContactForm::class)
        ->set('name', '')
        ->set('email', '')
        ->set('message', '')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'message']);
});
