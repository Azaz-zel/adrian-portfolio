@extends('layouts.app')

@section('content')

    <x-navbar />

    <main id="main-content">

        {{-- =========================================================
            HERO
        ========================================================= --}}
        <section class="bg-cream px-6 pb-20 pt-36 sm:px-8 lg:px-12 lg:pb-28 lg:pt-44">

            <div class="mx-auto w-full max-w-7xl">

                {{-- Back --}}
                <a
                    href="{{ route('work') }}"
                    class="group inline-flex items-center gap-3 text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                >

                    <span class="transition-transform duration-300 group-hover:-translate-x-1">
                        ←
                    </span>

                    <span>
                        Back to Work
                    </span>

                </a>


                {{-- Hero Intro --}}
                <div class="mt-16 grid gap-12 lg:grid-cols-[1fr_360px] lg:items-center lg:gap-20">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            01 — Selected Project
                        </p>

                        <h1 class="mt-5 max-w-5xl font-serif text-5xl leading-[0.92] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                            Ralph de

                            <span class="italic text-gold">
                                Vinca
                            </span>

                        </h1>

                        <p class="mt-5 text-[15px] uppercase tracking-[0.3em] text-muted">
                            Perfumery
                        </p>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            A fragrance platform combining structured content, database-driven perfume information, and a refined responsive interface.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            HERO IMAGE
        ========================================================= --}}
        <section class="bg-gradient-to-b from-cream via-[#F9F7F2] to-white px-6 pb-24 sm:px-8 lg:px-12 lg:pb-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="overflow-hidden shadow-[0_25px_80px_rgba(0,0,0,0.08)]">

                    <img
                        src="{{ asset('images/projects/ralph-home.webp') }}"
                        alt="Ralph de Vinca Homepage"
                        class="block h-auto w-full"
                        width="1918"
                        height="924"
                        decoding="async"
                        fetchpriority="high"
                    >

                </div>

            </div>

        </section>



        {{-- =========================================================
            PROJECT OVERVIEW
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-16 lg:grid-cols-[1fr_320px] lg:gap-24">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Project Overview
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Building a digital space for the world of fragrance.

                        </h2>

                        <div class="mt-8 max-w-2xl">

                            <p class="text-sm leading-8 text-muted sm:text-[15px]">
                                Ralph de Vinca Perfumery is my own brand, and this
                                platform was designed as its informational and
                                educational home, centered around the world of
                                fragrance.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                The experience combines editorial-style
                                storytelling with structured fragrance data,
                                allowing visitors to explore perfumes,
                                fragrance notes, ingredients, and educational
                                content in a refined and approachable interface.
                            </p>

                        </div>

                    </div>


                    {{-- RIGHT DETAILS --}}
                    <div class="border-t border-charcoal/10 pt-6">

                        {{-- Year --}}
                        <div class="flex items-center justify-between border-b border-charcoal/10 pb-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Year
                            </span>

                            <span class="text-sm text-charcoal">
                                2026
                            </span>

                        </div>


                        {{-- Type --}}
                        <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Type
                            </span>

                            <span class="text-sm text-charcoal">
                                Full-Stack Web Application
                            </span>

                        </div>


                        {{-- Role --}}
                        <div class="flex items-center justify-between gap-6 border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Role
                            </span>

                            <span class="text-right text-sm leading-6 text-charcoal">
                                Founder<br>
                                Design & Development
                            </span>

                        </div>


                        {{-- Stack --}}
                        <div class="flex items-center justify-between pt-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Stack
                            </span>

                            <span class="text-right text-sm leading-6 text-charcoal">
                                PHP / Laravel<br>
                                Blade / Tailwind CSS<br>
                                JavaScript / MySQL
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            EXPLORE EXPERIENCE
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                {{-- Header --}}
                <div class="grid gap-10 lg:grid-cols-[1fr_420px] lg:items-center lg:gap-20">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Explore the Experience
                        </p>

                        <h2 class="mt-5 font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            Designed around

                            <span class="italic text-gold">
                                knowledge & identity.
                            </span>

                        </h2>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            The experience combines fragrance education with the
                            story and identity behind Ralph de Vinca, creating
                            a digital space that feels informative, elegant,
                            and personal.
                        </p>

                    </div>

                </div>



                {{-- =====================================================
                    SCREENSHOT 02 — ACADEMY
                ====================================================== --}}
                <div class="mt-16 lg:mt-24">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/ralph-explore.webp') }}"
                            alt="Ralph de Vinca Fragrance Academy"
                            class="block h-auto w-full"
                            width="1919"
                            height="928"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="mt-8 grid gap-8 lg:grid-cols-[1fr_320px] lg:items-start">

                        <h3 class="font-serif text-3xl text-charcoal sm:text-4xl">
                            Fragrance Academy
                        </h3>

                        <p class="text-sm leading-7 text-muted">
                            An educational space designed to introduce visitors
                            to the world of fragrance, helping them understand
                            perfume, fragrance notes, ingredients, and the
                            fundamentals behind perfumery.
                        </p>

                    </div>

                </div>



                {{-- =====================================================
                    SCREENSHOT 03 — ABOUT
                ====================================================== --}}
                <div class="mt-24 lg:mt-36">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/ralph-detail.webp') }}"
                            alt="About Ralph de Vinca Perfumery"
                            class="block h-auto w-full"
                            width="1919"
                            height="929"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="mt-8 grid gap-8 lg:grid-cols-[1fr_320px] lg:items-start">

                        <h3 class="font-serif text-3xl text-charcoal sm:text-4xl">
                            The Story Behind Ralph de Vinca
                        </h3>

                        <p class="text-sm leading-7 text-muted">
                            The About page introduces the identity and story
                            behind Ralph de Vinca, giving visitors a deeper
                            understanding of the brand, its direction, and
                            the idea behind the digital experience.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            WHAT I BUILT
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                {{-- HEADER --}}
                <div class="grid gap-12 lg:grid-cols-[1fr_420px] lg:items-end lg:gap-20">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            What I Built
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            From structured data

                            <span class="italic text-gold">
                                to user experience.
                            </span>

                        </h2>

                    </div>


                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            The project was developed as a fullstack application,
                            with the backend and database supporting the content
                            presented through the frontend experience.
                        </p>

                    </div>

                </div>


                {{-- FEATURES --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-4">

                    {{-- ITEM 01 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pr-10 lg:border-b-0 lg:border-r">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Dynamic Content
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Perfume and fragrance information is managed
                            through structured database content.
                        </p>

                    </div>


                    {{-- ITEM 02 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pl-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Fragrance Discovery
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Visitors can explore perfumes, notes, categories,
                            and fragrance-related information.
                        </p>

                    </div>


                    {{-- ITEM 03 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pr-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Structured Backend
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Laravel handles routes, controllers, models,
                            database interaction, and application logic.
                        </p>

                    </div>


                    {{-- ITEM 04 --}}
                    <div class="py-8 sm:pl-10 lg:pl-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            04
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Responsive Interface
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            The interface is designed to remain clear and
                            usable across different screen sizes.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            DESIGN DIRECTION
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-16 lg:grid-cols-[1fr_1fr] lg:gap-24">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Design Direction
                        </p>

                        <h2 class="mt-5 max-w-xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Refined, editorial, and intentionally minimal.

                        </h2>

                    </div>


                    {{-- RIGHT --}}
                    <div class="max-w-xl">

                        <p class="text-sm leading-8 text-muted sm:text-[15px]">
                            The visual direction takes inspiration from luxury
                            fragrance brands and editorial publications.
                        </p>

                        <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                            Generous whitespace, restrained typography, muted
                            tones, and subtle gold accents create an experience
                            that feels elegant without overwhelming the content.
                        </p>

                    </div>

                </div>



                {{-- DESIGN PRINCIPLES --}}
                <div class="mt-20 grid border-t border-charcoal/10 sm:grid-cols-3">

                    {{-- ITEM --}}
                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:pr-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Clarity
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Information remains easy to understand and navigate.
                        </p>

                    </div>


                    {{-- ITEM --}}
                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Elegance
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            A restrained visual language creates a premium feel.
                        </p>

                    </div>


                    {{-- ITEM --}}
                    <div class="py-8 sm:pl-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Discovery
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Content encourages visitors to explore naturally.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            TECHNOLOGY
        ========================================================= --}}
        <section class="bg-white py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl">

                {{-- HEADER --}}
                <div class="grid gap-12 lg:grid-cols-[1fr_420px] lg:items-end lg:gap-20">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Technology
                        </p>

                        <h2 class="mt-5 max-w-2xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Built from interface

                            <span class="italic text-gold">
                                to database.
                            </span>

                        </h2>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            Ralph de Vinca was built as a fullstack web application,
                            combining a structured backend, relational database,
                            dynamic content, and a responsive frontend interface.
                        </p>

                    </div>

                </div>


                {{-- TECHNOLOGY GRID --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-4">

                    {{-- BACKEND --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pr-10 lg:border-b-0 lg:border-r">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Backend
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            Laravel
                        </p>

                        <p class="mt-3 max-w-xs text-sm leading-6 text-muted">
                            Routing, controllers, models, dynamic content,
                            and application logic.
                        </p>

                    </div>


                    {{-- FRONTEND --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pl-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Frontend
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            Blade + Tailwind
                        </p>

                        <p class="mt-3 max-w-xs text-sm leading-6 text-muted">
                            Responsive layouts, reusable components,
                            interactions, and visual system.
                        </p>

                    </div>


                    {{-- DATABASE --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pr-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Database
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            MySQL
                        </p>

                        <p class="mt-3 max-w-xs text-sm leading-6 text-muted">
                            Structured perfume, note, category, and
                            fragrance-related data.
                        </p>

                    </div>


                    {{-- INTERACTION --}}
                    <div class="py-8 sm:pl-10 lg:pl-10">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Interaction
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            JavaScript
                        </p>

                        <p class="mt-3 max-w-xs text-sm leading-6 text-muted">
                            Interactive filtering, navigation behavior,
                            and subtle interface interactions.
                        </p>

                    </div>

                </div>


                {{-- ADDITIONAL STACK --}}
                <div class="mt-10 border-t border-charcoal/10 pt-8">

                    <div class="flex flex-wrap items-center gap-x-5 gap-y-4">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-gold">
                            Stack
                        </span>

                        <span class="h-px w-8 bg-charcoal/20"></span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            PHP
                        </span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Laravel
                        </span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Blade
                        </span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Tailwind CSS
                        </span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            JavaScript
                        </span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            MySQL
                        </span>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            PROJECT CTA
        ========================================================= --}}
        <section class="bg-gradient-to-b from-white via-[#FAF8F4] to-cream px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl">

                <div class="text-center">

                    <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                        Ralph de Vinca
                    </p>

                    <h2 class="mx-auto mt-5 max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                        Explore the next

                        <span class="italic text-gold">
                            project.
                        </span>

                    </h2>


                    <div class="mt-10 flex flex-col items-center justify-center gap-5 sm:flex-row">

                        <a
                            href="{{ route('work') }}"
                            class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                        >

                            <span>
                                Back to Work
                            </span>

                            <span class="text-base transition-transform duration-300 group-hover:-translate-x-1">
                                ←
                            </span>

                        </a>


                        <a
                            href="{{ route('work.bali-cebelok') }}"
                            class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                        >

                            <span>
                                Next Project
                            </span>

                            <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                                →
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <x-footer />

@endsection
