@extends('layouts.landing.index')

@section('content')
    <style>
        .akreditasi-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .akreditasi-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        .akreditasi-img {
            max-width: 70%;
            height: auto;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .akreditasi-text {
            font-size: 1.2rem;
            color: #444;
            line-height: 1.8;
            margin-top: 25px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <section class="akreditasi-section d-flex justify-content-center">
        <div class="container text-center">
            <div class="section-title">
                <h2>Akreditasi</h2>
            <img src="{{ asset('assets/img/akreditasi.png') }}" class="akreditasi-img" alt="Akreditasi Prodi">
            <p class="akreditasi-text">
                <strong>
                    Program Studi Pengolahan Hasil Hutan (PHH) Politeknik Pertanian Negeri Samarinda telah 
                    memperoleh akreditasi B dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) berdasarkan 
                    SK BAN-PT No. 2247/SK/BAN-PT/Akred/S/IV/2019.
                </strong>
            </p>
        </div>
    </section>
@endsection
