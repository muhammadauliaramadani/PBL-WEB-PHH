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
Route::get('/berita/{id}', [IndexController::class, 'beritaDetail'])->name('berita-detail');
Route::get('/berita-lainnya', [IndexController::class, 'beritaLainnya'])->name('berita-lainnya');
Route::get('/output-lulusan/{id}', [IndexController::class, 'outputLulusanDetail'])->name('output-lulusan-detail');
Route::get('/output-lulusan', [OutputLulusanController::class, 'index'])->name('output-lulusan.index');
Route::get('/profil', [IndexController::class, 'profil'])->name('profil');
Route::get('/visimisi', [IndexController::class, 'visimisi'])->name('visimisi');
Route::get('/dosen', [IndexController::class, 'dosen'])->name('dosen');
Route::get('/lab/sifatkayuanalisaproduk', [IndexController::class, 'sifatKayuAnalisaProduk'])->name('lab.sifatkayuanalisaproduk');
Route::get('/lab/keteknikan', [IndexController::class, 'keteknikan'])->name('lab.keteknikan');
Route::get('/lab/rekayasakayu', [IndexController::class, 'rekayasakayu'])->name('lab.rekayasakayu');
Route::get('/lab/hasil-hutan-non-kayu', [IndexController::class, 'hasilhutannonkayu'])->name('lab.hasil-hutan-non-kayu');
Route::get('/akreditasi', [IndexController::class, 'akreditasi'])->name('akreditasi');
Route::get('/organisasi/strukturOrganisasi', [IndexController::class, 'strukturOrganisasi'])->name('organisasi.strukturOrganisasi');
Route::get('/lab', [IndexController::class, 'labIndex'])->name('lab.index');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.submit');

   
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
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // alasan
    Route::get('/admin/alasan', [AlasanController::class, 'index'])->name('alasan.index');
    Route::get('/admin/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
    Route::post('/admin/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
    Route::get('/admin/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
    Route::put('/admin/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
    Route::delete('/admin/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');

    //berita
      Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/admin/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/admin/berita/store', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/admin/berita/edit/{id}', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/admin/berita/update/{id}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

    //output lulusan 
     Route::get('/admin/output-lulusan', [AdminOutputLulusanController::class, 'index'])->name('admin.output-lulusan.index');
    Route::get('/admin/output-lulusan/create', [AdminOutputLulusanController::class, 'create'])->name('admin.output-lulusan.create');
    Route::post('/admin/output-lulusan/store', [AdminOutputLulusanController::class, 'store'])->name('admin.output-lulusan.store');
    Route::get('/admin/output-lulusan/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('admin.output-lulusan.edit');
    Route::put('/admin/output-lulusan/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('admin.output-lulusan.update');
    Route::delete('/admin/output-lulusan/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('admin.output-lulusan.delete');

    //dosen 
       Route::get('/admin/dosen', [AdminDosenController::class, 'index'])->name('admin.dosen.index');
    Route::get('/admin/dosen/create', [AdminDosenController::class, 'create'])->name('admin.dosen.create');
    Route::post('/admin/dosen/store', [AdminDosenController::class, 'store'])->name('admin.dosen.store');
    Route::get('/admin/dosen/edit/{id}', [AdminDosenController::class, 'edit'])->name('admin.dosen.edit');
    Route::put('/admin/dosen/update/{id}', [AdminDosenController::class, 'update'])->name('admin.dosen.update');
    Route::delete('/admin/dosen/delete/{id}', [AdminDosenController::class, 'delete'])->name('admin.dosen.delete');

    //register
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});
