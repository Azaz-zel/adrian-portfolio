import { useState } from 'react';

const LABELS = {
    surface: ['Surface', 'What people see and touch.'],
    function: ['Function', 'What it does for them.'],
    foundation: ['Foundation', 'What holds it up.'],
};

export function Plate({ src, alt, eager = false, pad = 'p-[clamp(12px,5vw,72px)]', className = '' }) {
    return (
        <div className={`rounded-[2px] bg-surface ${pad} ${className}`}>
            <img
                src={src}
                alt={alt}
                width="1920"
                height="928"
                loading={eager ? 'eager' : 'lazy'}
                fetchPriority={eager ? 'high' : undefined}
                className="aspect-[2.07/1] w-full rounded-[2px] border border-hair object-cover object-top"
            />
        </div>
    );
}

/**
 * A project read in three layers. Choosing a layer swaps the screenshot above it;
 * a layer without its own screenshot keeps the current one. Every layer's items
 * stay visible on wide screens, one at a time on phones.
 */
export default function Pyramid({ project, eager = false, title, surfaceImage }) {
    const layers = project.layers.filter((l) => l.items.length);
    const imageOf = (l) => (l.key === 'surface' && surfaceImage) || l.image;
    const [active, setActive] = useState(layers[0]?.key);
    const [activeImage, setActiveImage] = useState(() => layers.map(imageOf).find(Boolean) ?? project.cover);
    const images = [...new Set([activeImage, ...layers.map(imageOf)].filter(Boolean))];
    const choose = (l) => {
        setActive(l.key);
        if (imageOf(l)) setActiveImage(imageOf(l));
    };
    const id = `layers-${project.slug}`;

    return (
        <div className="flex flex-col gap-8 md:gap-10">
            <div className="rounded-[2px] bg-surface p-[clamp(12px,5vw,72px)]">
                <div className="relative aspect-[2.07/1] overflow-hidden rounded-[2px] border border-hair">
                    {(images.length ? images : [project.cover]).map((src) => (
                        <img
                            key={src}
                            src={src}
                            alt={src === activeImage ? `${project.title} screenshot` : ''}
                            width="1920"
                            height="928"
                            loading={eager && src === activeImage ? 'eager' : 'lazy'}
                            fetchPriority={eager && src === activeImage ? 'high' : undefined}
                            data-active={src === activeImage}
                            aria-hidden={src !== activeImage}
                            className="layer-image absolute inset-0 h-full w-full object-cover object-top"
                        />
                    ))}
                </div>
            </div>

            {title}

            {layers.length > 0 && (
                <div className="grid grid-cols-3 gap-x-4 md:gap-x-12" id={id}>
                    {layers.map((l, i) => {
                        const on = l.key === active;
                        return (
                            <button
                                key={l.key}
                                type="button"
                                aria-pressed={on}
                                aria-controls={`${id}-${l.key}`}
                                onClick={() => choose(l)}
                                style={{ gridColumnStart: i + 1, gridRowStart: 1 }}
                                className={`cursor-pointer pt-4 text-left md:pt-5 ${on ? 'border-t-2 border-ink' : 'border-t border-hair pb-px'}`}
                            >
                                <span className={`block text-center font-display text-lg md:text-left md:text-2xl ${on ? 'text-ink' : 'text-muted'}`}>
                                    {LABELS[l.key][0]}
                                </span>
                                <span className="mt-2 hidden text-sm text-muted md:block">{LABELS[l.key][1]}</span>
                            </button>
                        );
                    })}
                    {layers.map((l, i) => (
                        <ul
                            key={l.key}
                            id={`${id}-${l.key}`}
                            style={{ '--col': i + 1 }}
                            className={`col-span-3 col-start-1 row-start-2 mt-5 space-y-1.5 md:col-span-1 md:col-start-[var(--col)] md:mt-3 md:block ${
                                l.key === active ? 'text-ink' : 'hidden text-muted'
                            }`}
                        >
                            {l.items.map((item) => (
                                <li key={item}>{item}</li>
                            ))}
                        </ul>
                    ))}
                </div>
            )}
        </div>
    );
}
