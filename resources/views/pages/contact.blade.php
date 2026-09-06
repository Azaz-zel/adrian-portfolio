@extends('layouts.app')

@section('content')

    <x-navbar />

    <main id="main-content">

        {{-- =========================================================
            HERO
        ========================================================= --}}
        <section class="flex min-h-[78vh] items-center bg-gradient-to-b from-cream via-[#F9F7F2] to-white px-6 py-32 sm:px-8 lg:px-12">

            <div class="mx-auto w-full max-w-7xl">

                <div class="mx-auto max-w-6xl">

                    {{-- Label --}}
                    <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                        04 — Get in Touch
                    </p>


                    {{-- Main Hero --}}
                    <div class="mt-10 grid items-center gap-12 lg:grid-cols-[1fr_340px] lg:gap-20">

                        {{-- LEFT --}}
                        <div>

                            <h1 class="font-serif text-5xl leading-[0.92] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                                Let's build

                                <span class="italic text-gold">
                                    something
                                </span>

                                meaningful.

                            </h1>

                        </div>


                        {{-- RIGHT --}}
                        <div>

                            <p class="text-sm leading-7 text-muted sm:text-[15px]">
                                I'm open to web development projects, digital experiences,
                                and creative collaborations. If you have an idea you'd like
                                to turn into something real, let's talk.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            SEND A MESSAGE
        ========================================================= --}}
        <section id="send-message" class="scroll-mt-10 bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-16 lg:grid-cols-[1fr_420px] lg:gap-24">

                    {{-- LEFT — FORM --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Start a Conversation
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            Tell me what you're

                            <span class="italic text-gold">
                                working on.
                            </span>

                        </h2>

                        <p class="mt-8 max-w-2xl text-sm leading-8 text-muted sm:text-[15px]">
                            Whether you need a responsive website, a full-stack web
                            application, or a digital experience built around your
                            brand, I'm always open to discussing new ideas and projects.
                        </p>


                        @if (session('status'))

                            <div class="mt-8 max-w-xl border border-gold/40 bg-gold/5 px-6 py-4 text-sm text-charcoal">
                                {{ session('status') }}
                            </div>

                        @endif


                        <form
                            method="POST"
                            action="{{ route('contact.store') }}"
                            class="mt-10 max-w-xl space-y-8"
                        >

                            @csrf

                            {{-- Honeypot — hidden from real visitors --}}
                            <div class="hidden" aria-hidden="true">

                                <label for="website">
                                    Website
                                </label>

                                <input
                                    type="text"
                                    name="website"
                                    id="website"
                                    tabindex="-1"
                                    autocomplete="off"
                                >

                            </div>


                            <div class="grid gap-8 sm:grid-cols-2">

                                {{-- NAME --}}
                                <div>

                                    <label
                                        for="name"
                                        class="text-[9px] uppercase tracking-[0.25em] text-muted"
                                    >
                                        Name
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        value="{{ old('name') }}"
                                        required
                                        autocomplete="name"
                                        @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
                                        class="mt-3 w-full border-b border-charcoal/20 bg-transparent pb-3 text-sm text-charcoal placeholder:text-muted/60 focus:border-gold focus:outline-none"
                                        placeholder="Your name"
                                    >

                                    @error('name')

                                        <p id="name-error" class="mt-2 text-[11px] text-red-700">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- EMAIL --}}
                                <div>

                                    <label
                                        for="email"
                                        class="text-[9px] uppercase tracking-[0.25em] text-muted"
                                    >
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                                        class="mt-3 w-full border-b border-charcoal/20 bg-transparent pb-3 text-sm text-charcoal placeholder:text-muted/60 focus:border-gold focus:outline-none"
                                        placeholder="you@email.com"
                                    >

                                    @error('email')

                                        <p id="email-error" class="mt-2 text-[11px] text-red-700">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>

                            </div>


                            {{-- MESSAGE --}}
                            <div>

                                <label
                                    for="message"
                                    class="text-[9px] uppercase tracking-[0.25em] text-muted"
                                >
                                    Message
                                </label>

                                <textarea
                                    name="message"
                                    id="message"
                                    rows="5"
                                    required
                                    @error('message') aria-invalid="true" aria-describedby="message-error" @enderror
                                    class="mt-3 w-full border-b border-charcoal/20 bg-transparent pb-3 text-sm text-charcoal placeholder:text-muted/60 focus:border-gold focus:outline-none"
                                    placeholder="Tell me about your project..."
                                >{{ old('message') }}</textarea>

                                @error('message')

                                    <p id="message-error" class="mt-2 text-[11px] text-red-700">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            <button
                                type="submit"
                                class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                            >

                                <span>
                                    Send Message
                                </span>

                                <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </button>

                        </form>

                    </div>


                    {{-- RIGHT — DIRECT CONTACT --}}
                    <div class="border-t border-charcoal/10 pt-6">

                        {{-- Email --}}
                        <div class="border-b border-charcoal/10 pb-6">

                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Email
                            </p>

                            <a
                                href="mailto:mangadrian2@gmail.com"
                                class="mt-3 inline-block text-lg text-charcoal transition-colors duration-300 hover:text-gold"
                            >
                                mangadrian2@gmail.com
                            </a>

                        </div>


                        {{-- Location --}}
                        <div class="border-b border-charcoal/10 py-6">

                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Location
                            </p>

                            <p class="mt-3 text-sm text-charcoal">
                                Bali, Indonesia
                            </p>

                        </div>


                        {{-- Availability --}}
                        <div class="pt-6">

                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Availability
                            </p>

                            <div class="mt-3 flex items-center gap-3">

                                <span class="h-2 w-2 rounded-full bg-gold"></span>

                                <span class="text-sm text-charcoal">
                                    Open for selected projects
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            SOCIAL / ELSEWHERE
        ========================================================= --}}
        <section class=" bg-white  px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_420px] lg:items-end">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Elsewhere
                        </p>

                        <h2 class="mt-5 font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Find me

                            <span class="italic text-gold">
                                online.
                            </span>

                        </h2>

                    </div>


                    <p class="text-sm leading-7 text-muted">
                        You can also find my work and creative projects
                        through the platforms below.
                    </p>

                </div>


                {{-- Links --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-3">

                    {{-- Instagram --}}
                    <a
                        href="https://www.instagram.com/clivechristian._"
                        class="group flex items-center justify-between border-b border-charcoal/10 py-7 sm:border-b-0 sm:border-r sm:pr-8"
                    >

                        <div>

                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Instagram
                            </p>

                            <p class="mt-2 text-sm text-charcoal">
                                @clivechristian._
                            </p>

                        </div>

                        <span class="text-base text-charcoal transition-transform duration-300 group-hover:translate-x-1 group-hover:text-gold">
                            ↗
                        </span>

                    </a>


                    {{-- GitHub --}}
                    <a
                        href="https://github.com/Azaz-zel"
                        class="group flex items-center justify-between border-b border-charcoal/10 py-7 sm:border-b-0 sm:border-r sm:px-8"
                    >

                        <div>

                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                GitHub
                            </p>

                            <p class="mt-2 text-sm text-charcoal">
                                @Clive Christian
                            </p>

                        </div>

                        <span class="text-base text-charcoal transition-transform duration-300 group-hover:translate-x-1 group-hover:text-gold">
                            ↗
                        </span>

                    </a>


                    {{-- LinkedIn --}}
                    <a
                        href="https://www.linkedin.com/in/i-nyoman-adrian-bayu-mahotama-307717431"
                        class="group flex items-center justify-between py-7 sm:pl-8"
                    >

                        <div>

                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                LinkedIn
                            </p>

                            <p class="mt-2 text-sm text-charcoal">
                                I Nyoman Adrian Bayu Mahotama
                            </p>

                        </div>

                        <span class="text-base text-charcoal transition-transform duration-300 group-hover:translate-x-1 group-hover:text-gold">
                            ↗
                        </span>

                    </a>

                </div>

            </div>

        </section>



        {{-- =========================================================
            FINAL CTA
        ========================================================= --}}
        <section class="bg-gradient-to-b from-white via-[#FAF8F4] to-cream px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl text-center">

                <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                    Have an idea?
                </p>

                <h2 class="mx-auto mt-5 max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                    Let's turn it into

                    <span class="italic text-gold">
                        something real.
                    </span>

                </h2>


                <div class="mt-10">

                    <a
                        href="mailto:mangadrian2@gmail.com"
                        class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                    >

                        <span>
                            Send an Email
                        </span>

                        <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </main>

    <x-footer />

@endsection