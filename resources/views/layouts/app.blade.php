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

    {{-- Structured data: ties the "Clive Christian" brand to the real person,
         so a search for the legal name can surface this site. --}}
    @php
        $schemaGraph = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Person',
                    '@id' => url('/').'#person',
                    'name' => 'I Nyoman Adrian Bayu Mahotama',
                    'alternateName' => 'Clive Christian',
                    'jobTitle' => 'Full-Stack Developer',
                    'url' => url('/'),
                    'image' => asset('images/profile.jpeg'),
                    'email' => 'mailto:mangadrian2@gmail.com',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressLocality' => 'Bali',
                        'addressCountry' => 'ID',
                    ],
                    'worksFor' => [
                        '@type' => 'Organization',
                        'name' => 'Ralph de Vinca Group',
                    ],
                    'knowsAbout' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Tailwind CSS', 'Web Development'],
                    'sameAs' => [
                        'https://github.com/Azaz-zel',
                        'https://www.instagram.com/clivechristian._',
                        'https://www.linkedin.com/in/i-nyoman-adrian-bayu-mahotama-307717431',
                    ],
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => url('/').'#website',
                    'url' => url('/'),
                    'name' => 'Clive Christian Portfolio',
                    'inLanguage' => 'en',
                    'publisher' => ['@id' => url('/').'#person'],
                ],
            ],
        ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    {{-- Preloads and @font-face rules for the bundled Instrument Sans and
         Cormorant Garamond. Without this the fonts are built but never
         served, and every heading falls back to Georgia. --}}
    {{ Vite::fonts() }}

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-cream text-charcoal antialiased">

    <a href="#main-content" class="skip-link">
        Skip to content
    </a>


    @yield('content')

</body>

</html>