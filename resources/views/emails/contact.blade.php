<x-mail::message>
# New Message from Portfolio Contact Form

**Name:** {{ $name }}

**Email:** {{ $email }}

**Message:**

{{ $body }}

<x-mail::button :url="'mailto:' . $email">
Reply to {{ $name }}
</x-mail::button>

Sent from the contact form on {{ config('app.url') }}.
</x-mail::message>
