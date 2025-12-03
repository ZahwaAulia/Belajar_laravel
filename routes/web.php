<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    MahasiswaController,
    MatakuliahController,
    QuestionController,
    AuthController,
    DashboardController,
    PelangganController,
    UserController,
    ProfileController,
    MultipleuploadsController
};

Route::get('/', fn() => view('welcome'));

// Contoh route basic
Route::get('/pcr', fn() => 'Selamat Datang di Website Kampus PCR');
Route::get('/mahasiswa', fn() => 'Halloooo Mahasiswaaaa');
Route::get('/nama/{param1}', fn($param1) => 'Nama Saya : ' . $param1);
Route::get('/nim/{param1?}', fn($param1 = '') => 'Nim Saya : ' . $param1);

// Mahasiswa
Route::get('mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// About
Route::view('/about', 'halaman-about');

// Matakuliah (gunakan RESTful)
Route::resource('matakuliah', MatakuliahController::class);

// Question Form
Route::get('/question', fn() => view('home'))->name('question.form');

// Multiple Uploads
Route::get('/multipleuploads', [MultipleuploadsController::class, 'index'])->name('uploads');
Route::post('/save', [MultipleuploadsController::class, 'store'])->name('uploads.store');


// ========== GUEST ==========
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});


// ========== LOGIN REQUIRED ==========
Route::middleware('auth')->group(function () {

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Home
    Route::get('/home', [HomeController::class, 'index']);

    // Question (wajib login)
    Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ADMIN ONLY
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::resource('user', UserController::class);
        Route::resource('pelanggan', PelangganController::class);
    });
});
