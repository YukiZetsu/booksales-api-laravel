<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Tere Liye', 'email' => 'tereliye@booksales.com', 'negara' => 'Indonesia'],
            ['name' => 'Taylor Otwell', 'email' => 'taylor@laravel.com', 'negara' => 'United States'],
            ['name' => 'Robert T. Kiyosaki', 'email' => 'robert@richdad.com', 'negara' => 'United States'],
            ['name' => 'Raditya Dika', 'email' => 'raditya@booksales.com', 'negara' => 'Indonesia'],
            ['name' => 'James Clear', 'email' => 'james@atomicbits.com', 'negara' => 'United Kingdom']
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
