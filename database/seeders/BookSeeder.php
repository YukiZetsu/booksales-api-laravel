<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Pulang',
                'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
                'price' => 40000,
                'stock' => 15,
                'cover_photo' => 'pulang.jpg',
                'genre_id' => 1,
                'author_id' => 1
            ],
            [
                'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
                'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
                'price' => 25000,
                'stock' => 5,
                'cover_photo' => 'sebuah_seni.jpg',
                'genre_id' => 2,
                'author_id' => 2
            ],
            [
                'title' => 'Naruto',
                'description' => 'Buku yang membahas tentang jalan ninja seseourang.',
                'price' => 30000,
                'stock' => 7,
                'cover_photo' => 'naruto.jpg',
                'genre_id' => 3,
                'author_id' => 3
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah perjuangan anak-anak daerah pedalaman Belitung dalam menempuh pendidikan.',
                'price' => 89000,
                'stock' => 20,
                'cover_photo' => 'laskar_pelangi.jpg',
                'genre_id' => 1,
                'author_id' => 4
            ],
            [
                'title' => 'Atomic Habits',
                'description' => 'Panduan mengubah hidup lewat perubahan-perubahan kecil yang konsisten setiap harinya.',
                'price' => 145000,
                'stock' => 12,
                'cover_photo' => 'atomic_habits.jpg',
                'genre_id' => 2,
                'author_id' => 5
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
