<header class="fixed left-0 top-0 z-50 w-full">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-8 lg:px-12">

        {{-- =====================================================
            LOGO
        ====================================================== --}}
        <a
            href="/"
            class="relative z-[100] flex flex-col leading-none"
        >

            <span class="font-serif text-xl tracking-wide text-charcoal">
                Clive Christian
            </span>

            <span class="mt-1 text-[9px] uppercase tracking-[0.25em] text-muted">
                Portfolio
            </span>

        </a>


        {{-- =====================================================
            DESKTOP NAVIGATION
        ====================================================== --}}
        <nav class="hidden items-center gap-10 md:flex">

            <a
                href="{{ route('work') }}"
                class="text-xs uppercase tracking-[0.2em] text-charcoal transition hover:text-gold"
            >
                Work
            </a>

            <a
                href="{{ route('about') }}"
                class="text-xs uppercase tracking-[0.2em] text-charcoal transition hover:text-gold"
            >
                About
            </a>

            <a
                href="{{ route('contact') }}"
                class="text-xs uppercase tracking-[0.2em] text-charcoal transition hover:text-gold"
            >
                Contact
            </a>

        </nav>


        {{-- =====================================================
            DESKTOP CTA
        ====================================================== --}}
        <a
            href="{{ route('contact') }}"
            class="hidden border border-charcoal px-5 py-2.5 text-[10px] uppercase tracking-[0.2em] text-charcoal transition hover:bg-charcoal hover:text-cream md:inline-flex"
        >
            Let's Talk
        </a>


        {{-- =====================================================
            MOBILE MENU BUTTON
        ====================================================== --}}
        <button
            id="mobile-menu-button"
            type="button"
            class="fixed right-6 top-7 z-[100] flex h-10 w-10 items-center justify-center md:hidden"
            aria-label="Open navigation"
            aria-expanded="false"
        >

            <span class="relative block h-4 w-6">

                <span class="menu-line menu-line-1"></span>

                <span class="menu-line menu-line-2"></span>

                <span class="menu-line menu-line-3"></span>

            </span>

        </button>

    </div>


    {{-- =====================================================
        MOBILE MENU
    ====================================================== --}}
    <div
        id="mobile-menu"
        class="mobile-menu fixed inset-0 z-[90] bg-cream"
    >

        <div class="flex min-h-screen flex-col justify-center px-6 sm:px-8">

            <nav class="flex flex-col">

                <a
                    href="/"
                    class="mobile-menu-link border-b border-charcoal/10 py-6 font-serif text-4xl text-charcoal"
                >
                    Home
                </a>

                <a
                    href="{{ route('work') }}"
                    class="mobile-menu-link border-b border-charcoal/10 py-6 font-serif text-4xl text-charcoal"
                >
                    Work
                </a>

                <a
                    href="{{ route('about') }}"
                    class="mobile-menu-link border-b border-charcoal/10 py-6 font-serif text-4xl text-charcoal"
                >
                    About
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="mobile-menu-link py-6 font-serif text-4xl text-charcoal"
                >
                    Contact
                </a>

            </nav>


            <a
                href="{{ route('contact') }}"
                class="mobile-menu-link mt-10 w-fit border border-charcoal px-6 py-3 text-[10px] uppercase tracking-[0.2em] text-charcoal"
            >
                Let's Talk
            </a>

        </div>

    </div>

</header>