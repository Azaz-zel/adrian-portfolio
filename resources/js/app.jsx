import { createInertiaApp } from '@inertiajs/react';
import { createRoot } from 'react-dom/client';
import AdminLayout from './Layouts/AdminLayout';
import SiteLayout from './Layouts/SiteLayout';

const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true });

createInertiaApp({
    title: (title) => (!title || title.includes('Clive Christian') ? title || 'Clive Christian' : `${title} | Clive Christian`),
    resolve: (name) => {
        const page = pages[`./Pages/${name}.jsx`];
        page.default.layout ??= name.startsWith('Admin/')
            ? (p) => <AdminLayout>{p}</AdminLayout>
            : name.startsWith('Auth/')
              ? undefined
              : (p) => <SiteLayout>{p}</SiteLayout>;
        return page;
    },
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />);
    },
    progress: { color: '#A8834F' },
});
