# Clive Christian portfolio

The portfolio of I Nyoman Adrian Bayu Mahotama (Clive Christian), a full-stack developer in Bali. Laravel 13 serves the pages; React renders them through Inertia, so there is one app and no separate API.

## What it does

- **Public site**: Home, Work, a case study per project, About, Contact. Each case study reads in three layers (Surface, Function, Foundation); choosing a layer swaps the screenshot.
- **Contact form**: saves every message first, then emails it, so a mail outage never loses one. A honeypot field and a 5-per-minute limit keep spam out.
- **Admin** (`/login`): add and edit projects, upload a cover and screenshots, tag a screenshot to a layer, publish or keep a draft, pick the one project featured on the home page, and read the inbox.

## Run it locally

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate        # also loads the three existing case studies
php artisan storage:link   # serves uploaded images
php artisan admin:create   # asks for the admin email and password
npm run dev                # or: npm run build
```

Run the tests with `php artisan test`.

## Where things live

| Part | Path |
| --- | --- |
| Routes | `routes/web.php` |
| Public pages | `app/Http/Controllers/PageController.php`, `resources/js/Pages/` |
| Admin | `app/Http/Controllers/Admin/`, `resources/js/Pages/Admin/` |
| Project data | `app/Models/Project.php`, `app/Models/ProjectImage.php` |
| Layouts | `resources/js/Layouts/` |
| Design tokens | `resources/css/app.css` |
| Server-rendered meta, Open Graph and JSON-LD | `resources/views/app.blade.php` |

## Deploy

The `Dockerfile` builds one image (PHP 8.3, Apache). On start, `docker-entrypoint.sh` runs migrations and caches config, routes and views. Set at least `APP_KEY`, `APP_URL`, the `DB_*` variables and the `MAIL_*` variables.

Uploaded images go to the disk named by `MEDIA_DISK` (default `public`, inside the container). If your host wipes the container on every deploy, point `MEDIA_DISK` at an S3-compatible disk so uploads survive.

## Design

The design lives in Figma: <https://www.figma.com/design/O94GIsIUDsIQzqvm7QivPi>. Product context is in `PRODUCT.md`.
