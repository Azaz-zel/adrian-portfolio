@if ($paginator->hasPages())

    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between gap-6 border-t border-charcoal/10 pt-6">

        {{-- PREVIOUS --}}
        @if ($paginator->onFirstPage())
            <span class="text-[9px] uppercase tracking-[0.25em] text-muted/40">
                ← Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="text-[9px] uppercase tracking-[0.25em] text-charcoal transition-colors duration-300 hover:text-gold">
                ← Previous
            </a>
        @endif


        {{-- PAGE NUMBERS --}}
        <div class="flex items-center gap-1">

            @foreach ($elements as $element)

                @if (is_string($element))
                    <span class="px-2 text-sm text-muted">
                        {{ $element }}
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page" class="flex h-8 w-8 items-center justify-center font-serif text-sm italic text-gold">
                                {{ $page }}
                            </span>
                        @else
                            <a
                                href="{{ $url }}"
                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                class="flex h-8 w-8 items-center justify-center text-sm text-muted transition-colors duration-300 hover:text-charcoal"
                            >
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif

            @endforeach

        </div>


        {{-- NEXT --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="text-[9px] uppercase tracking-[0.25em] text-charcoal transition-colors duration-300 hover:text-gold">
                Next →
            </a>
        @else
            <span class="text-[9px] uppercase tracking-[0.25em] text-muted/40">
                Next →
            </span>
        @endif

    </nav>

@endif
