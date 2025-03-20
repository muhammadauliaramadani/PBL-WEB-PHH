@extends('layouts.landing.index')

@section('content')
    <section class="section section-error">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="error-content">
                        <h2 class="error-title">Halaman Tidak Ditemukan</h2>
                        <p class="error-message">Maaf, halaman yang Anda cari tidak ditemukan. Silakan coba lagi atau klik tombol di bawah ini untuk kembali ke halaman utama.</p>
                        <a href="/" class="btn btn-primary btn-error">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

