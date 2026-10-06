<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>{{ $title }} | Clive Christian</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    {{ Vite::fonts() }}
    @vite('resources/css/app.css')
</head>
<body>
    <header class="border-b border-hair">
        <div class="mx-auto flex h-16 max-w-[1440px] items-center px-5 md:h-[72px] md:px-12">
            <a href="{{ url('/') }}" class="font-display text-2xl">Clive Christian</a>
        </div>
    </header>

    <main class="mx-auto flex min-h-[70dvh] max-w-[1440px] flex-col justify-center gap-7 px-5 py-24 md:px-12">
        <h1 class="max-w-[16ch] font-display text-[clamp(2.5rem,6.2vw,4.75rem)] leading-[1.05]">{!! $heading !!}</h1>
        <p class="max-w-[36rem] text-lg leading-relaxed text-muted">{{ $message }}</p>
        <div class="flex flex-wrap items-center gap-6">
            <a href="{{ url('/') }}" class="btn btn-primary">Back to home</a>
            <a href="{{ url('/work') }}" class="text-link font-medium">See the work</a>
        </div>
    </main>
</body>
</html>
