import { Head, Link, router, useForm, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';
import { ConfirmButton } from '../../../Layouts/AdminLayout';
import { describedBy, Field, focusFirstError } from '../../Contact';

const LAYER_LABELS = { surface: 'Surface', function: 'Function', foundation: 'Foundation' };
const LAYER_HINTS = {
    surface: 'What people see and touch.',
    function: 'What it does for them.',
    foundation: 'What holds it up.',
};

function Input({ id, form, label, required, hint, type = 'text', ...rest }) {
    return (
        <Field id={id} label={label} required={required} hint={hint} error={form.errors[id]}>
            <input
                id={id}
                type={type}
                className="field"
                value={form.data[id] ?? ''}
                onChange={(e) => form.setData(id, e.target.value)}
                aria-invalid={!!form.errors[id]}
                aria-describedby={describedBy(id, form.errors[id], hint)}
                required={required}
                {...rest}
            />
        </Field>
    );
}

function TextArea({ id, form, label, required, hint, rows = 4 }) {
    return (
        <Field id={id} label={label} required={required} hint={hint} error={form.errors[id]}>
            <textarea
                id={id}
                rows={rows}
                className="field resize-y"
                value={form.data[id] ?? ''}
                onChange={(e) => form.setData(id, e.target.value)}
                aria-invalid={!!form.errors[id]}
                aria-describedby={describedBy(id, form.errors[id], hint)}
                required={required}
            />
        </Field>
    );
}

function Switch({ id, form, label, hint }) {
    return (
        <label htmlFor={id} className="flex cursor-pointer items-start gap-3">
            <input id={id} type="checkbox" role="switch" className="peer sr-only" checked={form.data[id]} onChange={(e) => form.setData(id, e.target.checked)} />
            <span className="mt-0.5 flex h-6 w-10 shrink-0 items-center rounded-full bg-hair p-[3px] transition-colors peer-checked:bg-ink peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gold-text peer-checked:[&>span]:translate-x-4">
                <span className="size-[18px] rounded-full bg-paper transition-transform duration-150" />
            </span>
            <span>
                <span className="block text-[15px] font-medium">{label}</span>
                <span className="block text-sm text-muted">{hint}</span>
            </span>
        </label>
    );
}

function Group({ title, hint, children }) {
    return (
        <fieldset className="flex flex-col gap-5 border-t border-hair pt-6">
            <legend className="contents">
                <span className="block font-display text-2xl">{title}</span>
            </legend>
            {hint && <p className="-mt-3 text-sm text-muted">{hint}</p>}
            {children}
        </fieldset>
    );
}

function ImageItem({ slug, image, layers }) {
    const [caption, setCaption] = useState(image.caption ?? '');
    useEffect(() => setCaption(image.caption ?? ''), [image.caption]);
    const save = (patch) => router.patch(`/admin/projects/${slug}/images/${image.id}`, { caption, layer: image.layer, ...patch }, { preserveScroll: true });

    return (
        <li className="flex flex-col gap-3">
            <img src={image.url} alt="" className="aspect-[2.07/1] w-full rounded-[2px] border border-hair object-cover object-top" />
            <label className="flex flex-col gap-1.5 text-sm">
                <span className="font-medium">Layer</span>
                <select className="field py-2" value={image.layer ?? ''} onChange={(e) => save({ layer: e.target.value || null })}>
                    <option value="">Gallery only</option>
                    {layers.map((l) => (
                        <option key={l} value={l}>
                            {LAYER_LABELS[l]} tab
                        </option>
                    ))}
                </select>
            </label>
            <label className="flex flex-col gap-1.5 text-sm">
                <span className="font-medium">Caption</span>
                <input
                    className="field py-2"
                    value={caption}
                    maxLength={200}
                    onChange={(e) => setCaption(e.target.value)}
                    onBlur={() => caption !== (image.caption ?? '') && save({ caption })}
                />
            </label>
            <ConfirmButton
                className="self-start text-sm text-muted hover:text-danger"
                confirmLabel="Remove image"
                onConfirm={() => router.delete(`/admin/projects/${slug}/images/${image.id}`, { preserveScroll: true })}
            >
                Remove
            </ConfirmButton>
        </li>
    );
}

function Images({ project, layers }) {
    const { errors } = usePage().props;
    const [uploading, setUploading] = useState(false);
    const uploadError = errors.images ?? Object.entries(errors).find(([k]) => k.startsWith('images.'))?.[1];

    const upload = (e) => {
        const files = [...e.target.files];
        e.target.value = '';
        if (!files.length) return;
        router.post(`/admin/projects/${project.slug}/images`, { images: files }, {
            forceFormData: true,
            preserveScroll: true,
            onStart: () => setUploading(true),
            onFinish: () => setUploading(false),
        });
    };

    return (
        <Group title="Images" hint="Images save as soon as you change them. Give an image a layer to show it when that tab is chosen. A tab without its own image keeps showing the previous one.">
            {project.images.length === 0 && <p className="text-muted">No images yet. Screenshots of the real product work best.</p>}
            <ul className="grid gap-x-5 gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
                {project.images.map((image) => (
                    <ImageItem key={image.id} slug={project.slug} image={image} layers={layers} />
                ))}
            </ul>
            <div>
                <label
                    htmlFor="images"
                    className="flex min-h-[110px] cursor-pointer flex-col items-center justify-center gap-1 rounded-[2px] border border-dashed border-muted px-4 py-6 text-center focus-within:outline-2 focus-within:outline-gold-text"
                >
                    <span className="text-[15px] font-medium">{uploading ? 'Uploading…' : 'Add images'}</span>
                    <span className="text-sm text-muted">JPG, PNG or WebP, up to 4 MB each</span>
                    <input id="images" type="file" accept="image/jpeg,image/png,image/webp" multiple className="sr-only" onChange={upload} disabled={uploading} />
                </label>
                {uploadError && <p className="mt-2 text-sm text-danger">{uploadError}</p>}
            </div>
        </Group>
    );
}

export default function ProjectForm({ project, layers, nextPosition }) {
    const editing = !!project;
    const form = useForm({
        title: project?.title ?? '',
        slug: project?.slug ?? '',
        category: project?.category ?? '',
        year: project?.year ?? new Date().getFullYear(),
        role: project?.role ?? '',
        summary: project?.summary ?? '',
        body: project?.body ?? '',
        live_url: project?.live_url ?? '',
        stack: project?.stack ?? '',
        surface: project?.surface ?? '',
        function: project?.function ?? '',
        foundation: project?.foundation ?? '',
        cover: null,
        is_published: project?.is_published ?? false,
        is_featured: project?.is_featured ?? false,
        position: project?.position ?? nextPosition,
    });
    const [preview, setPreview] = useState(project?.cover ?? null);

    const submit = (e) => {
        e.preventDefault();
        if (editing) {
            form.transform((d) => ({ ...d, _method: 'put' }));
            form.post(`/admin/projects/${project.slug}`, { forceFormData: true, preserveScroll: true, onSuccess: () => form.setData('cover', null), onError: focusFirstError });
        } else {
            form.post('/admin/projects', { forceFormData: true, onError: focusFirstError });
        }
    };

    const pickCover = (e) => {
        const file = e.target.files[0] ?? null;
        form.setData('cover', file);
        if (file) setPreview(URL.createObjectURL(file));
    };

    return (
        <>
            <Head title={editing ? `Edit ${project.title}` : 'New project'} />
            <Link href="/admin/projects" className="text-link text-[15px] text-muted">
                Projects
            </Link>
            <h1 className="mt-2 font-display text-[2rem]">{editing ? project.title : 'New project'}</h1>

            <div className="mt-10 grid items-start gap-12 lg:grid-cols-[1fr_320px] lg:gap-16">
                <div className="flex flex-col gap-12">
                    <form id="project-form" onSubmit={submit} noValidate className="flex flex-col gap-12">
                        <Group title="Basics">
                            <Input id="title" form={form} label="Title" required />
                            <div className="grid gap-5 sm:grid-cols-[1fr_140px]">
                                <Input id="category" form={form} label="Category" required placeholder="Full-stack development" />
                                <Input id="year" form={form} label="Year" required type="number" min="2000" max="2100" />
                            </div>
                            <Input id="role" form={form} label="Role" placeholder="Design and development" />
                            <TextArea id="summary" form={form} label="Summary" required rows={3} hint="One or two sentences. Shown on cards and as the page description." />
                            <Input id="stack" form={form} label="Stack" placeholder="Laravel, MySQL, Tailwind CSS" />
                            <Input id="live_url" form={form} label="Live URL" type="url" placeholder="https://" hint="Optional. Leave empty if the site is not public." />
                        </Group>

                        <Group title="Cover">
                            <Field id="cover" label="Cover image" error={form.errors.cover} hint="Leads the case study and the cards. A wide screenshot works best.">
                                {preview && <img src={preview} alt="" className="aspect-[2.07/1] w-full max-w-[480px] rounded-[2px] border border-hair object-cover object-top" />}
                                <input
                                    id="cover"
                                    type="file"
                                    accept="image/jpeg,image/png,image/webp"
                                    onChange={pickCover}
                                    className="text-sm file:mr-4 file:cursor-pointer file:rounded-full file:border file:border-ink file:bg-transparent file:px-4 file:py-2 file:text-[15px] file:font-medium"
                                    aria-describedby={describedBy('cover', form.errors.cover, true)}
                                />
                            </Field>
                        </Group>

                        <Group title="The three layers" hint="One item per line. These become the Surface, Function and Foundation tabs.">
                            <div className="grid gap-5 md:grid-cols-3">
                                {layers.map((l) => (
                                    <TextArea key={l} id={l} form={form} label={LAYER_LABELS[l]} hint={LAYER_HINTS[l]} rows={7} />
                                ))}
                            </div>
                        </Group>

                        <Group title="Story">
                            <TextArea id="body" form={form} label="Body" rows={9} hint="Plain paragraphs, separated by a blank line. A short first line shows as a large lead." />
                        </Group>
                    </form>

                    {editing ? <Images project={project} layers={layers} /> : <p className="border-t border-hair pt-6 text-muted">You can add images after creating the project.</p>}
                </div>

                <aside className="flex flex-col gap-6 rounded-[2px] bg-surface p-6 lg:sticky lg:top-6">
                    <h2 className="font-display text-2xl">Publishing</h2>
                    <Switch id="is_published" form={form} label="Published" hint="Visible on Work and in the sitemap." />
                    <Switch id="is_featured" form={form} label="Featured on home" hint="Only one project can be featured." />
                    <Input
                        id="slug"
                        form={form}
                        label="Address"
                        hint={`/work/${form.data.slug || 'made-from-the-title'}`}
                        placeholder="made from the title"
                    />
                    <Input id="position" form={form} label="Order" type="number" min="0" hint="Lower numbers come first." />
                    <button type="submit" form="project-form" className="btn btn-primary w-full" disabled={form.processing}>
                        {form.processing ? 'Saving…' : editing ? 'Save changes' : 'Create project'}
                    </button>
                    {editing && (
                        <ConfirmButton
                            className="self-start text-[15px] text-danger"
                            confirmLabel="Delete for good"
                            onConfirm={() => router.delete(`/admin/projects/${project.slug}`)}
                        >
                            Delete project
                        </ConfirmButton>
                    )}
                </aside>
            </div>
        </>
    );
}
