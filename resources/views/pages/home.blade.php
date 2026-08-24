@extends('layouts.app')

@section('content')

    <x-navbar />

    <main>

        {{-- =========================================================
            HERO
        ========================================================= --}}
        <section class="relative flex min-h-screen items-center overflow-hidden bg-cream">

            <div class="mx-auto w-full max-w-[1500px] px-8 lg:px-16 xl:px-20 2xl:px-24">

                <div class="grid items-center gap-12 lg:grid-cols-[minmax(0,1fr)_420px] xl:gap-20 2xl:grid-cols-[minmax(0,1fr)_460px] 2xl:gap-28">

                    {{-- LEFT CONTENT --}}
                    <div class="max-w-2xl">

                        <p class="mb-5 text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Full-Stack Developer
                        </p>

                        <h1 class="font-serif text-4xl leading-[1.02] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl xl:text-7xl">

                            Building Digital
                            <br>

                            <span class="italic text-gold">
                                Experiences
                            </span>

                            With
                            <br>

                            Purpose & Precision

                        </h1>

                        <p class="mt-7 max-w-md text-sm leading-7 text-muted sm:text-[15px]">
                            I build full-stack web applications that combine reliable backend systems, thoughtful interfaces, and practical functionality.
                        </p>

                        <div class="mt-8">

                            <a
                                href="#work"
                                class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                            >

                                <span>
                                    Explore My Work
                                </span>

                                <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </a>

                        </div>

                    </div>


                    {{-- PROFILE IMAGE --}}
                    <div class="relative hidden lg:block">

                        <div class="relative mx-auto aspect-[3/4] w-full max-w-[420px] overflow-hidden xl:max-w-[440px] 2xl:max-w-[460px]">

                            <img
                                src="{{ asset('images/profile.jpeg') }}"
                                alt="Adrian — Full-Stack Developer"
                                class="h-full w-full object-cover object-center grayscale-[15%]"
                            >

                        </div>

                    </div>

                </div>

            </div>


            {{-- LOCATION --}}
            <div class="absolute bottom-10 left-8 hidden lg:block xl:left-12">

                <div class="flex items-end gap-4">

                    <span class="h-16 w-px bg-gold/60"></span>

                    <span
                        class="text-[9px] uppercase tracking-[0.3em] text-muted"
                        style="writing-mode: vertical-rl; transform: rotate(180deg);"
                    >
                        Based in Bali, Indonesia
                    </span>

                </div>

            </div>


            {{-- SCROLL INDICATOR --}}
            <div class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 sm:block">

                <a
                    href="#work"
                    class="group flex flex-col items-center gap-3"
                >

                    <span class="text-[9px] uppercase tracking-[0.3em] text-muted">
                        Scroll to explore
                    </span>

                    <span class="text-sm text-gold transition-transform duration-300 group-hover:translate-y-1">
                        ↓
                    </span>

                </a>

            </div>

        </section>



        {{-- =========================================================
            SELECTED WORK
        ========================================================= --}}
        <section
            id="work"
            class="scroll-mt-10 bg-gradient-to-b from-cream via-[#F9F7F2] to-white px-6 py-28 sm:px-8 lg:px-16 lg:py-36 xl:px-20 2xl:px-24"
        >

            <div class="mx-auto w-full max-w-[1500px]">

                {{-- SECTION INTRO --}}
                <div class="grid items-center gap-16 lg:grid-cols-[minmax(0,1fr)_560px] xl:gap-24 2xl:grid-cols-[minmax(0,1fr)_620px] 2xl:gap-28">

                    {{-- LEFT --}}
                    <div class="max-w-2xl">

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            02 — Selected Work
                        </p>

                        <h2 class="mt-4 font-serif text-4xl leading-[1.02] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl xl:text-7xl">

                            Projects &

                            <span class="italic text-gold">
                                Experiences
                            </span>

                        </h2>

                        <p class="mt-7 max-w-md text-sm leading-7 text-muted sm:text-[15px]">
                            A selection of web applications and digital projects
                            where engineering, design, and thoughtful user experiences
                            come together.
                        </p>

                    </div>


                    {{-- =====================================================
                        PROJECT SLIDESHOW
                    ====================================================== --}}
                    <div class="relative hidden lg:block">

                        <div
                            id="project-slider"
                            class="relative mx-auto w-full max-w-[560px] overflow-hidden xl:max-w-[600px] 2xl:max-w-[620px]"
                        >

                            {{-- IMAGE 01 --}}
                            <img
                                src="{{ asset('images/projects/ralph-home.jpg') }}"
                                alt="Ralph de Vinca Homepage"
                                class="project-slide absolute inset-0 z-10 block h-full w-full object-cover opacity-100 will-change-[opacity,transform]"
                            >

                            {{-- IMAGE 02 --}}
                            <img
                                src="{{ asset('images/projects/ralph-explore.png') }}"
                                alt="Ralph de Vinca Explore Page"
                                class="project-slide absolute inset-0 z-20 block h-full w-full object-cover opacity-0 will-change-[opacity,transform]"
                            >

                            {{-- IMAGE 03 --}}
                            <img
                                src="{{ asset('images/projects/ralph-detail.png') }}"
                                alt="Ralph de Vinca Perfume Detail"
                                class="project-slide absolute inset-0 z-20 block h-full w-full object-cover opacity-0 will-change-[opacity,transform]"
                            >

                            {{-- HEIGHT HOLDER --}}
                            <img
                                src="{{ asset('images/projects/ralph-home.jpg') }}"
                                alt=""
                                class="block h-auto w-full opacity-0"
                            >

                        </div>

                    </div>

                </div>


                {{-- PROJECT LIST --}}
                <div class="mt-20 lg:mt-28 xl:mt-32">

                    {{-- PROJECT 01 --}}
                    <article class="group border-t border-charcoal/10">

                        <a
                            href="{{ route('work') }}"
                            class="grid gap-8 py-10 lg:grid-cols-[80px_minmax(0,1fr)_300px_140px] lg:items-center lg:gap-x-12 xl:grid-cols-[90px_minmax(0,1fr)_340px_150px] xl:gap-x-16"
                        >

                            <div class="hidden lg:block">

                                <span class="text-[10px] tracking-[0.25em] text-muted">
                                    01
                                </span>

                            </div>

                            <div>

                                <h3 class="font-serif text-3xl text-charcoal transition-colors duration-300 group-hover:text-gold sm:text-4xl xl:text-5xl">
                                    Ralph de Vinca
                                </h3>

                                <p class="mt-2 text-[10px] uppercase tracking-[0.25em] text-muted">
                                    Perfumary
                                </p>

                            </div>

                            <div class="lg:pl-8">

                                <p class="text-sm leading-6 text-muted">
                                    A fragrance platform built with structured content,
                                    database-driven information, and a refined digital interface.
                                </p>

                            </div>

                            <div class="flex items-center justify-between lg:justify-end lg:gap-5">

                                <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                    Full-Stack Development
                                </span>

                                <span class="text-lg text-charcoal transition-transform duration-300 group-hover:translate-x-1 group-hover:text-gold">
                                    →
                                </span>

                            </div>

                        </a>

                    </article>


                    {{-- PROJECT 02 --}}
                    <article class="group border-t border-charcoal/10">

                        <a
                            href="{{ route('work') }}"
                            class="grid gap-8 py-10 lg:grid-cols-[80px_minmax(0,1fr)_300px_140px] lg:items-center lg:gap-x-12 xl:grid-cols-[90px_minmax(0,1fr)_340px_150px] xl:gap-x-16"
                        >

                            <div class="hidden lg:block">

                                <span class="text-[10px] tracking-[0.25em] text-muted">
                                    02
                                </span>

                            </div>

                            <div>

                                <h3 class="font-serif text-3xl text-charcoal transition-colors duration-300 group-hover:text-gold sm:text-4xl xl:text-5xl">
                                    Bali Cebelok Gesiuh
                                </h3>

                                <p class="mt-2 text-[10px] uppercase tracking-[0.25em] text-muted">
                                    Traditional Coconut Oil Experience
                                </p>

                            </div>

                            <div class="lg:pl-8">

                                <p class="text-sm leading-6 text-muted">
                                    A digital experience introducing Bali's
                                    traditional coconut oil making process.
                                </p>

                            </div>

                            <div class="flex items-center justify-between lg:justify-end lg:gap-5">

                                <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                    Web Experience
                                </span>

                                <span class="text-lg text-charcoal transition-transform duration-300 group-hover:translate-x-1 group-hover:text-gold">
                                    →
                                </span>

                            </div>

                        </a>

                    </article>


                    {{-- PROJECT 03 --}}
                    <article class="group border-t border-b border-charcoal/10">

                        <a
                            href="{{ route('work') }}"
                            class="grid gap-8 py-10 lg:grid-cols-[80px_minmax(0,1fr)_300px_140px] lg:items-center lg:gap-x-12 xl:grid-cols-[90px_minmax(0,1fr)_340px_150px] xl:gap-x-16"
                        >

                            <div class="hidden lg:block">

                                <span class="text-[10px] tracking-[0.25em] text-muted">
                                    03
                                </span>

                            </div>

                            <div>

                                <h3 class="font-serif text-3xl text-charcoal transition-colors duration-300 group-hover:text-gold sm:text-4xl xl:text-5xl">
                                    PKKMB INSTIKI 2026
                                </h3>

                                <p class="mt-2 text-[10px] uppercase tracking-[0.25em] text-muted">
                                    Student Attendance System
                                </p>

                            </div>

                            <div class="lg:pl-8">

                                <p class="text-sm leading-6 text-muted">
                                    A centralized attendance system designed to manage
                                    students, classes, attendance sessions, and administrative roles.
                                </p>

                            </div>

                            <div class="flex items-center justify-between lg:justify-end lg:gap-5">

                                <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                    Full-Stack Development
                                </span>

                                <span class="text-lg text-charcoal transition-transform duration-300 group-hover:translate-x-1 group-hover:text-gold">
                                    →
                                </span>

                            </div>

                        </a>

                    </article>

                </div>


                {{-- VIEW ALL --}}
                <div class="mt-14 flex justify-end">

                    <a
                        href="{{ route('work') }}"
                        class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                    >

                        <span>
                            View All Projects
                        </span>

                        <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </section>



        {{-- =========================================================
            ABOUT
        ========================================================= --}}
        <section
            id="about"
            class="scroll-mt-10 bg-white px-6 py-28 sm:px-8 lg:px-16 lg:py-36 xl:px-20 2xl:px-24"
        >

            <div class="mx-auto w-full max-w-[1500px]">

                {{-- SECTION LABEL --}}
                <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                    03 — About Me
                </p>


                {{-- MAIN STATEMENT --}}
                <div class="mt-10 lg:mt-14">

                    <h2 class="max-w-6xl font-serif text-3xl leading-[1.12] tracking-[-0.02em] text-charcoal sm:text-4xl lg:text-5xl xl:text-6xl">

                        I create digital experiences that are

                        <span class="italic text-gold">
                            thoughtful,
                        </span>

                        <span class="italic text-gold">
                            functional,
                        </span>

                        and built to leave an impression.

                    </h2>

                </div>


                {{-- SUPPORTING CONTENT --}}
                <div class="mt-16 grid gap-14 lg:grid-cols-[minmax(0,1fr)_400px] lg:gap-24 xl:grid-cols-[minmax(0,1fr)_440px] xl:gap-32">

                    {{-- LEFT --}}
                    <div class="max-w-2xl">

                        <p class="text-sm leading-8 text-muted sm:text-[15px]">
                            I'm a Full-Stack Developer based in Bali, Indonesia. I enjoy building web applications from the systems behind them to the interfaces people interact with.
                        </p>

                        <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                            My work focuses on combining backend logic, database architecture, and frontend development to create applications that are reliable, intuitive, and enjoyable to use.
                        </p>


                        {{-- SKILLS --}}
                        <div class="mt-12 border-t border-charcoal/10 pt-7">

                            <p class="text-[9px] uppercase tracking-[0.3em] text-gold">
                                Skills & Tools
                            </p>

                            <div class="mt-6 grid grid-cols-2 gap-y-5 sm:grid-cols-3">

                                <span class="text-sm text-charcoal">
                                    Full-Stack Development
                                </span>

                                <span class="text-sm text-charcoal">
                                    Backend Development
                                </span>

                                <span class="text-sm text-charcoal">
                                    Laravel
                                </span>

                                <span class="text-sm text-charcoal">
                                    Python
                                </span>

                                <span class="text-sm text-charcoal">
                                    Tailwind CSS
                                </span>

                                <span class="text-sm text-charcoal">
                                    JavaScript
                                </span>

                                <span class="text-sm text-charcoal">
                                    PHP
                                </span>

                                <span class="text-sm text-charcoal">
                                    MySQL
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <div class="overflow-hidden bg-cream">

                            <div class="aspect-[4/5]">

                                <img
                                    src="{{ asset('images/me.jpeg') }}"
                                    alt="Adrian — Web Developer & Digital Creator"
                                    class="h-full w-full object-cover object-center grayscale-[10%]"
                                >

                            </div>

                        </div>


                        {{-- DETAILS --}}
                        <div class="mt-8 border-t border-charcoal/10">

                            <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                                <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                    Based
                                </span>

                                <span class="text-sm text-charcoal">
                                    Bali, Indonesia
                                </span>

                            </div>


                            <div class="flex items-center justify-between border-b border-charcoal/10 py-5">

                                <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                    Focus
                                </span>

                                <span class="text-sm text-charcoal">
                                    Full-Stack Development
                                </span>

                            </div>


                            <div class="flex items-center justify-between py-5">

                                <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                    Available
                                </span>

                                <span class="text-sm text-gold">
                                    For Projects
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            CONTACT
        ========================================================= --}}
        <section
            id="contact"
            class="scroll-mt-10 relative overflow-hidden bg-gradient-to-b from-white via-[#FAF8F4] to-cream px-6 py-32 sm:px-8 lg:px-16 lg:py-44 xl:px-20 2xl:px-24"
        >

            {{-- DECORATIVE NUMBER --}}
            <div class="absolute left-8 top-1/2 hidden -translate-y-1/2 lg:block xl:left-12">

                <div class="flex items-center gap-4">

                </div>

            </div>


            <div class="mx-auto w-full max-w-[1500px]">

                <div class="grid gap-16 lg:grid-cols-[minmax(0,1fr)_400px] lg:items-end lg:gap-24 xl:grid-cols-[minmax(0,1fr)_440px] xl:gap-32">

                    {{-- MAIN MESSAGE --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Let's Talk
                        </p>


                        <h2 class="mt-6 max-w-5xl font-serif text-5xl leading-[0.95] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                            Have an idea?

                            <br>

                            Let's make it

                            <span class="italic text-gold">
                                happen.
                            </span>

                        </h2>


                        <p class="mt-8 max-w-xl text-sm leading-8 text-muted sm:text-[15px]">
                            Whether you have a project in mind, want to collaborate,
                            or simply want to say hello, feel free to reach out.
                        </p>


                        <div class="mt-10">

                            <a
                                href="mailto:mangadrian2@email.com"
                                class="group inline-flex items-center gap-5 border-b border-charcoal pb-3 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                            >

                                <span>
                                    Get In Touch
                                </span>

                                <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </a>

                        </div>

                    </div>


                    {{-- CONTACT DETAILS --}}
                    <div class="border-t border-charcoal/10 lg:border-l lg:border-t-0 lg:pl-12">

                        {{-- EMAIL --}}
                        <div class="border-b border-charcoal/10 py-6 lg:pt-0">

                            <p class="text-[9px] uppercase tracking-[0.3em] text-muted">
                                Email
                            </p>

                            <a
                                href="mailto:mangadrian2@email.com"
                                class="mt-3 block text-sm text-charcoal transition-colors duration-300 hover:text-gold"
                            >
                                mangadrian2@email.com
                            </a>

                        </div>


                        {{-- INSTAGRAM --}}
                        <div class="border-b border-charcoal/10 py-6">

                            <p class="text-[9px] uppercase tracking-[0.3em] text-muted">
                                Instagram
                            </p>

                            <a
                                href="https://www.instagram.com/clivechristian._"
                                target="_blank"
                                class="mt-3 block text-sm text-charcoal transition-colors duration-300 hover:text-gold"
                            >
                                @clivechristian._
                            </a>

                        </div>


                        {{-- GITHUB --}}
                        <div class="border-b border-charcoal/10 py-6">

                            <p class="text-[9px] uppercase tracking-[0.3em] text-muted">
                                GitHub
                            </p>

                            <a
                                href="https://github.com/Azaz-zel"
                                target="_blank"
                                class="mt-3 block text-sm text-charcoal transition-colors duration-300 hover:text-gold"
                            >
                                github.com/Azaz-zel
                            </a>

                        </div>


                        {{-- LOCATION --}}
                        <div class="py-6">

                            <p class="text-[9px] uppercase tracking-[0.3em] text-muted">
                                Location
                            </p>

                            <p class="mt-3 text-sm text-charcoal">
                                Bali, Indonesia
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            FOOTER
        ========================================================= --}}
        <footer class="bg-cream px-6 pb-8 pt-16 sm:px-8 lg:px-16 lg:pb-10 xl:px-20 2xl:px-24">

            <div class="mx-auto w-full max-w-[1500px]">

                {{-- TOP FOOTER --}}
                <div class="grid gap-12 border-b border-charcoal/10 pb-14 lg:grid-cols-[1fr_auto] lg:items-end">

                    {{-- BRAND --}}
                    <div>

                        <a
                            href="/"
                            class="inline-flex flex-col leading-none"
                        >

                            <span class="font-serif text-2xl tracking-wide text-charcoal">
                                Clive Christian
                            </span>

                            <span class="mt-2 text-[9px] uppercase tracking-[0.3em] text-muted">
                                Portfolio
                            </span>

                        </a>


                        <p class="mt-6 max-w-sm text-sm leading-7 text-muted">
                            Full-Stack Developer focused on building reliable web applications and thoughtful digital experiences.
                        </p>

                    </div>


                    {{-- FOOTER NAV --}}
                    <nav class="flex flex-wrap gap-x-8 gap-y-4">

                        <a
                            href="/"
                            class="text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                        >
                            Home
                        </a>

                        <a
                            href="{{ route('work') }}"
                            class="text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                        >
                            Work
                        </a>

                        <a
                            href="{{ route('about') }}"
                            class="text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                        >
                            About
                        </a>

                        <a
                            href="{{ route('contact') }}"
                            class="text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                        >
                            Contact
                        </a>

                    </nav>

                </div>


                {{-- BOTTOM FOOTER --}}
                <div class="flex flex-col gap-4 pt-7 sm:flex-row sm:items-center sm:justify-between">

                    <p class="text-[9px] uppercase tracking-[0.2em] text-muted">
                        © {{ date('Y') }} Clive Christian. All rights reserved.
                    </p>


                    <div class="flex items-center gap-3">

                        <span class="h-1 w-1 rounded-full bg-gold"></span>

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Bali, Indonesia
                        </span>

                    </div>


                    <a
                        href="#"
                        class="group inline-flex items-center gap-3 text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                    >

                        Back to top

                        <span class="transition-transform duration-300 group-hover:-translate-y-1">
                            ↑
                        </span>

                    </a>

                </div>

            </div>

        </footer>

    </main>


    {{-- =========================================================
        PROJECT SLIDESHOW
    ========================================================= --}}
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const slides = document.querySelectorAll('.project-slide');

            if (slides.length < 2) {
                return;
            }


            // Preload semua gambar supaya tidak ada gambar kosong
            slides.forEach(function (slide) {

                const preload = new Image();

                preload.src = slide.src;

            });


            let current = 0;


            function changeSlide() {

                const oldSlide = slides[current];

                const next = (current + 1) % slides.length;

                const newSlide = slides[next];


                // Siapkan gambar berikutnya
                newSlide.style.transition = 'none';
                newSlide.style.opacity = '1';
                newSlide.style.transform = 'scale(1.025)';
                newSlide.style.zIndex = '20';


                // Force browser repaint
                newSlide.offsetHeight;


                // Animasi gambar baru masuk
                newSlide.style.transition =
                    'opacity 900ms ease, transform 1200ms cubic-bezier(0.22, 1, 0.36, 1)';

                oldSlide.style.transition =
                    'opacity 900ms ease';


                newSlide.style.opacity = '1';
                newSlide.style.transform = 'scale(1)';


                // Gambar lama keluar setelah gambar baru sudah tampil
                setTimeout(function () {

                    oldSlide.style.opacity = '0';
                    oldSlide.style.zIndex = '10';
                    oldSlide.style.transform = 'scale(1)';
                    oldSlide.style.transition = 'none';

                }, 900);


                current = next;

            }


            setInterval(changeSlide, 4500);

        });

    </script>

@endsection