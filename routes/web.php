<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OutputLulusanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AlasanBannerController;
use App\Http\Controllers\Admin\AdminOutputLulusanController;
use App\Http\Controllers\Admin\AdminDosenController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;

// Public Routes
Route::get('/', [IndexController::class, 'index']);

// berita
Route::get('/berita/{id}', [IndexController::class, 'beritaDetail'])->name('berita-detail');
Route::get('/berita-lainnya', [IndexController::class, 'beritaLainnya'])->name('berita-lainnya');

// output lulusan
Route::get('/output-lulusan/{id}', [IndexController::class, 'outputLulusanDetail'])->name('output-lulusan-detail');
Route::get('/output-lulusan', [OutputLulusanController::class, 'index'])->name('output-lulusan.index');

// profil
Route::get('/profil', [IndexController::class, 'profil'])->name('profil');

// visi misi
Route::get('/visimisi', [IndexController::class, 'visimisi'])->name('visimisi');

// dosen
Route::get('/dosen', [IndexController::class, 'dosen'])->name('dosen');

//fasilitas
Route::get('/fasilitas', [IndexController::class, 'fasilitasIndex'])->name('fasilitas.index');
Route::get('/fasilitas/sifatkayuanalisaproduk', [IndexController::class, 'sifatKayuAnalisaProduk'])->name('fasilitas.sifatkayuanalisaproduk');
Route::get('/fasilitas/keteknikan', [IndexController::class, 'keteknikan'])->name('fasilitas.keteknikan');
Route::get('/fasilitas/rekayasakayu', [IndexController::class, 'rekayasakayu'])->name('fasilitas.rekayasakayu');
Route::get('/fasilitas/hasil-hutan-non-kayu', [IndexController::class, 'hasilhutannonkayu'])->name('fasilitas.hasil-hutan-non-kayu');

// akreditasi
Route::get('/akreditasi', [IndexController::class, 'akreditasi'])->name('akreditasi');

// struktur organisasi
Route::get('/organisasi/strukturOrganisasi', [IndexController::class, 'strukturOrganisasi'])->name('organisasi.strukturOrganisasi');

// contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.submit');

// Auth Routes
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [NewPasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        // Alasan
        Route::prefix('alasan')->name('alasan.')->group(function () {
            Route::get('/', [AlasanController::class, 'index'])->name('index');
            Route::get('/create', [AlasanController::class, 'create'])->name('create');
            Route::post('/create', [AlasanController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AlasanController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [AlasanController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [AlasanController::class, 'destroy'])->name('delete');
        });

        // Berita
        Route::prefix('berita')->name('berita.')->group(function () {
            Route::get('/', [AdminBeritaController::class, 'index'])->name('index');
            Route::get('/create', [AdminBeritaController::class, 'create'])->name('create');
            Route::post('/store', [AdminBeritaController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdminBeritaController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [AdminBeritaController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [AdminBeritaController::class, 'delete'])->name('delete');
        });

        // Output Lulusan
        Route::prefix('output-lulusan')->name('output-lulusan.')->group(function () {
            Route::get('/', [AdminOutputLulusanController::class, 'index'])->name('index');
            Route::get('/create', [AdminOutputLulusanController::class, 'create'])->name('create');
            Route::post('/store', [AdminOutputLulusanController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('delete');
        });

        // Dosen
        Route::prefix('dosen')->name('dosen.')->group(function () {
            Route::get('/', [AdminDosenController::class, 'index'])->name('index');
            Route::get('/create', [AdminDosenController::class, 'create'])->name('create');
            Route::post('/store', [AdminDosenController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdminDosenController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [AdminDosenController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [AdminDosenController::class, 'delete'])->name('delete');
        });

        // Register
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserController::class, 'store']);
    });
});

require __DIR__.'/auth.php';