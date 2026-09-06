<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Intentionally empty. The admin account is created with
        // `php artisan admin:create`, which prompts for a password instead of
        // seeding a known one.
    }
}
