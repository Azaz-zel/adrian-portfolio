@extends('layouts.app')

@section('content')

    <x-navbar />

    <main id="main-content">

        {{-- =========================================================
            HERO
        ========================================================= --}}
        <section class="bg-cream px-6 pb-24 pt-36 sm:px-8 lg:px-12 lg:pb-32 lg:pt-44">

            <div class="mx-auto w-full max-w-7xl">

                <div class="mx-auto max-w-6xl">

                    {{-- Label --}}
                    <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                        03 — About Me
                    </p>


                    {{-- Main Hero --}}
                    <div class="mt-10 grid items-center gap-12 lg:grid-cols-[1fr_340px] lg:gap-20">

                        {{-- LEFT --}}
                        <div>

                            <h1 class="font-serif text-5xl leading-[0.92] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                                Building digital

                                <span class="italic text-gold">
                                    experiences
                                </span>

                                through code & creativity.

                            </h1>

                        </div>


                        {{-- RIGHT --}}
                        <div class="flex items-center">

                            <p class="text-sm leading-7 text-muted sm:text-[15px]">

                                I'm Adrian, founder of Ralph de Vinca Group and a
                                full-stack developer focused on building thoughtful,
                                functional, and visually refined digital experiences
                                from responsive websites to full-stack web applications.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            INTRODUCTION
        ========================================================= --}}
        <section class="bg-gradient-to-b from-cream via-[#F9F7F2] to-white px-6 pb-24 pt-36 sm:px-8 lg:px-12 lg:pb-36 lg:pt-44">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-16 lg:grid-cols-[1fr_420px] lg:gap-24">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            A little about me
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Somewhere between

                            <span class="italic text-gold">
                                technology
                            </span>

                            and creativity.

                        </h2>


                        <div class="mt-10 max-w-2xl">

                            <p class="text-sm leading-8 text-muted sm:text-[15px]">
                                I see web development as more than simply
                                writing code. A good website should communicate
                                something clearly, feel good to use, and have
                                a solid structure behind what people see.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                That's why I enjoy working across different
                                parts of a project from designing interfaces
                                and building responsive layouts to developing
                                the backend and working with databases.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                I'm especially interested in building practical
                                digital products, from informational websites
                                and digital experiences to full-stack web
                                applications.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                Alongside client work, I founded
                                <span class="text-charcoal">Ralph de Vinca Group</span>,
                                which now runs two arms: Perfumery, a fragrance brand
                                and its digital platform, and Technology, where I build
                                software for real operational needs.
                            </p>

                        </div>

                    </div>


                    {{-- DETAILS --}}
                    <div class="border-t border-charcoal/10 pt-6">

                        {{-- Based --}}
                        <div class="flex items-center justify-between border-b border-charcoal/10 pb-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Based
                            </span>

                            <span class="text-sm text-charcoal">
                                Bali, Indonesia
                            </span>

                        </div>


                        {{-- Focus --}}
                        <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Focus
                            </span>

                            <span class="text-sm text-charcoal">
                                Web Development
                            </span>

                        </div>


                        {{-- Company --}}
                        <div class="flex items-center justify-between gap-6 border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Company
                            </span>

                            <span class="text-right text-sm text-charcoal">
                                Ralph de Vinca Group
                            </span>

                        </div>


                        {{-- Role --}}
                        <div class="flex items-center justify-between gap-6 border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Role
                            </span>

                            <span class="text-right text-sm text-charcoal">
                                Founder & Developer
                            </span>

                        </div>


                        {{-- Availability --}}
                        <div class="flex items-center justify-between pt-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Availability
                            </span>

                            <span class="text-sm text-gold">
                                Open for Projects
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            WHAT I DO
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_360px] lg:items-end">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            What I Do
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            From idea to

                            <span class="italic text-gold">
                                working product.
                            </span>

                        </h2>

                    </div>


                    <p class="text-sm leading-7 text-muted sm:text-[15px]">
                        I combine development, interface design, and creative
                        thinking to turn ideas into useful digital experiences.
                    </p>

                </div>


                {{-- SERVICES --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-3">

                    {{-- 01 --}}
                    <div class="border-b border-charcoal/10 py-10 sm:border-r sm:pr-10 lg:border-b-0">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-5 font-serif text-3xl text-charcoal">
                            Web Development
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-muted">
                            Building responsive websites and web applications
                            with Laravel, PHP, databases, and modern frontend
                            technologies.
                        </p>

                    </div>


                    {{-- 02 --}}
                    <div class="border-b border-charcoal/10 py-10 sm:pl-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-5 font-serif text-3xl text-charcoal">
                            UI & Interface
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-muted">
                            Designing clean interfaces with attention to
                            typography, spacing, hierarchy, responsiveness,
                            and overall user experience.
                        </p>

                    </div>


                    {{-- 03 --}}
                    <div class="py-10 sm:col-span-2 sm:pl-10 lg:col-span-1">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-5 font-serif text-3xl text-charcoal">
                            Digital Content
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-muted">
                            Working with visual content, photography, video,
                            and digital storytelling to support a stronger
                            overall experience.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            APPROACH
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-16 lg:grid-cols-[1fr_1fr] lg:gap-24">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            My Approach
                        </p>

                        <h2 class="mt-5 max-w-xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Understand first,

                            <span class="italic text-gold">
                                build second.
                            </span>

                        </h2>

                    </div>


                    <div class="max-w-xl">

                        <p class="text-sm leading-8 text-muted sm:text-[15px]">
                            I prefer understanding what a project is trying
                            to achieve before deciding how it should be built.
                        </p>

                        <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                            What should people understand? What should they
                            be able to do? What information actually matters?
                        </p>

                        <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                            Once those questions are clear, design and
                            technology become tools for solving the problem
                            instead of simply adding complexity.
                        </p>

                    </div>

                </div>


                {{-- PRINCIPLES --}}
                <div class="mt-20 grid border-t border-charcoal/10 sm:grid-cols-3">

                    {{-- 01 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:pr-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Purpose
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Every feature and element should have a reason
                            to exist.
                        </p>

                    </div>


                    {{-- 02 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Clarity
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Good interfaces should make information and
                            actions easy to understand.
                        </p>

                    </div>


                    {{-- 03 --}}
                    <div class="py-8 sm:pl-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Detail
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Small decisions in code and design can make
                            a noticeable difference.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            SKILLS
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="max-w-2xl">

                    <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                        Tools & Skills
                    </p>

                    <h2 class="mt-5 font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                        The tools behind

                        <span class="italic text-gold">
                            the work.
                        </span>

                    </h2>

                </div>


                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-4">

                    {{-- DEVELOPMENT --}}
                    <div class="border-b border-charcoal/10 py-8 sm:border-r lg:border-b-0 lg:pr-8">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Development
                        </span>

                        <ul class="mt-5 space-y-3 text-sm text-charcoal">

                            <li>Laravel</li>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>MySQL</li>
                            <li>Python</li>

                        </ul>

                    </div>


                    {{-- INTERFACE --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pl-8 lg:border-b-0 lg:border-r lg:px-8">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Interface
                        </span>

                        <ul class="mt-5 space-y-3 text-sm text-charcoal">

                            <li>Tailwind CSS</li>
                            <li>Blade</li>
                            <li>HTML</li>
                            <li>Responsive Design</li>

                        </ul>

                    </div>


                    {{-- CREATIVE --}}
                    <div class="border-b border-charcoal/10 py-8 sm:border-r sm:pl-8 lg:border-b-0 lg:px-8">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Creative
                        </span>

                        <ul class="mt-5 space-y-3 text-sm text-charcoal">

                            <li>Visual Design</li>
                            <li>Photography</li>
                            <li>Video Editing</li>
                            <li>Digital Content</li>

                        </ul>

                    </div>


                    {{-- WORKFLOW --}}
                    <div class="py-8 sm:pl-8">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Workflow
                        </span>

                        <ul class="mt-5 space-y-3 text-sm text-charcoal">

                            <li>Git</li>
                            <li>Figma</li>
                            <li>Vite</li>
                            <li>Laragon</li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            PERSONAL STATEMENT
        ========================================================= --}}
        <section class="bg-white py-28 sm:px-8 lg:px-12 lg:py-40">

            <div class="mx-auto w-full max-w-7xl">

                <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                    Beyond the Screen
                </p>


                <h2 class="mt-6 max-w-6xl font-serif text-4xl leading-[1.08] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                    I don't just want to build websites.

                    <span class="italic text-gold">
                        I want to build things worth using.
                    </span>

                </h2>


                <div class="mt-12 max-w-2xl">

                    <p class="text-sm leading-8 text-muted sm:text-[15px]">
                        Whether it's a business website, a digital experience,
                        or a larger web application, I'm interested in the
                        process of turning an idea into something tangible,
                        functional, and meaningful.
                    </p>

                </div>

            </div>

        </section>



        {{-- =========================================================
            CTA
        ========================================================= --}}
        <section class="bg-gradient-to-b from-white via-[#FAF8F4] to-cream px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl text-center">

                <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                    Let's Work Together
                </p>

                <h2 class="mx-auto mt-5 max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                    Have an idea?

                    <span class="italic text-gold">
                        Let's build it.
                    </span>

                </h2>


                <div class="mt-10">

                    <a
                        href="{{ route('contact') }}"
                        class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                    >

                        <span>
                            Get in Touch
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