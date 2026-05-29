<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Action',
                'description' => 'Genre yang menekankan pada adegan aksi, pertempuran, dan kecepatan.'
            ],
            [
                'name' => 'Fiction / Novel',
                'description' => 'Buku cerita fiksi dan karya sastra kreatif.'
            ],
            [
                'name' => 'Technology & IT',
                'description' => 'Buku panduan programming, jaringan, dan teknologi.'
            ],
            [
                'name' => 'Business & Economics',
                'description' => 'Buku manajemen, strategi bisnis, dan keuangan.'
            ],
            [
                'name' => 'Self Development',
                'description' => 'Buku pengembangan diri dan motivasi.'
            ],
            [
                'name' => 'Comic & Manga',
                'description' => 'Buku cerita bergambar dan komik lokal/internasional.'
            ]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
