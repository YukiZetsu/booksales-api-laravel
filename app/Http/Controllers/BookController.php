<?php

namespace App\Http\Controllers;

use App\Models\Book;   // 👈 Mengambil data lewat Model Book dari DB
use App\Models\Author; // 👈 Mengambil data lewat Model Author dari DB
use Illuminate\Http\Request;

class BookController extends Controller
{
    // 1. Menampilkan data BUKU dari Database MySQL (Sama seperti Genre)
    public function indexBook() {
        $books = Book::all(); // Mengambil semua data dari tabel books

        return response()->json([
            "success" => true,
            "message" => "Get All Resources",
            "data" => $books
        ], 200); 
    }

    // 2. Menampilkan data AUTHOR dari Database MySQL (Sama seperti Genre)
    public function indexAuthor() {
        $authors = Author::all(); // Mengambil semua data dari tabel authors

        return response()->json([
            "success" => true,
            "message" => "Get All Resources",
            "data" => $authors
        ], 200); 
    }
}