import { Link } from '@inertiajs/react';
import Pyramid, { Plate } from '../../Components/Pyramid';
import { CloseCta } from '../../Layouts/SiteLayout';
import { Gold } from '../Home';

export default function Show({ project, next }) {
    const words = project.title.split(' ');
    const lastWord = words.length > 1 ? words.pop() : null;
    // A short first paragraph reads as a display lead; a long one gets a plain heading instead.
    const shortLead = project.paragraphs[0]?.length <= 90;
    const [lead, ...rest] = shortLead ? project.paragraphs : ['Overview', ...project.paragraphs];
    const facts = [
        ['Year', project.year],
        ['Type', project.category],
        ['Role', project.role],
        ['Stack', project.stack],
    ].filter(([, v]) => v);

    return (
        <>
            {!project.is_published && (
                <p role="status" className="bg-ink px-5 py-3 text-center text-sm text-paper">
                    Draft preview. Only you can see this page until it is published.
                </p>
            )}

            <section className="mx-auto grid max-w-[1440px] gap-12 px-5 pt-10 pb-12 md:px-12 md:pt-16 md:pb-[72px] lg:grid-cols-[1fr_400px] lg:items-end lg:gap-24">
                <div className="flex flex-col gap-7">
                    <Link href="/work" className="text-link self-start text-[15px] font-medium text-muted">
                        All work
                    </Link>
                    <h1 className="font-display text-[clamp(2.75rem,7vw,5.5rem)] leading-[1.03]">
                        {words.join(' ')} {lastWord && <span className="text-gold">{lastWord}</span>}
                    </h1>
                    <p className="max-w-[38rem] text-lg leading-relaxed text-muted">{project.summary}</p>
                    {project.live_url && (
                        <a href={project.live_url} className="btn btn-ghost self-start" target="_blank" rel="noopener noreferrer">
                            Visit the live site
                        </a>
                    )}
                </div>
                <dl className="border-b border-hair">
                    {facts.map(([k, v]) => (
                        <div key={k} className="grid grid-cols-[80px_1fr] gap-6 border-t border-hair py-4">
                            <dt className="pt-0.5 text-[13px] font-semibold text-muted">{k}</dt>
                            <dd>{v}</dd>
                        </div>
                    ))}
                </dl>
            </section>

            {project.cover && (
                <div className="mx-auto max-w-[1440px] px-5 pb-20 md:px-12 md:pb-[120px]">
                    <Plate src={project.cover} alt={`${project.title}, home screen`} eager />
                </div>
            )}

            {project.paragraphs.length > 0 && (
                <section aria-label="Overview" className="mx-auto grid max-w-[1440px] gap-8 px-5 pb-24 md:px-12 md:pb-40 lg:grid-cols-[minmax(0,520px)_1fr] lg:gap-24">
                    <h2 className="font-display text-[clamp(1.75rem,3.5vw,3rem)] leading-[1.12]">
                        <Gold text={lead} phrase={lead.split(' ').pop()} />
                    </h2>
                    {rest.length > 0 && (
                        <div className="flex max-w-[40rem] flex-col gap-5 text-lg leading-relaxed text-muted lg:pt-2">
                            {rest.map((p, i) => (
                                <p key={p} className={i === 0 ? 'text-ink' : undefined}>
                                    {p}
                                </p>
                            ))}
                        </div>
                    )}
                </section>
            )}

            {project.layers.some((l) => l.items.length) && (
                <section aria-labelledby="layers-title" className="mx-auto max-w-[1440px] px-5 pb-24 md:px-12 md:pb-40">
                    <h2 id="layers-title" className="mb-8 font-display text-[2rem] md:mb-10">
                        Read it in three layers
                    </h2>
                    <Pyramid project={project} />
                </section>
            )}

            {project.gallery.length > 0 && (
                <section aria-label="Gallery" className="mx-auto grid max-w-[1440px] gap-12 px-5 pb-24 md:grid-cols-2 md:gap-8 md:px-12 md:pb-40">
                    {project.gallery.map((img) => (
                        <figure key={img.id} className="flex flex-col gap-4">
                            <Plate src={img.url} alt={img.caption || `${project.title} screenshot`} pad="p-3 md:p-8" />
                            {img.caption && <figcaption className="text-sm text-muted">{img.caption}</figcaption>}
                        </figure>
                    ))}
                </section>
            )}

            {next && (
                <section className="border-t border-hair">
                    <Link
                        href={`/work/${next.slug}`}
                        aria-label={`Next project: ${next.title}`}
                        className="group mx-auto flex max-w-[1440px] flex-col gap-8 px-5 py-14 md:flex-row md:items-center md:justify-between md:px-12 md:py-[72px]"
                    >
                        <span>
                            <span className="block font-display text-[clamp(2rem,4vw,3rem)] leading-[1.1] decoration-1 underline-offset-8 group-hover:underline">
                                {next.title}
                            </span>
                        </span>
                        {next.cover && <Plate src={next.cover} alt="" pad="p-3 md:p-[18px]" className="w-full max-w-[360px]" />}
                    </Link>
                </section>
            )}

            <CloseCta />
        </>
    );
}
