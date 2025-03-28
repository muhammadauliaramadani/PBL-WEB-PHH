@extends('layouts.landing.index')

@section('content')
    <section class="section section-error d-flex align-items-center" style="min-height: 80vh;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="error-content p-4 shadow rounded" style="background: #fff; border-radius: 10px;">
                        <img src="{{ asset('assets/img/error-404.png') }}" alt="404 Not Found" class="img-fluid mb-4" style="max-width: 250px;">
                        <h2 class="error-title text-danger">Oops! Halaman Tidak Ditemukan</h2>
                        <p class="error-message text-muted">Sepertinya halaman yang Anda cari tidak tersedia. Periksa kembali URL atau kembali ke halaman utama.</p>
                        <a href="/" class="btn btn-primary btn-lg mt-3">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
