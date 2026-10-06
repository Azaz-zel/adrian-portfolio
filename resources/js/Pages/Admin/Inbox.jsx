import { Head, Link, router } from '@inertiajs/react';
import { ConfirmButton } from '../../Layouts/AdminLayout';

export default function Inbox({ submissions }) {
    const { data, prev_page_url: prev, next_page_url: next, total, current_page: page, last_page: last } = submissions;

    return (
        <>
            <Head title="Inbox" />
            <h1 className="font-display text-[2rem]">Inbox</h1>
            <p className="mt-2 text-muted">Messages from the contact form, newest first. Reply by email, then mark them replied.</p>

            {data.length === 0 ? (
                <div className="mt-10 border-t border-hair pt-8">
                    <p className="font-display text-2xl">No messages yet.</p>
                    <p className="mt-2 text-muted">When someone sends the contact form, it lands here and in your email.</p>
                </div>
            ) : (
                <ul className="mt-10 border-b border-hair">
                    {data.map((m) => (
                        <li key={m.id} className="grid gap-4 border-t border-hair py-7 md:grid-cols-[240px_1fr_auto] md:gap-10">
                            <div>
                                <p className="font-medium">{m.name}</p>
                                <a className="text-link text-sm break-all text-muted" href={`mailto:${m.email}`}>
                                    {m.email}
                                </a>
                                <p className="mt-1 text-sm text-muted">{m.received}</p>
                            </div>
                            <p className="max-w-[60ch] whitespace-pre-line [overflow-wrap:anywhere]">{m.message}</p>
                            <div className="flex flex-wrap items-start gap-x-5 gap-y-2 md:flex-col md:items-end">
                                <span className={`rounded-full border px-2.5 py-0.5 text-[13px] font-semibold ${m.replied ? 'border-hair text-muted' : 'border-ink text-ink'}`}>
                                    {m.replied ? 'Replied' : 'Awaiting reply'}
                                </span>
                                <button
                                    type="button"
                                    className="text-link text-[15px] font-medium"
                                    onClick={() => router.patch(`/inbox/${m.id}/toggle-replied`, {}, { preserveScroll: true })}
                                >
                                    {m.replied ? 'Mark as awaiting' : 'Mark as replied'}
                                </button>
                                <ConfirmButton
                                    className="text-[15px] text-muted hover:text-danger"
                                    confirmLabel="Delete message"
                                    onConfirm={() => router.delete(`/inbox/${m.id}`, { preserveScroll: true })}
                                >
                                    Delete
                                </ConfirmButton>
                            </div>
                        </li>
                    ))}
                </ul>
            )}

            {last > 1 && (
                <nav aria-label="Pagination" className="mt-8 flex items-center justify-between text-[15px]">
                    {prev ? (
                        <Link href={prev} className="text-link font-medium" preserveScroll>
                            Newer
                        </Link>
                    ) : (
                        <span />
                    )}
                    <span className="text-muted">
                        Page {page} of {last}, {total} messages
                    </span>
                    {next ? (
                        <Link href={next} className="text-link font-medium" preserveScroll>
                            Older
                        </Link>
                    ) : (
                        <span />
                    )}
                </nav>
            )}
        </>
    );
}
