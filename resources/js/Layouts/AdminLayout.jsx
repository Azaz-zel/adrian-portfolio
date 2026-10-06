import { Link, router, usePage } from '@inertiajs/react';
import { useState } from 'react';

export function ConfirmButton({ children, confirmLabel, onConfirm, className = '' }) {
    const [asking, setAsking] = useState(false);

    if (!asking) {
        return (
            <button type="button" className={className} onClick={() => setAsking(true)}>
                {children}
            </button>
        );
    }

    return (
        <span className="inline-flex items-center gap-3">
            <button type="button" className="text-[15px] font-medium text-danger underline underline-offset-4" onClick={onConfirm} autoFocus>
                {confirmLabel}
            </button>
            <button type="button" className="text-[15px] text-muted" onClick={() => setAsking(false)}>
                Cancel
            </button>
        </span>
    );
}

export default function AdminLayout({ children }) {
    const { url, props } = usePage();
    const items = [
        { href: '/admin/projects', label: 'Projects' },
        { href: '/inbox', label: 'Inbox', count: props.awaitingReply },
    ];

    return (
        <>
            <a href="#main" className="skip-link">
                Skip to content
            </a>
            <header className="border-b border-hair">
                <div className="mx-auto flex max-w-[1440px] flex-wrap items-center justify-between gap-x-10 gap-y-3 px-5 py-4 md:px-12 md:py-5">
                    <div className="flex flex-wrap items-center gap-x-10 gap-y-2">
                        <Link href="/" className="font-display text-2xl">
                            Clive Christian
                        </Link>
                        <nav aria-label="Admin" className="flex gap-8">
                            {items.map((i) => {
                                const active = url.startsWith(i.href);
                                return (
                                    <Link
                                        key={i.href}
                                        href={i.href}
                                        aria-current={active ? 'page' : undefined}
                                        className={`flex items-center gap-2 border-b pb-1 text-[15px] font-medium ${active ? 'border-gold text-ink' : 'border-transparent text-muted hover:text-ink'}`}
                                    >
                                        {i.label}
                                        {i.count > 0 && (
                                            <span className="text-[13px] font-semibold text-gold-text">
                                                {i.count}
                                                <span className="sr-only"> awaiting reply</span>
                                            </span>
                                        )}
                                    </Link>
                                );
                            })}
                        </nav>
                    </div>
                    <div className="flex items-center gap-7 text-[15px] font-medium">
                        <a href="/" target="_blank" rel="noopener" className="text-link">
                            View site
                        </a>
                        <button type="button" className="text-muted hover:text-ink" onClick={() => router.post('/logout')}>
                            Sign out
                        </button>
                    </div>
                </div>
            </header>

            <div role="status" aria-live="polite" className="mx-auto max-w-[1104px] px-5">
                {props.flash.status && <p className="mt-6 border-l-2 border-gold py-1 pl-4">{props.flash.status}</p>}
            </div>

            <main id="main" className="mx-auto max-w-[1104px] px-5 pt-10 pb-24 md:pt-14">
                {children}
            </main>
        </>
    );
}
