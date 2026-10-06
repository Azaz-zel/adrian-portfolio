import { Head, Link, usePage } from '@inertiajs/react';
import { useEffect, useRef, useState } from 'react';

const links = [
    { href: '/work', label: 'Work' },
    { href: '/about', label: 'About' },
];

export const socials = [
    { href: 'https://github.com/Azaz-zel', label: 'GitHub' },
    { href: 'https://www.instagram.com/clivechristian._', label: 'Instagram' },
    { href: 'https://www.linkedin.com/in/i-nyoman-adrian-bayu-mahotama-307717431', label: 'LinkedIn' },
];

function isActive(url, href) {
    return url === href || url.startsWith(`${href}/`);
}

function MobileMenu({ url }) {
    const [open, setOpen] = useState(false);
    const button = useRef(null);
    const panel = useRef(null);

    useEffect(() => setOpen(false), [url]);

    useEffect(() => {
        document.body.classList.toggle('overflow-hidden', open);
        if (!open) return;
        panel.current?.querySelector('a')?.focus();
        const onKey = (e) => {
            if (e.key === 'Escape') {
                setOpen(false);
                button.current?.focus();
            }
        };
        document.addEventListener('keydown', onKey);
        return () => document.removeEventListener('keydown', onKey);
    }, [open]);

    return (
        <div className="md:hidden">
            <button
                ref={button}
                type="button"
                className="btn btn-ghost min-h-10 px-4 py-2"
                aria-expanded={open}
                aria-controls="mobile-menu"
                onClick={() => setOpen(!open)}
            >
                {open ? 'Close' : 'Menu'}
            </button>
            <div
                id="mobile-menu"
                ref={panel}
                hidden={!open}
                className="fixed inset-x-0 top-16 bottom-0 z-40 bg-paper px-5 pt-8"
            >
                <nav aria-label="Mobile" className="flex flex-col">
                    {[{ href: '/', label: 'Home' }, ...links, { href: '/contact', label: 'Contact' }].map((l) => (
                        <Link
                            key={l.href}
                            href={l.href}
                            className="border-b border-hair py-5 font-display text-3xl"
                            aria-current={url === l.href ? 'page' : undefined}
                        >
                            {l.label}
                        </Link>
                    ))}
                </nav>
            </div>
        </div>
    );
}

export function CloseCta({ heading = 'Have something to build?' }) {
    return (
        <section className="border-t border-hair">
            <div className="mx-auto flex max-w-[1440px] flex-col gap-8 px-5 py-20 md:flex-row md:items-center md:justify-between md:px-12 md:py-28">
                <h2 className="max-w-[16ch] font-display text-[clamp(2.25rem,4.5vw,3rem)] leading-[1.1] md:max-w-none">
                    Have something <span className="text-gold">to build?</span>
                </h2>
                <div className="flex flex-col gap-3 md:items-end">
                    <Link href="/contact" className="btn btn-primary self-start md:self-end">
                        Start a conversation
                    </Link>
                    <p className="text-sm text-muted">
                        or write to{' '}
                        <a className="text-link text-ink" href="mailto:mangadrian2@gmail.com">
                            mangadrian2@gmail.com
                        </a>
                    </p>
                </div>
            </div>
        </section>
    );
}

export default function SiteLayout({ children }) {
    const { url, props } = usePage();

    return (
        <>
            {props.meta && <Head title={props.meta.title} />}
            <a href="#main" className="skip-link">
                Skip to content
            </a>
            <header className="sticky top-0 z-30 border-b border-hair bg-paper">
                <div className="mx-auto flex h-16 max-w-[1440px] items-center justify-between px-5 md:h-[72px] md:px-12">
                    <Link href="/" className="font-display text-2xl" aria-label="Clive Christian, home">
                        Clive Christian
                    </Link>
                    <nav aria-label="Main" className="hidden items-center gap-8 md:flex">
                        {links.map((l) => (
                            <Link
                                key={l.href}
                                href={l.href}
                                aria-current={isActive(url, l.href) ? 'page' : undefined}
                                className="text-[15px] font-medium underline-offset-[6px] aria-[current=page]:underline aria-[current=page]:decoration-gold"
                            >
                                {l.label}
                            </Link>
                        ))}
                        <Link href="/contact" className="btn btn-primary">
                            Start a conversation
                        </Link>
                    </nav>
                    <MobileMenu url={url} />
                </div>
            </header>

            <main id="main">{children}</main>

            <footer className="border-t border-hair">
                <div className="mx-auto flex max-w-[1440px] flex-col gap-4 px-5 py-7 text-sm md:flex-row md:items-center md:justify-between md:px-12">
                    <p className="text-muted">© {new Date().getFullYear()} Clive Christian</p>
                    <ul className="flex gap-7">
                        {socials.map((s) => (
                            <li key={s.href}>
                                <a href={s.href} className="text-link font-medium" target="_blank" rel="noopener noreferrer">
                                    {s.label}
                                </a>
                            </li>
                        ))}
                    </ul>
                </div>
            </footer>
        </>
    );
}
