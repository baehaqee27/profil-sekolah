<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Halaman profil sekolah (publik)
Route::get('/', [LandingController::class, 'beranda'])->name('beranda');
Route::get('/tentang', fn() => view('landing.tentang'))->name('tentang');
Route::get('/program', fn() => view('landing.program'))->name('program');
Route::get('/fasilitas', fn() => view('landing.fasilitas'))->name('fasilitas');
Route::get('/galeri', fn() => view('landing.galeri'))->name('galeri');
Route::get('/kontak', fn() => view('landing.kontak'))->name('kontak');

// Dashboard admin (private)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route admin (private, hanya untuk user login)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);

    // Route untuk import siswa dan guru
    Route::post('siswa/import', [SiswaController::class, 'import'])->name('siswa.import');
    Route::post('guru/import', [GuruController::class, 'import'])->name('guru.import');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
