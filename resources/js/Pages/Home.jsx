import { Link } from '@inertiajs/react';
import Pyramid, { Plate } from '../Components/Pyramid';
import { CloseCta } from '../Layouts/SiteLayout';

export function Gold({ text, phrase }) {
    const i = text.lastIndexOf(phrase);
    if (!phrase || i < 0) return text;
    return (
        <>
            {text.slice(0, i)}
            <span className="text-gold">{phrase}</span>
        </>
    );
}

export function ProjectCard({ project }) {
    return (
        <article className="group flex flex-col gap-5">
            <Link href={`/work/${project.slug}`} aria-hidden="true" tabIndex={-1}>
                <Plate src={project.cover} alt="" pad="p-3 md:p-8" />
            </Link>
            <div className="flex flex-col gap-1 sm:flex-row sm:items-baseline sm:justify-between sm:gap-4">
                <h3 className="font-display text-2xl">
                    <Link href={`/work/${project.slug}`} className="text-link decoration-transparent">
                        {project.title}
                    </Link>
                </h3>
                <p className="text-sm text-muted">
                    {project.category}, {project.year}
                </p>
            </div>
            <p className="max-w-[56ch] text-muted">{project.summary}</p>
        </article>
    );
}

export default function Home({ featured, index, more }) {
    return (
        <>
            <section className="mx-auto grid max-w-[1440px] gap-12 px-5 pt-12 pb-12 md:px-12 md:pt-[88px] md:pb-[72px] lg:grid-cols-[1fr_440px] lg:items-end lg:gap-24">
                <div className="flex flex-col gap-7">
                    <h1 className="font-display text-[clamp(2.5rem,6.2vw,4.75rem)] leading-[1.05]">
                        I build the system <br className="hidden sm:block" />
                        and <span className="text-gold">the surface.</span>
                    </h1>
                    <p className="max-w-[34rem] text-lg leading-relaxed text-muted">
                        Full-stack developer in Bali and founder of Ralph de Vinca Group. I build from the database schema to the screen.
                    </p>
                    <div className="flex flex-wrap items-center gap-x-6 gap-y-3">
                        <Link href="/contact" className="btn btn-primary">
                            Start a conversation
                        </Link>
                        <p className="text-sm text-muted">Open for projects in 2026</p>
                    </div>
                </div>

                {index.length > 0 && (
                    <nav aria-label="Selected work" className="hidden lg:block">
                        <p className="mb-3.5 text-[13px] font-semibold text-muted">Selected work</p>
                        <ol className="border-b border-hair">
                            {index.map((p) => {
                                const isFeatured = p.slug === featured?.slug;
                                return (
                                    <li key={p.slug} className={`flex items-start gap-5 py-[18px] ${isFeatured ? 'border-t border-ink' : 'border-t border-hair'}`}>
                                        <div className="flex-1">
                                            <Link href={`/work/${p.slug}`} className={`font-display text-2xl ${isFeatured ? 'text-ink' : 'text-muted hover:text-ink'}`}>
                                                {p.title}
                                            </Link>
                                            <p className="mt-1 text-sm text-muted">
                                                {p.category}, {p.year}
                                            </p>
                                        </div>
                                        {isFeatured && <span className="pt-1.5 text-[13px] font-semibold text-gold-text">Shown below</span>}
                                    </li>
                                );
                            })}
                        </ol>
                    </nav>
                )}
            </section>

            {featured ? (
                <section id="featured" aria-labelledby="featured-title" className="mx-auto max-w-[1440px] px-5 pb-24 md:px-12 md:pb-40">
                    <Pyramid
                        project={featured}
                        surfaceImage={featured.cover}
                        eager
                        title={
                            <div className="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                                <div className="flex flex-col gap-4">
                                    <h2 id="featured-title" className="font-display text-[clamp(2rem,4vw,3rem)] leading-[1.1]">
                                        <Gold text={featured.title} phrase={featured.title.split(' ').slice(-1)[0]} />
                                    </h2>
                                    <p className="max-w-[40rem] text-lg text-muted">{featured.summary}</p>
                                </div>
                                <Link href={`/work/${featured.slug}`} className="btn btn-ghost self-start md:self-end">
                                    Read the case study
                                </Link>
                            </div>
                        }
                    />
                </section>
            ) : (
                <section className="mx-auto max-w-[1440px] px-5 pb-24 md:px-12">
                    <p className="border-t border-hair pt-6 text-muted">Projects are on their way. In the meantime, start a conversation.</p>
                </section>
            )}

            {more.length > 0 && (
                <section aria-labelledby="more-title" className="mx-auto max-w-[1440px] px-5 pb-24 md:px-12 md:pb-40">
                    <div className="mb-10 flex items-center justify-between border-t border-hair pt-6">
                        <h2 id="more-title" className="font-display text-[2rem]">
                            More work
                        </h2>
                        <Link href="/work" className="btn btn-ghost">
                            See all work
                        </Link>
                    </div>
                    <div className="grid gap-14 md:grid-cols-2 md:gap-8">
                        {more.map((p) => (
                            <ProjectCard key={p.slug} project={p} />
                        ))}
                    </div>
                </section>
            )}

            <section aria-label="About" className="mx-auto grid max-w-[1440px] gap-10 px-5 pb-24 md:grid-cols-[minmax(0,420px)_1fr] md:items-end md:gap-24 md:px-12 md:pb-40">
                <img
                    src="/images/me.jpeg"
                    alt="Adrian, the developer behind Clive Christian"
                    width="960"
                    height="1280"
                    loading="lazy"
                    className="aspect-[4/5] w-full max-w-[420px] rounded-[2px] object-cover"
                />
                <div className="flex flex-col gap-10">
                    <p className="max-w-[24ch] font-display text-[clamp(1.75rem,3vw,2.25rem)] leading-[1.2] md:max-w-[34ch]">
                        I run <span className="text-gold">Ralph de Vinca Group</span>: a fragrance brand with its own platform, and a technology arm that builds software for real
                        operations.
                    </p>
                    <dl className="flex flex-wrap gap-x-14 gap-y-5">
                        {[
                            ['Based', 'Bali, Indonesia'],
                            ['Role', 'Founder and developer'],
                            ['Availability', 'Open for projects'],
                        ].map(([k, v]) => (
                            <div key={k}>
                                <dt className="text-[13px] font-semibold text-muted">{k}</dt>
                                <dd className="mt-1.5">{v}</dd>
                            </div>
                        ))}
                    </dl>
                    <Link href="/about" className="text-link self-start font-medium">
                        More about me
                    </Link>
                </div>
            </section>

            <CloseCta />
        </>
    );
}
