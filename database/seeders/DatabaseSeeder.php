<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Panggil semua seeder secara berurutan di sini
        $this->call([
            GenreSeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}
