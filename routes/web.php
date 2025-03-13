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

    Route::get('/register', [AuthController::class, 'TampilRegister'])->name('register.tampil');
    Route::post('/register/submit', [AuthController::class, 'SubmitRegister'])->name('register.submit');

    Route::get('/login', [AuthController::class, 'TampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'SubmitLogin'])->name('login.submit');

    
Route::resource('jadwal', JadwalKuliahController::class);
    
Route::middleware(['auth',])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/alasan', [AlasanController::class, 'index'])->name('alasan.index');
    Route::get('/admin/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
    Route::post('/admin/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
    Route::get('/admin/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
    Route::put('/admin/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
    Route::delete('/admin/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');

    Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/admin/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/admin/berita/store', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/admin/berita/edit/{id}', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/admin/berita/update/{id}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

    Route::get('/admin/output-lulusan', [AdminOutputLulusanController::class, 'index'])->name('admin.output-lulusan.index');
    Route::get('/admin/output-lulusan/create', [AdminOutputLulusanController::class, 'create'])->name('admin.output-lulusan.create');
    Route::post('/admin/output-lulusan/store', [AdminOutputLulusanController::class, 'store'])->name('admin.output-lulusan.store');
    Route::get('/admin/output-lulusan/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('admin.output-lulusan.edit');
    Route::put('/admin/output-lulusan/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('admin.output-lulusan.update');
    Route::delete('/admin/output-lulusan/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('admin.output-lulusan.delete');

    Route::get('/admin/dosen', [AdminDosenController::class, 'index'])->name('admin.dosen.index');
    Route::get('/admin/dosen/create', [AdminDosenController::class, 'create'])->name('admin.dosen.create');
    Route::post('/admin/dosen/store', [AdminDosenController::class, 'store'])->name('admin.dosen.store');
    Route::get('/admin/dosen/edit/{id}', [AdminDosenController::class, 'edit'])->name('admin.dosen.edit');
    Route::put('/admin/dosen/update/{id}', [AdminDosenController::class, 'update'])->name('admin.dosen.update');
    Route::delete('/admin/dosen/delete/{id}', [AdminDosenController::class, 'delete'])->name('admin.dosen.delete');
    
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
