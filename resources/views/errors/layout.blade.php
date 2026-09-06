@extends('layouts.app', ['title' => $title.' — Clive Christian'])

@section('content')

    <x-navbar />

    <main id="main-content" class="flex min-h-screen items-center bg-gradient-to-b from-cream via-[#F9F7F2] to-white px-6 py-32 sm:px-8 lg:px-12">

        <div class="mx-auto w-full max-w-7xl">

            <div class="mx-auto max-w-3xl">

                <p class="text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                    Error {{ $code }}
                </p>

                <h1 class="mt-6 font-serif text-5xl leading-[0.95] tracking-[-0.03em] text-charcoal sm:text-6xl lg:text-7xl">
                    {!! $heading !!}
                </h1>

                <p class="mt-8 max-w-xl text-sm leading-8 text-muted sm:text-[15px]">
                    {{ $message }}
                </p>

                <div class="mt-12 flex flex-col gap-5 sm:flex-row sm:items-center sm:gap-10">

                    <a
                        href="{{ route('home') }}"
                        class="group inline-flex items-center gap-4 border-b border-charcoal pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                    >

                        <span class="text-base transition-transform duration-300 group-hover:-translate-x-1">
                            ←
                        </span>

                        <span>
                            Back to Home
                        </span>

                    </a>

                    <a
                        href="{{ route('work') }}"
                        class="group inline-flex items-center gap-4 border-b border-charcoal/30 pb-2 text-[10px] font-medium uppercase tracking-[0.25em] text-muted transition-all duration-300 hover:border-gold hover:text-gold"
                    >

                        <span>
                            See the Work
                        </span>

                        <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </main>

    <x-footer />

@endsection
