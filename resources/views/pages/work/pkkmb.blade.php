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


                {{-- Hero Intro --}}
                <div class="mt-16 grid gap-12 lg:grid-cols-[1fr_360px] lg:items-center lg:gap-20">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            03 — Selected Project
                        </p>

                        <h1 class="mt-5 max-w-5xl font-serif text-5xl leading-[0.92] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl xl:text-8xl">

                            PKKMB

                            <span class="italic text-gold">
                                INSTIKI
                            </span>

                            2026

                        </h1>

                        <p class="mt-5 text-[10px] uppercase tracking-[0.3em] text-muted">
                            Student Attendance System
                        </p>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            A centralized attendance platform built to manage students, classes, sessions, and administrative roles during PKKMB.
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
                        src="{{ asset('images/projects/absensi-mahasiswa.png') }}"
                        alt="PKKMB INSTIKI 2026 Student Attendance"
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

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Project Overview
                        </p>

                        <h2 class="mt-5 max-w-3xl font-serif text-4xl leading-[1.05] tracking-[-0.02em] text-charcoal sm:text-5xl">

                            Bringing structure to a large-scale student event.

                        </h2>

                        <div class="mt-8 max-w-2xl">

                            <p class="text-sm leading-8 text-muted sm:text-[15px]">
                                PKKMB INSTIKI 2026 required a reliable way to
                                track attendance across many classes, sessions,
                                and over 1,100 students throughout the event.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                The system was built to give administrators and
                                session PJs (persons in charge) a clear, centralized
                                view of attendance in real time, replacing manual
                                and paper-based recording.
                            </p>

                            <p class="mt-6 text-sm leading-8 text-muted sm:text-[15px]">
                                It was delivered under
                                <span class="text-charcoal">Ralph de Vinca Technology</span>,
                                the software arm of the group I founded.
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
                                Fullstack Web Application
                            </span>

                        </div>


                        {{-- Built By --}}
                        <div class="flex items-center justify-between gap-6 border-b border-charcoal/10 py-5">

                            <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                                Built By
                            </span>

                            <span class="text-right text-sm text-charcoal">
                                Ralph de Vinca Technology
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
                                MySQL
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            EXPLORE THE SYSTEM
        ========================================================= --}}
        <section class="bg-white px-6 py-24 sm:px-8 lg:px-12 lg:py-36">

            <div class="mx-auto w-full max-w-7xl">

                {{-- Header --}}
                <div class="grid gap-10 lg:grid-cols-[1fr_420px] lg:items-center lg:gap-20">

                    {{-- LEFT --}}
                    <div>

                        <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                            Explore the System
                        </p>

                        <h2 class="mt-5 font-serif text-4xl leading-[1] tracking-[-0.02em] text-charcoal sm:text-5xl lg:text-6xl">

                            Built for admins,

                            <span class="italic text-gold">
                                PJs & students.
                            </span>

                        </h2>

                    </div>


                    {{-- RIGHT --}}
                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            Different roles get access to the information and
                            actions relevant to them, from managing sessions
                            to reviewing attendance recaps.
                        </p>

                    </div>

                </div>



                {{-- =====================================================
                    SCREENSHOT — ADMIN DASHBOARD
                ====================================================== --}}
                <div class="mt-16 lg:mt-24">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/dashboard-absen.png') }}"
                            alt="PKKMB Admin Dashboard showing live attendance statistics"
                            class="block h-auto w-full"
                        >

                    </div>


                    <div class="mt-8 grid gap-8 lg:grid-cols-[1fr_320px] lg:items-start">

                        <h3 class="font-serif text-3xl text-charcoal sm:text-4xl">
                            Admin Dashboard
                        </h3>

                        <p class="text-sm leading-7 text-muted">
                            Live visibility over the entire event: attendance
                            recorded across every class and session, plus point
                            and sanction tracking, all updating as the day runs.
                        </p>

                    </div>

                </div>



                {{-- =====================================================
                    SCREENSHOT — PJ DASHBOARD
                ====================================================== --}}
                <div class="mt-24 lg:mt-36">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/dashboard-pj.png') }}"
                            alt="PKKMB PJ Dashboard"
                            class="block h-auto w-full"
                        >

                    </div>


                    <div class="mt-8 grid gap-8 lg:grid-cols-[1fr_320px] lg:items-start">

                        <h3 class="font-serif text-3xl text-charcoal sm:text-4xl">
                            PJ Dashboard
                        </h3>

                        <p class="text-sm leading-7 text-muted">
                            A focused view for session PJs to record and
                            monitor attendance for the classes under their
                            responsibility.
                        </p>

                    </div>

                </div>



                {{-- =====================================================
                    SCREENSHOT — ATTENDANCE RECAP
                ====================================================== --}}
                <div class="mt-24 lg:mt-36">

                    <div class="overflow-hidden shadow-[0_25px_70px_rgba(0,0,0,0.08)]">

                        <img
                            src="{{ asset('images/projects/rekap-kehadiran.png') }}"
                            alt="PKKMB Attendance Recap"
                            class="block h-auto w-full"
                        >

                    </div>


                    <div class="mt-8 grid gap-8 lg:grid-cols-[1fr_320px] lg:items-start">

                        <h3 class="font-serif text-3xl text-charcoal sm:text-4xl">
                            Attendance Recap
                        </h3>

                        <p class="text-sm leading-7 text-muted">
                            A summarized, exportable view of attendance data
                            across classes and sessions, built to support
                            reporting after the event.
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

                            From attendance data

                            <span class="italic text-gold">
                                to clear reporting.
                            </span>

                        </h2>

                    </div>


                    <div>

                        <p class="text-sm leading-7 text-muted sm:text-[15px]">
                            The system was developed as a fullstack application,
                            with role-based access and a database structured
                            around classes, sessions, and attendance records.
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
                            Role-Based Access
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Separate access and views for admins, PJs, and
                            other administrative roles.
                        </p>

                    </div>


                    {{-- ITEM 02 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pl-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            02
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Class & Session Management
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Structured management of classes, sessions, and
                            the students assigned to them.
                        </p>

                    </div>


                    {{-- ITEM 03 --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pr-10 lg:border-b-0 lg:border-r lg:px-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            03
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Attendance Recording
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Centralized recording of student attendance
                            across every session.
                        </p>

                    </div>


                    {{-- ITEM 04 --}}
                    <div class="py-8 sm:pl-10 lg:pl-10">

                        <span class="text-[9px] tracking-[0.25em] text-muted">
                            04
                        </span>

                        <h3 class="mt-5 font-serif text-2xl text-charcoal">
                            Recap & Reporting
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            Summarized attendance recaps to support
                            administrative reporting.
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
                            PKKMB INSTIKI 2026 was built as a fullstack web
                            application, combining a structured backend,
                            relational database, and role-based interfaces.
                        </p>

                    </div>

                </div>


                {{-- TECHNOLOGY GRID --}}
                <div class="mt-16 grid border-t border-charcoal/10 sm:grid-cols-2 lg:grid-cols-3">

                    {{-- BACKEND --}}
                    <div class="border-b border-charcoal/10 py-8 sm:pr-10 lg:border-b-0 lg:border-r">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Backend
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            Laravel
                        </p>

                        <p class="mt-3 max-w-xs text-sm leading-6 text-muted">
                            Routing, controllers, models, role-based access,
                            and attendance logic.
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
                            Dashboard layouts, tables, and role-based
                            interface views.
                        </p>

                    </div>


                    {{-- DATABASE --}}
                    <div class="py-8 sm:pl-10 lg:pl-10">

                        <span class="text-[9px] uppercase tracking-[0.25em] text-muted">
                            Database
                        </span>

                        <p class="mt-4 font-serif text-2xl text-charcoal">
                            MySQL
                        </p>

                        <p class="mt-3 max-w-xs text-sm leading-6 text-muted">
                            Structured data for students, classes, sessions,
                            and attendance records.
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
                        PKKMB INSTIKI 2026
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
                            href="{{ route('work.ralph') }}"
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
