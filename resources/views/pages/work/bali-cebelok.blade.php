@extends('layouts.app')

@section('content')

    <x-navbar />

    <main>

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


                {{-- Intro --}}
                <div class="mt-16 grid gap-12 lg:grid-cols-[1fr_360px] lg:items-center lg:gap-20">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            02 — Selected Project
                        </p>

                        <h1 class="mt-5 max-w-5xl font-serif text-5xl leading-[0.92] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                            Bali

                            <span class="italic text-gold">
                                Cebelok
                            </span>

                            Gesiuh

                        </h1>

                        <p class="mt-5 text-[10px] uppercase tracking-[0.3em] text-muted">
                            Traditional Coconut Oil Experience
                        </p>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            A digital experience introducing visitors to a
                            traditional Balinese coconut oil making process
                            passed down through generations.
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
                        src="{{ asset('images/projects/balicebelok.jpg') }}"
                        alt="Bali Cebelok Gesiuh"
                        class="block h-auto w-full"
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

                    {{-- Left --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Project Overview
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Bringing a traditional Balinese experience

                            <span class="italic text-gold">
                                online.
                            </span>

                        </h2>

                        <div class="mt-8 max-w-2xl">

                            <p class="text-sm leading-8 text-muted sm:text-[15px]">
                                Bali Cebelok Gesiuh is a traditional coconut oil
                                making experience in Bali that invites visitors
                                to learn directly from the people behind the
                                tradition.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                The website was created to introduce the
                                experience to travelers, communicate its story,
                                and make it easier for visitors to understand
                                what they will experience before booking.
                            </p>

                        </div>

                    </div>


                    {{-- Details --}}
                    <div class="border-t border-charcoal/10 pt-6">

                        <div class="flex items-center justify-between border-b border-charcoal/10 pb-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Year
                            </span>

                            <span class="text-sm text-charcoal">
                                2026
                            </span>

                        </div>


                        <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Type
                            </span>

                            <span class="text-sm text-charcoal">
                                Experience Website
                            </span>

                        </div>


                        <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Role
                            </span>

                            <span class="text-sm text-charcoal">
                                Design & Development
                            </span>

                        </div>


                        <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Audience
                            </span>

                            <span class="text-sm text-charcoal">
                                Travelers
                            </span>

                        </div>


                        <div class="flex items-center justify-between pt-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Stack
                            </span>

                            <span class="text-right text-sm text-charcoal">
                                Laravel<br>
                                Tailwind CSS
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            THE STORY
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_360px] lg:items-end">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            01 — The Story
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            A tradition rooted in

                            <span class="italic text-gold">
                                family.
                            </span>

                        </h2>

                    </div>


                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            The website introduces the people, history, and
                            philosophy behind Bali Cebelok Gesiuh, giving
                            visitors context before they step into the
                            experience itself.
                        </p>

                    </div>

                </div>


                {{-- Story Image --}}
                <div class="mt-16 lg:mt-24">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/cebelok-story.png') }}"
                            alt="Bali Cebelok Gesiuh Story"
                            class="block h-auto w-full"
                        >

                    </div>

                </div>


                {{-- Story Content --}}
                <div class="mt-12 grid gap-12 border-t border-charcoal/10 pt-10 lg:grid-cols-[1fr_1fr] lg:gap-24">

                    <div>

                        <h3 class="font-serif text-3xl text-charcoal sm:text-4xl">
                            Preserving something meaningful.
                        </h3>

                    </div>


                    <div>

                        <p class="text-sm leading-8 text-muted sm:text-[15px]">
                            The experience is built around a traditional
                            Balinese process of making coconut oil, combining
                            practical knowledge, family tradition, and a
                            welcoming experience for visitors.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            THE EXPERIENCE
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_360px] lg:items-end">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            02 — The Experience
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            From coconut to

                            <span class="italic text-gold">
                                tradition.
                            </span>

                        </h2>

                    </div>


                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            The experience section gives visitors a clear
                            understanding of what happens during the class
                            and what they can expect when they arrive.
                        </p>

                    </div>

                </div>


                {{-- Experience Image --}}
                <div class="mt-16 lg:mt-24">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/cebelok-experience.png') }}"
                            alt="Bali Cebelok Gesiuh Experience"
                            class="block h-auto w-full"
                        >

                    </div>

                </div>


                {{-- Experience Steps --}}
                <div class="mt-12 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="border-b border-charcoal/10 py-8 sm:pl-10 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Preparation
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Visitors are introduced to the ingredients and
                            traditional tools used throughout the process.
                        </p>

                    </div>


                    <div class="border-b border-charcoal/10 py-8 sm:pl-10 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Making
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            The traditional coconut oil making process is
                            demonstrated and experienced step by step.
                        </p>

                    </div>


                    <div class="border-b border-charcoal/10 py-8 sm:pl-10 lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Experience
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Guests leave with their own experience of the
                            tradition and products created during the class.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            WHAT'S INCLUDED
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-16 lg:grid-cols-[1fr_420px]">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            What's Included
                        </p>

                        <h2 class="mt-5 font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            More than just a

                            <span class="italic text-gold">
                                class.
                            </span>

                        </h2>

                    </div>


                    <div>

                        <p class="text-sm leading-7 text-muted">
                            The experience gives visitors the opportunity
                            to participate in the process while taking home
                            several products created during the activity.
                        </p>

                    </div>

                </div>


                {{-- Included --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-4">

                    <div class="border-b border-charcoal/10 py-8 sm:border-r lg:border-b-0 lg:pr-8">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Coconut Oil
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            30 ml of traditionally produced coconut oil.
                        </p>

                    </div>


                    <div class="border-b border-charcoal/10 py-8 sm:pl-8 lg:border-b-0 lg:border-r lg:px-8">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Coconut Cream
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Fresh coconut cream prepared during the process.
                        </p>

                    </div>


                    <div class="border-b border-charcoal/10 py-8 sm:border-r sm:pl-8 lg:border-b-0 lg:px-8">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Coconut Scrub
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            A natural coconut-based scrub created as part
                            of the experience.
                        </p>

                    </div>


                    <div class="py-8 sm:pl-8 lg:pl-8">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            04
                        </span>

                        <h3 class="mt-4 font-serif text-2xl text-charcoal">
                            Lunch
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            A meal shared with guests during the experience.
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

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Design Direction
                        </p>

                        <h2 class="mt-5 max-w-xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Warm, natural, and

                            <span class="italic text-gold">
                                human.
                            </span>

                        </h2>

                    </div>


                    <div class="max-w-xl">

                        <p class="text-sm leading-8 text-muted sm:text-[15px]">
                            The visual direction was designed to reflect the
                            natural environment and intimate character of the
                            experience.
                        </p>

                        <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                            Soft neutral tones, organic spacing, warm typography,
                            and large photography help the website feel
                            authentic rather than overly commercial.
                        </p>

                    </div>

                </div>


                {{-- Principles --}}
                <div class="mt-20 grid border-t border-charcoal/10 sm:grid-cols-3">

                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:pr-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            01
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Authenticity
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            The design stays close to the real people,
                            place, and tradition behind the experience.
                        </p>

                    </div>


                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Simplicity
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Information is presented clearly without
                            distracting visitors from the story.
                        </p>

                    </div>


                    <div class="py-8 sm:pl-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Connection
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            The experience is presented as something personal,
                            welcoming, and worth discovering.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            TECHNOLOGY
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl">

                <div class="grid gap-12 lg:grid-cols-[1fr_420px] lg:items-end">

                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Technology
                        </p>

                        <h2 class="mt-5 font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Built to tell the

                            <span class="italic text-gold">
                                story.
                            </span>

                        </h2>

                    </div>


                    <div class="flex items-center">

                        <p class="text-sm leading-9 text-muted">
                            The website uses a lightweight structure focused
                            on performance, responsiveness, visual storytelling,
                            and direct visitor conversion through booking.
                        </p>

                    </div>

                </div>


                {{-- Stack --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2">

                    <div class="border-b border-charcoal/10 py-8 sm:border-b-0 sm:border-r sm:pr-10">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Framework
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            Laravel
                        </p>

                    </div>


                    <div class="py-8 sm:pl-10">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Interface
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            Tailwind CSS
                        </p>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            CTA
        ========================================================= --}}
        <section class="bg-gradient-to-b from-white via-[#FAF8F4] to-cream px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

            <div class="mx-auto w-full max-w-7xl">

                <div class="text-center">

                    <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                        Bali Cebelok Gesiuh
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
                            href="#"
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