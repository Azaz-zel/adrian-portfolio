import { CloseCta } from '../Layouts/SiteLayout';

const work = [
    ['Web development', 'Responsive websites and web applications with Laravel, PHP, databases and modern frontend tools.'],
    ['Interface design', 'Clean interfaces with attention to typography, spacing, hierarchy and how they hold up on every screen.'],
    ['Digital content', 'Photography, video and visual storytelling that give a product a stronger voice.'],
];

const principles = [
    ['Purpose', 'Every feature and element should have a reason to exist.'],
    ['Clarity', 'Good interfaces make information and actions easy to understand.'],
    ['Detail', 'Small decisions in code and design make a noticeable difference.'],
];

const tools = [
    ['Development', ['Laravel', 'PHP', 'JavaScript', 'React', 'MySQL', 'Python']],
    ['Interface', ['Tailwind CSS', 'Blade', 'HTML', 'Responsive design']],
    ['Creative', ['Visual design', 'Photography', 'Video editing']],
    ['Workflow', ['Git', 'Figma', 'Vite', 'Laragon']],
];

export default function About() {
    return (
        <>
            <section className="mx-auto grid max-w-[1440px] gap-12 px-5 pt-12 pb-24 md:px-12 md:pt-[88px] md:pb-40 lg:grid-cols-[1fr_420px] lg:items-end lg:gap-24">
                <div className="flex flex-col gap-7">
                    <h1 className="font-display text-[clamp(2.5rem,6.2vw,4.75rem)] leading-[1.05]">
                        Somewhere between technology <span className="text-gold">and craft.</span>
                    </h1>
                    <div className="flex max-w-[38rem] flex-col gap-5 text-lg leading-relaxed text-muted">
                        <p className="text-ink">
                            I'm Adrian. I see web development as more than writing code: a good website communicates clearly, feels good to use, and has a solid structure behind
                            what people see.
                        </p>
                        <p>
                            That's why I work across the whole project, from interface and layout to the backend and the database. Alongside client work I founded Ralph de Vinca
                            Group, which runs two arms: Perfumery, a fragrance brand with its own platform, and Technology, where I build software for real operational needs.
                        </p>
                    </div>
                </div>
                <img
                    src="/images/profile.jpeg"
                    alt="Portrait of Adrian"
                    width="854"
                    height="1280"
                    className="aspect-[4/5] w-full max-w-[420px] rounded-[2px] object-cover"
                />
            </section>

            <section aria-labelledby="do-title" className="mx-auto max-w-[1440px] px-5 pb-24 md:px-12 md:pb-40">
                <h2 id="do-title" className="mb-10 font-display text-[2rem]">
                    What I do
                </h2>
                <dl className="border-b border-hair">
                    {work.map(([k, v]) => (
                        <div key={k} className="grid gap-3 border-t border-hair py-7 md:grid-cols-[minmax(0,1fr)_minmax(0,1.4fr)] md:gap-24">
                            <dt className="font-display text-[clamp(1.5rem,2.6vw,2.25rem)] leading-tight">{k}</dt>
                            <dd className="max-w-[40rem] text-lg text-muted md:pt-2">{v}</dd>
                        </div>
                    ))}
                </dl>
            </section>

            <section aria-labelledby="approach-title" className="bg-surface">
                <div className="mx-auto grid max-w-[1440px] gap-12 px-5 py-20 md:px-12 md:py-28 lg:grid-cols-[minmax(0,520px)_1fr] lg:gap-24">
                    <div className="flex flex-col gap-5">
                        <h2 id="approach-title" className="font-display text-[clamp(2rem,4vw,3rem)] leading-[1.1]">
                            Understand first, <span className="text-gold">build second.</span>
                        </h2>
                        <p className="max-w-[34rem] text-lg leading-relaxed text-muted">
                            Before deciding how something should be built, I ask what people should understand, what they should be able to do, and which information actually matters.
                            Then design and technology solve the problem instead of adding complexity.
                        </p>
                    </div>
                    <dl className="grid gap-8 sm:grid-cols-3 lg:pt-3">
                        {principles.map(([k, v]) => (
                            <div key={k} className="border-t border-ink pt-4">
                                <dt className="font-display text-2xl">{k}</dt>
                                <dd className="mt-2 text-muted">{v}</dd>
                            </div>
                        ))}
                    </dl>
                </div>
            </section>

            <section aria-labelledby="tools-title" className="mx-auto max-w-[1440px] px-5 py-24 md:px-12 md:py-40">
                <h2 id="tools-title" className="mb-10 font-display text-[2rem]">
                    Tools I work with
                </h2>
                <div className="grid gap-10 border-t border-hair pt-8 sm:grid-cols-2 lg:grid-cols-4">
                    {tools.map(([group, list]) => (
                        <div key={group}>
                            <h3 className="text-[13px] font-semibold text-muted">{group}</h3>
                            <ul className="mt-3 space-y-1.5 text-lg">
                                {list.map((t) => (
                                    <li key={t}>{t}</li>
                                ))}
                            </ul>
                        </div>
                    ))}
                </div>
            </section>

            <CloseCta />
        </>
    );
}
