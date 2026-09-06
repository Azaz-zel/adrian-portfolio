@extends('layouts.app')

@section('content')

    <main id="main-content" class="min-h-screen bg-cream px-6 py-16 sm:px-8 lg:px-12">

        <div class="mx-auto w-full max-w-5xl">

            {{-- =====================================================
                HEADER
            ====================================================== --}}
            <div class="flex flex-wrap items-end justify-between gap-6 border-b border-charcoal/10 pb-8">

                <div>

                    <a href="/" class="inline-flex flex-col leading-none">

                        <span class="font-serif text-lg tracking-wide text-charcoal">
                            Clive Christian
                        </span>

                        <span class="mt-1 text-[9px] uppercase tracking-[0.25em] text-muted">
                            Admin
                        </span>

                    </a>

                    <h1 class="mt-6 font-serif text-4xl text-charcoal sm:text-5xl">
                        Inbox
                    </h1>

                    <p class="mt-2 text-[10px] uppercase tracking-[0.25em] text-muted">
                        {{ $submissions->total() }} {{ $submissions->total() === 1 ? 'message' : 'messages' }} received
                        @if ($awaitingReplyCount > 0)
                            · <span class="text-gold">{{ $awaitingReplyCount }} awaiting reply</span>
                        @endif
                    </p>

                </div>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="border border-charcoal/20 px-5 py-2.5 text-[9px] uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-charcoal hover:bg-charcoal hover:text-cream"
                    >
                        Log Out
                    </button>

                </form>

            </div>


            {{-- =====================================================
                FLASH MESSAGE
            ====================================================== --}}
            @if (session('status'))

                <div class="mt-8 border border-gold/40 bg-gold/5 px-6 py-4 text-sm text-charcoal">
                    {{ session('status') }}
                </div>

            @endif


            {{-- =====================================================
                MESSAGES
            ====================================================== --}}
            @if ($submissions->isEmpty())

                <div class="mt-16 flex flex-col items-center justify-center border border-dashed border-charcoal/15 px-6 py-24 text-center">

                    <span class="font-serif text-4xl italic text-gold">
                        ✉
                    </span>

                    <p class="mt-6 font-serif text-2xl text-charcoal">
                        No messages yet
                    </p>

                    <p class="mt-2 max-w-xs text-sm leading-6 text-muted">
                        Submissions from the contact form will show up here.
                    </p>

                </div>

            @else

                <div class="mt-10 space-y-6">

                    @foreach ($submissions as $submission)

                        <article class="border border-charcoal/10 bg-white p-7 transition-all duration-300 hover:border-gold/40 hover:shadow-[0_15px_45px_rgba(0,0,0,0.05)] sm:p-9">

                            <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-4">

                                <div class="flex items-center gap-4">

                                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-charcoal font-serif text-base italic text-gold">
                                        {{ strtoupper(substr($submission->name, 0, 1)) }}
                                    </span>

                                    <div>

                                        <h2 class="font-serif text-xl text-charcoal">
                                            {{ $submission->name }}
                                        </h2>

                                        <a
                                            href="mailto:{{ $submission->email }}"
                                            class="text-sm text-gold transition-colors duration-300 hover:text-charcoal"
                                        >
                                            {{ $submission->email }}
                                        </a>

                                    </div>

                                </div>

                                <div class="flex shrink-0 flex-col items-end gap-2">

                                    @if ($submission->replied_at)
                                        <span class="rounded-full bg-gold/10 px-3 py-1 text-[9px] uppercase tracking-[0.2em] text-gold">
                                            Replied
                                        </span>
                                    @else
                                        <span class="rounded-full bg-charcoal/5 px-3 py-1 text-[9px] uppercase tracking-[0.2em] text-muted">
                                            Awaiting Reply
                                        </span>
                                    @endif

                                    <span
                                        class="text-[9px] uppercase tracking-[0.25em] text-muted"
                                        title="{{ $submission->created_at->format('d M Y, H:i') }}"
                                    >
                                        {{ $submission->created_at->diffForHumans() }}
                                    </span>

                                </div>

                            </div>

                            <p class="mt-6 max-w-2xl whitespace-pre-line border-t border-charcoal/10 pt-6 text-sm leading-7 text-muted">
                                {{ $submission->message }}
                            </p>

                            <div class="mt-6 flex flex-wrap items-center gap-x-8 gap-y-3">

                                <a
                                    href="mailto:{{ $submission->email }}?subject={{ rawurlencode('Re: your message to Clive Christian') }}"
                                    class="group/link inline-flex items-center gap-3 border-b border-charcoal pb-1 text-[9px] font-medium uppercase tracking-[0.25em] text-charcoal transition-all duration-300 hover:border-gold hover:text-gold"
                                >

                                    <span>
                                        Reply via Email
                                    </span>

                                    <span class="text-sm transition-transform duration-300 group-hover/link:translate-x-1">
                                        →
                                    </span>

                                </a>

                                <form method="POST" action="{{ route('inbox.toggle-replied', $submission) }}">

                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        class="text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-gold"
                                    >
                                        {{ $submission->replied_at ? 'Mark as Unreplied' : 'Mark as Replied' }}
                                    </button>

                                </form>

                                <form
                                    method="POST"
                                    action="{{ route('inbox.destroy', $submission) }}"
                                    onsubmit="return confirm('Delete this message permanently?');"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="text-[9px] uppercase tracking-[0.25em] text-muted transition-colors duration-300 hover:text-red-600"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </article>

                    @endforeach

                </div>


                <div class="mt-12">
                    {{ $submissions->onEachSide(1)->links('vendor.pagination.portfolio') }}
                </div>

            @endif

        </div>

    </main>

@endsection
