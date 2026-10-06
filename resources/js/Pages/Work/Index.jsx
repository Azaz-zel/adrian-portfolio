import { Link } from '@inertiajs/react';
import { CloseCta } from '../../Layouts/SiteLayout';
import { ProjectCard } from '../Home';

export default function WorkIndex({ projects }) {
    return (
        <>
            <section className="mx-auto max-w-[1440px] px-5 pt-12 pb-14 md:px-12 md:pt-[88px] md:pb-20">
                <h1 className="font-display text-[clamp(2.5rem,6.2vw,4.75rem)] leading-[1.05]">
                    Selected <span className="text-gold">work.</span>
                </h1>
                <p className="mt-6 max-w-[36rem] text-lg leading-relaxed text-muted">
                    Web applications and digital projects built across frontend, backend, database and user experience.
                </p>
            </section>

            <section aria-label="Projects" className="mx-auto max-w-[1440px] px-5 pb-24 md:px-12 md:pb-40">
                {projects.length ? (
                    <div className="grid gap-x-8 gap-y-16 border-t border-hair pt-10 md:grid-cols-2 md:gap-y-24">
                        {projects.map((p) => (
                            <ProjectCard key={p.slug} project={p} />
                        ))}
                    </div>
                ) : (
                    <div className="border-t border-hair pt-8">
                        <p className="text-muted">No projects are published yet.</p>
                        <Link href="/contact" className="text-link mt-3 inline-block font-medium">
                            Ask me about current work
                        </Link>
                    </div>
                )}
            </section>

            <CloseCta />
        </>
    );
}
