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