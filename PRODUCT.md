# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack

Laravel 13 (PHP 8.3) backend with React rendered through Inertia.js. The owner asked for React on the frontend and Laravel kept as the backend; Inertia was chosen (delegated) because it keeps Laravel routing, sessions, auth, validation and the existing deploy as one app, with no separate API to secure. Tailwind CSS v4 via Vite. Deployed as one Docker image (php:8.3-apache, PostgreSQL in production, SQLite locally).

## Users

Two audiences, weighted equally:

- **Prospective clients**: people or small businesses who want a website, web app or brand-led digital experience built. They judge by finished work, how it was built, and how easy it is to start a conversation.
- **Recruiters and hiring teams**: they judge technical depth, range across frontend, backend and database, and real shipped projects.

A third, private user is the **owner as admin**, who signs in to read contact messages and to add or edit projects without touching code.

## Product Purpose

The personal portfolio of I Nyoman Adrian Bayu Mahotama, published under the name "Clive Christian": a full-stack developer based in Bali, Indonesia, and founder of Ralph de Vinca Group. It shows selected projects as case studies and turns interest into a contact message. Success means a visitor understands what Adrian builds within the first screen, reads at least one case study, and either sends a message or saves the profile.

## Positioning

A developer who builds both the system and the surface, and who runs his own operating company: Ralph de Vinca Group has two arms, Perfumery (a fragrance brand and its platform) and Technology (software for real operational needs). The PKKMB attendance system was built under the Technology arm. Case studies come from products he owns or shipped, not exercises.

## Operating Context

- Public pages: Home, Work (project index), one case study page per project, About, Contact.
- Contact form stores every message before emailing it, so a mail outage never loses a message. Spam is handled by a honeypot field and a 5-per-minute rate limit.
- Admin (single account, created with `php artisan admin:create`): sign in, read the inbox, mark messages replied, delete messages, and manage projects (create, edit, publish/unpublish, reorder, upload cover and gallery images).
- SEO matters: sitemap.xml, robots.txt, per-page title/description/Open Graph image, and JSON-LD linking the "Clive Christian" name to the legal name.

## Capabilities and Constraints

- Every project is a full case study: title, slug, category, one-line summary, year, role, tech stack, cover image, gallery, body text, optional live URL.
- Existing URLs must keep working: `/work/ralph-de-vinca`, `/work/bali-cebelok-gesiuh`, `/work/pkkmb-instiki`.
- Screenshots of the PKKMB system must not show real student names or student ID numbers (NIM).
- Site copy is in English.
- Undecided: whether to add a downloadable CV for recruiters (no CV file exists yet).

## Brand Commitments

- Public name "Clive Christian"; legal name I Nyoman Adrian Bayu Mahotama; "CC" monogram favicon.
- Visual theme must stay in the Ralph de Vinca family, and the owner asked for a minimalist direction.
- Voice: plain, calm, first person. No hype words.

## Evidence on Hand

- Three real projects with screenshots in `public/images/projects/`: Ralph de Vinca Perfumery, Bali Cebelok Gesiuh, PKKMB INSTIKI 2026.
- Portrait photos: `public/images/me.jpeg`, `public/images/profile.jpeg`.
- Real profiles: GitHub `Azaz-zel`, Instagram `clivechristian._`, LinkedIn.
- Absent, and must not be invented: testimonials, client logos, metrics or usage numbers, awards.

## Product Principles

1. Work first: the projects are the proof, so they lead and everything else supports them.
2. Show the system, not just the surface: each case study names what was built and with what.
3. One clear next step per page, and it is always the same contact action.
4. Real content only: an empty section is better than an invented one.
5. Owner-editable: adding a project must never require a code change.

## Accessibility & Inclusion

WCAG 2.2 AA: keyboard navigation with visible focus, skip link, reduced-motion support, AA contrast, and alt text on every project image. These already exist in the current site and must not regress.
