<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $title ?? 'Clive Christian — Full-Stack Developer Portfolio' }}
    </title>

    <meta
        name="description"
        content="{{ $description ?? 'Portfolio of Adrian (Clive Christian), a full-stack developer based in Bali, Indonesia.' }}"
    >

    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="theme-color" content="#1C1A17">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clive Christian Portfolio">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Clive Christian — Full-Stack Developer Portfolio' }}">
    <meta property="og:description" content="{{ $description ?? 'Portfolio of Adrian (Clive Christian), a full-stack developer based in Bali, Indonesia.' }}">
    <meta property="og:image" content="{{ asset($ogImage ?? 'images/profile.jpeg') }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Clive Christian — Full-Stack Developer Portfolio' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Portfolio of Adrian (Clive Christian), a full-stack developer based in Bali, Indonesia.' }}">
    <meta name="twitter:image" content="{{ asset($ogImage ?? 'images/profile.jpeg') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-cream text-charcoal antialiased">

    @yield('content')

</body>

</html>