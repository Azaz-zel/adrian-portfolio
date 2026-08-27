@extends('layouts.app')

@section('content')

    <main class="flex min-h-screen items-center justify-center bg-cream px-6 py-16">

        <div class="w-full max-w-sm">

            <a href="/" class="mb-10 flex flex-col items-center leading-none">

                <span class="font-serif text-xl tracking-wide text-charcoal">
                    Clive Christian
                </span>

                <span class="mt-1 text-[9px] uppercase tracking-[0.25em] text-muted">
                    Portfolio
                </span>

            </a>

            <p class="text-center text-[10px] font-medium uppercase tracking-[0.35em] text-gold">
                Admin Access
            </p>

            <h1 class="mt-3 text-center font-serif text-3xl text-charcoal">
                Log In
            </h1>


            @if ($errors->any())

                <div class="mt-8 border border-red-300 bg-red-50 px-5 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>

            @endif


            <form
                method="POST"
                action="{{ route('login.store') }}"
                class="mt-10 space-y-7"
            >

                @csrf

                <div>

                    <label for="email" class="text-[9px] uppercase tracking-[0.25em] text-muted">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="mt-3 w-full border-b border-charcoal/20 bg-transparent pb-3 text-sm text-charcoal focus:border-gold focus:outline-none"
                    >

                </div>


                <div>

                    <label for="password" class="text-[9px] uppercase tracking-[0.25em] text-muted">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        required
                        class="mt-3 w-full border-b border-charcoal/20 bg-transparent pb-3 text-sm text-charcoal focus:border-gold focus:outline-none"
                    >

                </div>


                <button
                    type="submit"
                    class="w-full border border-charcoal py-3 text-[10px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:bg-charcoal hover:text-cream"
                >
                    Log In
                </button>

            </form>

        </div>

    </main>

@endsection
