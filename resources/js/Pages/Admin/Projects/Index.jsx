import { Head, Link } from '@inertiajs/react';

export default function ProjectsIndex({ projects }) {
    return (
        <>
            <Head title="Projects" />
            <div className="flex flex-wrap items-end justify-between gap-6">
                <div>
                    <h1 className="font-display text-[2rem]">Projects</h1>
                    <p className="mt-2 max-w-[60ch] text-muted">Published projects appear on Work in this order. The featured one leads the home page.</p>
                </div>
                <Link href="/admin/projects/create" className="btn btn-primary">
                    New project
                </Link>
            </div>

            {projects.length === 0 ? (
                <div className="mt-10 border-t border-hair pt-8">
                    <p className="font-display text-2xl">No projects yet.</p>
                    <p className="mt-2 text-muted">Add your first project. It stays a draft until you publish it.</p>
                </div>
            ) : (
                <div className="mt-10 overflow-x-auto">
                    <table className="w-full min-w-[720px] text-left">
                        <thead>
                            <tr className="border-b border-ink text-[13px] font-semibold text-muted">
                                <th scope="col" className="w-12 py-2.5 pr-4 font-semibold">
                                    #
                                </th>
                                <th scope="col" className="py-2.5 pr-4 font-semibold" colSpan={2}>
                                    Project
                                </th>
                                <th scope="col" className="py-2.5 pr-4 font-semibold">
                                    Category
                                </th>
                                <th scope="col" className="py-2.5 pr-4 font-semibold">
                                    Status
                                </th>
                                <th scope="col" className="py-2.5">
                                    <span className="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {projects.map((p) => (
                                <tr key={p.id} className="border-b border-hair align-middle">
                                    <td className="py-3.5 pr-4 text-[13px] font-semibold text-muted">{String(p.position).padStart(2, '0')}</td>
                                    <td className="w-[88px] py-3.5 pr-4">
                                        {p.cover ? (
                                            <img src={p.cover} alt="" className="aspect-[1.6/1] w-[72px] rounded-[2px] object-cover object-top" />
                                        ) : (
                                            <span className="block aspect-[1.6/1] w-[72px] rounded-[2px] bg-surface" />
                                        )}
                                    </td>
                                    <td className="py-3.5 pr-4">
                                        <p className="font-medium">{p.title}</p>
                                        <p className="text-sm text-muted">/work/{p.slug}</p>
                                    </td>
                                    <td className="py-3.5 pr-4 text-sm text-muted">{p.category}</td>
                                    <td className="py-3.5 pr-4">
                                        <span className="inline-flex items-center gap-3">
                                            <span className={`rounded-full border px-2.5 py-0.5 text-[13px] font-semibold ${p.is_published ? 'border-hair' : 'border-hair text-muted'}`}>
                                                {p.is_published ? 'Published' : 'Draft'}
                                            </span>
                                            {p.is_featured && <span className="text-[13px] font-semibold text-gold-text">Featured</span>}
                                        </span>
                                    </td>
                                    <td className="py-3.5 text-right whitespace-nowrap">
                                        <a href={`/work/${p.slug}`} target="_blank" rel="noopener" className="mr-5 text-[15px] text-muted hover:text-ink">
                                            {p.is_published ? 'View' : 'Preview'}
                                        </a>
                                        <Link href={`/admin/projects/${p.slug}/edit`} className="text-link text-[15px] font-medium">
                                            Edit <span className="sr-only">{p.title}</span>
                                        </Link>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            )}
        </>
    );
}
