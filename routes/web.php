<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\Admin\HighlightController;
use App\Http\Controllers\Admin\PageSectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. PUBLIC ROUTES
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/profile-perusahaan', function () {
    return view('pages.profile');
})->name('company.profile');

Route::get('/layanan-kami', function () {
    return view('pages.services');
})->name('services');

Route::get('/hubungi-kami', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/knowledge', [ContentController::class, 'indexKnowledge'])->name('knowledge');
Route::get('/news', [ContentController::class, 'indexNews'])->name('news');
Route::get('/post/{slug}', [ContentController::class, 'show'])->name('post.show');

Route::get('/search', function () {
    return redirect('/');
})->name('search');

// 2. AUTH ROUTES
Route::middleware(['auth'])->group(function () {
    // Default Dashboard - redirect admin to admin panel
    Route::get('/dashboard', function () {
        if (Auth::user()->email === 'admin@konsultanpajak.com') {
            return redirect()->route('admin.dashboard');
        }
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('user.profile');
    })->name('user.profile');
});

// 3. ADMIN ROUTES (Admin Middleware)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    Route::get('/page-sections', [PageSectionController::class, 'index'])->name('page-sections.index');
    Route::put('/page-sections', [PageSectionController::class, 'update'])->name('page-sections.update');
    Route::resource('team', TeamController::class)->except('show');
    Route::resource('timeline', TimelineController::class)->except('show');
    Route::resource('highlights', HighlightController::class)->except('show');
    Route::resource('posts', AdminPostController::class)->except('show');
});

require __DIR__.'/auth.php';
