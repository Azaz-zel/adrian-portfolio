@extends('layouts.app')

@section('content')

    <x-navbar />

    <main>

        {{-- =========================================================
            PAGE HERO
        ========================================================= --}}
        <section class="bg-cream px-6 pb-24 pt-36 sm:px-8 lg:px-12 lg:pb-32 lg:pt-44">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_320px] lg:items-end">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            01 — Work
                        </p>

                        <h1 class="mt-5 max-w-4xl font-serif text-5xl leading-[0.95] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                            Selected

                            <span class="italic text-gold">
                                Projects
                            </span>

                        </h1>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="max-w-sm text-sm leading-7 text-muted sm:text-[15px]">
                            A selection of web applications and digital projects built across frontend, backend, database, and user experience.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            PROJECTS
        ========================================================= --}}
        <section class="bg-gradient-to-b from-cream via-[#F9F7F2] to-white">

            <div class="px-6 py-20 sm:px-8 lg:px-12 lg:py-32">

                <div class="mx-auto w-full max-w-7xl">


                    {{-- =================================================
                        PROJECT 01 — RALPH DE VINCA
                    ================================================== --}}
                    <article class="group border-t border-charcoal/10 pt-10 lg:pt-14">

                        <div class="grid gap-12 lg:grid-cols-[80px_minmax(0,1fr)] lg:gap-14">

                            {{-- NUMBER --}}
                            <div class="hidden lg:block">

                                <span class="text-[10px] tracking-[0.25em] text-muted">
                                    01
                                </span>

                            </div>


                            <div>

                                {{-- PROJECT IMAGE --}}
                                <div class="relative overflow-hidden bg-cream">

                                    <div class="aspect-[16/9]">

                                        <img
                                            src="{{ asset('images/projects/ralph-home.jpg') }}"
                                            alt="Ralph de Vinca Perfumary"
                                            class="h-full w-full object-cover object-top transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                                        >

                                    </div>

                                </div>


                                {{-- PROJECT INFO --}}
                                <div class="mt-8">

                                    <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_300px] lg:items-start xl:grid-cols-[minmax(0,1fr)_360px]">

                                        {{-- TITLE --}}
                                        <div>

                                            <p class="mb-3 text-[9px] uppercase tracking-[0.3em] text-gold">
                                                Web Development
                                            </p>

                                            <h2 class="font-serif text-4xl tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">
                                                Ralph de Vinca
                                            </h2>

                                            <p class="mt-2 text-[10px] uppercase tracking-[0.25em] text-muted">
                                                Perfumary
                                            </p>

                                        </div>


                                        {{-- DESCRIPTION --}}
                                        <div>

                                            <p class="text-sm leading-7 text-muted">
                                                A fragrance platform combining structured content, database-driven perfume information, and a refined responsive interface.
                                            </p>

                                            <a
                                                href="{{ route('work.ralph') }}"
                                                class="group/link mt-8 inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[9px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                                            >

                                                <span>
                                                    View Project
                                                </span>

                                                <span class="text-base transition-transform duration-300 group-hover/link:translate-x-1">
                                                    →
                                                </span>

                                            </a>

                                        </div>

                                    </div>


                                    {{-- PROJECT DETAILS --}}
                                    <div class="mt-10 border-t border-charcoal/10 pt-8">

                                        <div class="grid gap-10 lg:grid-cols-2 lg:gap-16">

                                            {{-- WHAT I BUILT --}}
                                            <div>

                                                <p class="text-[9px] uppercase tracking-[0.3em] text-gold">
                                                    What I Built
                                                </p>

                                                <div class="mt-5 space-y-4">

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Database-driven perfume catalog
                                                        </span>
                                                    </div>

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Dynamic perfume and fragrance note pages
                                                        </span>
                                                    </div>

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Search, filtering, and category exploration
                                                        </span>
                                                    </div>

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Responsive interface and structured content
                                                        </span>
                                                    </div>

                                                </div>

                                            </div>


                                            {{-- TECH STACK --}}
                                            <div>

                                                <p class="text-[9px] uppercase tracking-[0.3em] text-gold">
                                                    Tech Stack
                                                </p>

                                                <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-4">

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        Laravel
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        PHP
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        MySQL
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        Blade
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        Tailwind CSS
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        JavaScript
                                                    </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </article>



                    {{-- =================================================
                        PROJECT 02 — BALI CEBELOK GESIUH
                    ================================================== --}}
                    <article class="group mt-28 border-t border-charcoal/10 pt-10 lg:mt-20 lg:pt-14">

                        <div class="grid gap-12 lg:grid-cols-[80px_minmax(0,1fr)] lg:gap-14">

                            {{-- NUMBER --}}
                            <div class="hidden lg:block">

                                <span class="text-[10px] tracking-[0.25em] text-muted">
                                    02
                                </span>

                            </div>


                            <div>

                                {{-- PROJECT IMAGE --}}
                                <div class="relative overflow-hidden bg-cream">

                                    <div class="aspect-[16/9]">

                                        <img
                                            src="{{ asset('images/projects/balicebelok.jpg') }}"
                                            alt="Bali Cebelok Gesiuh"
                                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                                        >

                                    </div>

                                </div>


                                {{-- PROJECT INFO --}}
                                <div class="mt-8">

                                    <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_300px] lg:items-start xl:grid-cols-[minmax(0,1fr)_360px]">

                                        {{-- TITLE --}}
                                        <div>

                                            <p class="mb-3 text-[9px] uppercase tracking-[0.3em] text-gold">
                                                Digital Experience
                                            </p>

                                            <h2 class="max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">
                                                Bali Cebelok Gesiuh
                                            </h2>

                                            <p class="mt-3 text-[10px] uppercase tracking-[0.25em] text-muted">
                                                Traditional Coconut Oil Experience
                                            </p>

                                        </div>


                                        {{-- DESCRIPTION --}}
                                        <div>

                                            <p class="text-sm leading-7 text-muted">
                                                A digital experience designed to introduce visitors to Bali's traditional coconut oil making process and guide them toward the booking experience.
                                            </p>

                                            <a
                                                href="{{ route('work.bali-cebelok') }}"
                                                class="group/link mt-8 inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[9px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                                            >

                                                <span>
                                                    View Project
                                                </span>

                                                <span class="text-base transition-transform duration-300 group-hover/link:translate-x-1">
                                                    →
                                                </span>

                                            </a>

                                        </div>

                                    </div>


                                    {{-- PROJECT DETAILS --}}
                                    <div class="mt-10 border-t border-charcoal/10 pt-8">

                                        <div class="grid gap-10 lg:grid-cols-2 lg:gap-16">

                                            {{-- WHAT I BUILT --}}
                                            <div>

                                                <p class="text-[9px] uppercase tracking-[0.3em] text-gold">
                                                    What I Built
                                                </p>

                                                <div class="mt-5 space-y-4">

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Responsive experience website
                                                        </span>
                                                    </div>

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Traditional process storytelling
                                                        </span>
                                                    </div>

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Experience and information structure
                                                        </span>
                                                    </div>

                                                    <div class="flex items-start gap-4">
                                                        <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-gold"></span>

                                                        <span class="text-sm leading-6 text-muted">
                                                            Booking flow through WhatsApp
                                                        </span>
                                                    </div>

                                                </div>

                                            </div>


                                            {{-- TECH STACK --}}
                                            <div>

                                                <p class="text-[9px] uppercase tracking-[0.3em] text-gold">
                                                    Tech Stack
                                                </p>

                                                <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-4">

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        Laravel
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        Blade
                                                    </span>

                                                    <span class="h-px w-6 bg-charcoal/20"></span>

                                                    <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                        Tailwind CSS
                                                    </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </article>



                    {{-- =================================================
                        PROJECT 03 — PKKMB
                    ================================================== --}}
                    <article class="group mt-28 border-t border-b border-charcoal/10 pt-10 lg:mt-20 lg:pt-14 lg:pb-14">

                        <div class="grid gap-12 lg:grid-cols-[80px_minmax(0,1fr)] lg:gap-14">

                            {{-- NUMBER --}}
                            <div class="hidden lg:block">

                                <span class="text-[10px] tracking-[0.25em] text-muted">
                                    03
                                </span>

                            </div>


                            <div>

                                {{-- PROJECT IMAGE --}}
                                <div class="relative overflow-hidden bg-cream">

                                    <div class="aspect-[16/9]">

                                        <img
                                            src="{{ asset('images/projects/pkkmb.jpg') }}"
                                            alt="PKKMB INSTIKI 2026 Attendance System"
                                            class="h-full w-full object-cover object-top transition-transform duration-700 ease-out group-hover:scale-[1.025]"
                                        >

                                    </div>

                                </div>


                                {{-- PROJECT INFO --}}
                                <div class="mt-8">

                                    <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_300px] lg:items-start xl:grid-cols-[minmax(0,1fr)_360px]">

                                        {{-- TITLE --}}
                                        <div>

                                            <p class="mb-3 text-[9px] uppercase tracking-[0.3em] text-gold">
                                                Web Development
                                            </p>

                                            <h2 class="max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">
                                                PKKMB INSTIKI 2026
                                            </h2>

                                            <p class="mt-3 text-[10px] uppercase tracking-[0.25em] text-muted">
                                                Student Attendance System
                                            </p>

                                        </div>


                                        {{-- DESCRIPTION --}}
                                        <div>

                                            <p class="text-sm leading-7 text-muted">
                                                A centralized attendance platform designed to manage student attendance, classes, sessions, and administrative access during PKKMB.
                                            </p>

                                        </div>

                                    </div>


                                    {{-- CURRENT TECH --}}
                                    <div class="mt-10 border-t border-charcoal/10 pt-8">

                                        <p class="text-[9px] uppercase tracking-[0.3em] text-gold">
                                            Current Stack
                                        </p>

                                        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-4">

                                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                Laravel
                                            </span>

                                            <span class="h-px w-6 bg-charcoal/20"></span>

                                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                MySQL
                                            </span>

                                            <span class="h-px w-6 bg-charcoal/20"></span>

                                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                Blade
                                            </span>

                                            <span class="h-px w-6 bg-charcoal/20"></span>

                                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                                Tailwind CSS
                                            </span>

                                        </div>

                                        <p class="mt-5 max-w-xl text-[11px] leading-6 text-muted">
                                            Project currently in development. Backend architecture,
                                            attendance flow, roles, and administrative features will be
                                            documented once the system is completed.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </section>



        {{-- =========================================================
            BOTTOM CTA
        ========================================================= --}}
        <section class="bg-gradient-to-b from-white via-[#FAF8F4] to-cream px-6 py-28 sm:px-8 lg:px-12 lg:py-40">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_auto] lg:items-end">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Have a project in mind?
                        </p>

                        <h2 class="mt-5 max-w-4xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            Let's create something

                            <span class="italic text-gold">
                                meaningful.
                            </span>

                        </h2>

                    </div>


                    {{-- CTA --}}
                    <a
                        href="/#contact"
                        class="group inline-flex items-center gap-4 border-b border-charcoal pb-3 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                    >

                        <span>
                            Start a Conversation
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
```
