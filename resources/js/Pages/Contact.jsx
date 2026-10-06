import { useForm, usePage } from '@inertiajs/react';
import { socials } from '../Layouts/SiteLayout';

export function Field({ id, label, error, required, hint, children }) {
    return (
        <div className="flex flex-col gap-2">
            <label htmlFor={id} className="flex items-baseline gap-2 text-[15px] font-medium">
                {label}
                {required && <span className="text-[13px] font-normal text-muted">required</span>}
            </label>
            {children}
            {hint && !error && (
                <p id={`${id}-hint`} className="text-sm text-muted">
                    {hint}
                </p>
            )}
            {error && (
                <p id={`${id}-error`} className="text-sm text-danger">
                    {error}
                </p>
            )}
        </div>
    );
}

export const describedBy = (id, error, hint) => (error ? `${id}-error` : hint ? `${id}-hint` : undefined);

// After a failed submit, move focus to the first field that needs fixing.
export const focusFirstError = (errors) => document.getElementById(Object.keys(errors)[0])?.focus();

export default function Contact() {
    const { flash } = usePage().props;
    const form = useForm({ name: '', email: '', message: '', website: '' });
    const { data, setData, errors, processing } = form;

    const submit = (e) => {
        e.preventDefault();
        form.post('/contact', { preserveScroll: true, onSuccess: () => form.reset(), onError: focusFirstError });
    };

    return (
        <section className="mx-auto grid max-w-[1440px] gap-16 px-5 pt-12 pb-24 md:px-12 md:pt-[88px] md:pb-40 lg:grid-cols-[1fr_minmax(0,560px)] lg:gap-24">
            <div className="flex flex-col gap-10">
                <div className="flex flex-col gap-7">
                    <h1 className="font-display text-[clamp(2.5rem,6.2vw,4.75rem)] leading-[1.05]">
                        Tell me what <span className="text-gold">you're building.</span>
                    </h1>
                    <p className="max-w-[34rem] text-lg leading-relaxed text-muted">
                        A website, a full-stack application, or a digital experience around your brand. I'm open to new projects and collaborations.
                    </p>
                </div>
                <dl className="max-w-[400px] border-b border-hair">
                    <div className="grid grid-cols-[100px_1fr] gap-6 border-t border-hair py-4">
                        <dt className="pt-0.5 text-[13px] font-semibold text-muted">Email</dt>
                        <dd>
                            <a className="text-link" href="mailto:mangadrian2@gmail.com">
                                mangadrian2@gmail.com
                            </a>
                        </dd>
                    </div>
                    <div className="grid grid-cols-[100px_1fr] gap-6 border-t border-hair py-4">
                        <dt className="pt-0.5 text-[13px] font-semibold text-muted">Based</dt>
                        <dd>Bali, Indonesia</dd>
                    </div>
                    <div className="grid grid-cols-[100px_1fr] gap-6 border-t border-hair py-4">
                        <dt className="pt-0.5 text-[13px] font-semibold text-muted">Elsewhere</dt>
                        <dd className="flex flex-wrap gap-x-5 gap-y-1">
                            {socials.map((s) => (
                                <a key={s.href} href={s.href} className="text-link" target="_blank" rel="noopener noreferrer">
                                    {s.label}
                                </a>
                            ))}
                        </dd>
                    </div>
                </dl>
            </div>

            <form onSubmit={submit} noValidate className="flex flex-col gap-6 lg:pt-4" aria-labelledby="form-title">
                <h2 id="form-title" className="font-display text-[2rem]">
                    Send a message
                </h2>

                <div role="status" aria-live="polite">
                    {flash.status && <p className="border-l-2 border-gold py-1 pl-4">{flash.status}</p>}
                </div>

                <Field id="name" label="Name" required error={errors.name}>
                    <input
                        id="name"
                        className="field"
                        autoComplete="name"
                        value={data.name}
                        onChange={(e) => setData('name', e.target.value)}
                        aria-invalid={!!errors.name}
                        aria-describedby={describedBy('name', errors.name)}
                        required
                    />
                </Field>
                <Field id="email" label="Email" required error={errors.email}>
                    <input
                        id="email"
                        type="email"
                        className="field"
                        autoComplete="email"
                        value={data.email}
                        onChange={(e) => setData('email', e.target.value)}
                        aria-invalid={!!errors.email}
                        aria-describedby={describedBy('email', errors.email)}
                        required
                    />
                </Field>
                <Field id="message" label="Message" required error={errors.message} hint="What you need, and roughly when.">
                    <textarea
                        id="message"
                        rows={7}
                        className="field resize-y"
                        value={data.message}
                        onChange={(e) => setData('message', e.target.value)}
                        aria-invalid={!!errors.message}
                        aria-describedby={describedBy('message', errors.message, true)}
                        required
                    />
                </Field>

                {/* Honeypot: hidden from people and screen readers, filled by bots. */}
                <div aria-hidden="true" className="absolute -left-[9999px] h-px w-px overflow-hidden">
                    <label htmlFor="website">Website</label>
                    <input id="website" tabIndex={-1} autoComplete="off" value={data.website} onChange={(e) => setData('website', e.target.value)} />
                </div>

                <button type="submit" className="btn btn-primary self-start" disabled={processing}>
                    {processing ? 'Sending…' : 'Send message'}
                </button>
            </form>
        </section>
    );
}
