<x-mail::message>
# New Contact Form Submission

You have received a new inquiry from the ZIMA Solutions website.

## Contact Details

**Name:** {{ $name }}

**Email:** {{ $email }}

@if($phone)
**Phone:** {{ $phone }}
@endif

@if($company)
**Company:** {{ $company }}
@endif

@if($interest)
**Area of Interest:** {{ $interest }}
@endif

## Message

{{ $messageContent }}

---

<x-mail::button :url="'mailto:' . $email">
Reply to {{ $name }}
</x-mail::button>

<small>This email was sent from the contact form at {{ config('app.url') }}</small>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
