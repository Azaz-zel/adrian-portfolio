import { Head, Link, useForm } from '@inertiajs/react';
import { describedBy, Field, focusFirstError } from '../Contact';

export default function Login() {
    const form = useForm({ email: '', password: '', remember: false });
    const { data, setData, errors, processing } = form;

    const submit = (e) => {
        e.preventDefault();
        form.post('/login', { onFinish: () => form.reset('password'), onError: focusFirstError });
    };

    return (
        <main id="main" className="flex min-h-dvh items-center justify-center px-5 py-16">
            <Head title="Sign in" />
            <div className="w-full max-w-[400px]">
                <Link href="/" className="font-display text-2xl">
                    Clive Christian
                </Link>
                <h1 className="mt-10 font-display text-[2rem]">Sign in</h1>
                <p className="mt-2 text-muted">For the site owner. Manage projects and read messages.</p>

                <form onSubmit={submit} noValidate className="mt-8 flex flex-col gap-6">
                    <Field id="email" label="Email" error={errors.email}>
                        <input
                            id="email"
                            type="email"
                            className="field"
                            autoComplete="username"
                            value={data.email}
                            onChange={(e) => setData('email', e.target.value)}
                            aria-invalid={!!errors.email}
                            aria-describedby={describedBy('email', errors.email)}
                            autoFocus
                            required
                        />
                    </Field>
                    <Field id="password" label="Password" error={errors.password}>
                        <input
                            id="password"
                            type="password"
                            className="field"
                            autoComplete="current-password"
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                            aria-invalid={!!errors.password}
                            aria-describedby={describedBy('password', errors.password)}
                            required
                        />
                    </Field>
                    <label className="flex items-center gap-3 text-[15px]">
                        <input type="checkbox" className="size-4 accent-ink" checked={data.remember} onChange={(e) => setData('remember', e.target.checked)} />
                        Keep me signed in
                    </label>
                    <button type="submit" className="btn btn-primary" disabled={processing}>
                        {processing ? 'Signing in…' : 'Sign in'}
                    </button>
                </form>
            </div>
        </main>
    );
}
