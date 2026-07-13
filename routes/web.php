<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AdminPostController; // Pastikan ini ada

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. ROUTE UTAMA (PUBLIC ACCESS)

// Beranda (Home)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// --- START: HALAMAN STATIS NAVBAR YANG DIPISAHKAN ---

// Halaman Profil Perusahaan
Route::get('/profile-perusahaan', function () {
    return view('pages.profile');
})->name('company.profile');

// Halaman Layanan Kami
Route::get('/layanan-kami', function () {
    return view('pages.services');
})->name('services');

// Halaman Contact Us
Route::get('/hubungi-kami', function () {
    return view('pages.contact');
})->name('contact');

// --- END: HALAMAN STATIS NAVBAR YANG DIPISAHKAN ---

// Halaman Dinamis KNOWLEDGE (Database Peraturan)
Route::get('/knowledge', [ContentController::class, 'indexKnowledge'])
    ->name('knowledge');

// Halaman Dinamis NEWS (Berita & Opini)
Route::get('/news', [ContentController::class, 'indexNews'])
    ->name('news');

// Halaman Detail Konten (Berita/Peraturan)
Route::get('/post/{slug}', [ContentController::class, 'show'])
    ->name('post.show');

// ---------------------------------------------------------------------

// 2. ROUTE AUTHENTICATION & PROTECTED ROUTES (Breeze Defaults & Custom)

Route::middleware(['auth'])->group(function () {
    
    // Default Breeze Dashboard (Digunakan untuk Admin Panel)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // DASHBOARD USER (Untuk User Biasa)
    Route::get('/profile', function () {
        return view('user.profile'); 
    })->name('user.profile');
    
    // Route CRUD untuk mengelola Posts (Knowledge, News, Opini)
    Route::resource('admin/posts', AdminPostController::class)
        ->names('admin.posts');
});

require __DIR__.'/auth.php';

// Tambahkan Route ini untuk mengatasi error 'Route [search] not defined'
Route::get('/search', function () {
    // Pada implementasi nyata, di sini Anda akan memproses input pencarian.
    // Untuk saat ini, kita kembalikan ke halaman beranda/home.
    return redirect('/'); 
})->name('search');