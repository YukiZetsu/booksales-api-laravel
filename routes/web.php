<?php

use Illuminate\Support\Facades\Route;

// 1. Redirect halaman utama ke /genres
Route::get('/', function () {
    return redirect('/genres');
});