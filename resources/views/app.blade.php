@php
    $meta = $page['props']['meta'] ?? [];
    $title = $meta['title'] ?? 'Clive Christian, full-stack developer';
    $title = str_contains($title, 'Clive Christian') ? $title : $title.' | Clive Christian';
    $description = $meta['description'] ?? 'Portfolio of Adrian (Clive Christian), a full-stack developer based in Bali, Indonesia.';
    $image = $meta['image'] ?? 'images/profile.jpeg';
    $image = str_starts_with($image, 'http') ? $image : asset($image);

    // Ties the "Clive Christian" brand to the real person, so a search for the legal name surfaces this site.
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
                'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Bali', 'addressCountry' => 'ID'],
                'worksFor' => ['@type' => 'Organization', 'name' => 'Ralph de Vinca Group'],
                'knowsAbout' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'React', 'Tailwind CSS', 'Web Development'],
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="theme-color" content="#FAFAF7">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clive Christian Portfolio">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ $image }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $image }}">

    @unless (request()->is('admin*', 'inbox', 'login'))
        <script type="application/ld+json">{!! json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endunless

    {{ Vite::fonts() }}
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
