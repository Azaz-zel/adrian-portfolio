<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Moves the three case studies that used to be hard-coded Blade pages into the
 * projects table. A migration (not a seeder) so a deploy, which only runs
 * `migrate --force`, brings them over exactly once.
 */
return new class extends Migration
{
    public function up(): void
    {
        $now = now();

        $projects = [
            [
                'slug' => 'ralph-de-vinca',
                'title' => 'Ralph de Vinca Perfumery',
                'category' => 'Full-stack development',
                'year' => 2026,
                'role' => 'Founder, design and development',
                'stack' => 'Laravel, PHP, MySQL, Blade, Tailwind CSS, JavaScript',
                'summary' => 'A fragrance platform combining structured content, database-driven perfume information, and a refined responsive interface.',
                'body' => "A home for the world of fragrance.\n\nRalph de Vinca Perfumery is my own brand, and this platform is its informational and educational home, centered on the world of fragrance.\n\nIt combines editorial storytelling with structured fragrance data, so visitors can explore perfumes, notes, ingredients and lessons in a calm, approachable interface.",
                'surface' => "Editorial home and explore views\nPerfume and fragrance note pages\nResponsive on every screen size",
                'function' => "Perfume catalog driven by the database\nSearch, filtering and categories\nFragrance Academy lessons",
                'foundation' => "Laravel routes, controllers and models\nMySQL relational schema\nBlade, Tailwind CSS and JavaScript",
                'cover_path' => 'images/projects/ralph-home.webp',
                'is_featured' => true,
                'position' => 1,
                'images' => [
                    ['images/projects/ralph-detail.webp', 'Our Story: the identity and idea behind Ralph de Vinca.', 'surface'],
                    ['images/projects/ralph-explore.webp', 'Fragrance Academy: notes, ingredients and the fundamentals of perfumery.', 'function'],
                ],
            ],
            [
                'slug' => 'bali-cebelok-gesiuh',
                'title' => 'Bali Cebelok Gesiuh',
                'category' => 'Web experience',
                'year' => 2026,
                'role' => 'Design and development',
                'stack' => 'Laravel, Blade, Tailwind CSS',
                'summary' => "A digital experience introducing visitors to Bali's traditional coconut oil making process and guiding them toward the booking experience.",
                'body' => "Bringing a traditional Balinese experience online.\n\nBali Cebelok Gesiuh is a traditional coconut oil making experience in Bali that invites visitors to learn directly from the people behind the tradition.\n\nThe website introduces the experience to travelers, tells its story, and makes it easier to understand what the class involves before booking.",
                'surface' => "The family and the tradition behind the class\nA step-by-step experience section\nA layout built for travelers on their phones",
                'function' => "Explains preparation, making and what guests take home\nLists what is included: coconut oil, cream and scrub\nBooking through WhatsApp",
                'foundation' => "Laravel routes and Blade views\nTailwind CSS",
                'cover_path' => 'images/projects/balicebelok.webp',
                'is_featured' => false,
                'position' => 2,
                'images' => [
                    ['images/projects/cebelok-story.webp', 'Story: the family and the tradition behind the class.', 'surface'],
                    ['images/projects/cebelok-experience.webp', 'Experience: what happens during the class.', 'function'],
                ],
            ],
            [
                'slug' => 'pkkmb-instiki',
                'title' => 'PKKMB INSTIKI 2026',
                'category' => 'Full-stack development',
                'year' => 2026,
                'role' => 'Founder, design and development',
                'stack' => 'Laravel, PHP, MySQL, Blade, Tailwind CSS',
                'summary' => 'A centralized attendance platform designed to manage student attendance, classes, sessions, and administrative access during PKKMB.',
                'body' => "Bringing structure to a large-scale student event.\n\nPKKMB INSTIKI 2026 needed a reliable way to track attendance across many classes and sessions, for more than 1,100 students, throughout the event.\n\nThe system gives administrators and session PJs (persons in charge) one clear view of attendance in real time, replacing manual and paper-based recording. It was delivered under Ralph de Vinca Technology, the software arm of the group I founded.",
                'surface' => "Admin dashboard with live attendance progress\nA focused dashboard for each class PJ\nClass attendance sheets and recaps",
                'function' => "Attendance per class and session\nRole-based access for admins and PJs\nViolation points and sanctions\nExcel import and export",
                'foundation' => "Laravel routing, controllers, models and access rules\nMySQL schema for students, classes, sessions and records\nBlade and Tailwind CSS dashboards",
                'cover_path' => 'images/projects/dashboard-absen.webp',
                'is_featured' => false,
                'position' => 3,
                'images' => [
                    ['images/projects/dashboard-pj.webp', 'PJ dashboard: the classes a coordinator is responsible for.', 'surface'],
                    ['images/projects/absensi-mahasiswa.webp', 'Class attendance sheet. Student names and ID numbers are blurred.', 'function'],
                    ['images/projects/rekap-kehadiran.webp', 'Attendance recap per student, exportable to Excel. Names and ID numbers are blurred.', 'foundation'],
                ],
            ],
        ];

        foreach ($projects as $project) {
            $images = $project['images'];
            unset($project['images']);

            $id = DB::table('projects')->insertGetId($project + [
                'live_url' => null,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            foreach ($images as $i => [$path, $caption, $layer]) {
                DB::table('project_images')->insert([
                    'project_id' => $id,
                    'path' => $path,
                    'caption' => $caption,
                    'layer' => $layer,
                    'position' => $i + 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }

    public function down(): void
    {
        DB::table('projects')->whereIn('slug', ['ralph-de-vinca', 'bali-cebelok-gesiuh', 'pkkmb-instiki'])->delete();
    }
};
