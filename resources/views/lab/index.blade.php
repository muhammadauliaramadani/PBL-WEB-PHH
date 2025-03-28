@extends('layouts.landing.index')
@section('content')
<section id="lab" class="lab-section services section m-0 pt-4">
    <div class="container section-title pb-5" data-aos="fade-up">
        <h2 class="m-0">Fasilitas</h2>
    </div>
    <div class="container">
        <div class="row g-4 m-0 p-0 justify-content-center">
            <div class="col-lg-3 col-md-6 mx-auto" style="margin-top: 3rem; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('lab.rekayasakayu') }}">
                    <div class="service-item position-relative rounded-3 shadow-lg">
                        <img src="{{ asset('assets/img/lab2.jpg') }}" alt="Laboratorium Rekayasa Kayu" class="img-fluid w-100 h-auto rounded-3" style="max-height: 20rem;">
                        <div class="service-info bg-white rounded-3 p-3">
                            <h3 style="color: #4682b4">Laboratorium Rekayasa Kayu</h3>
                            <p class="text-secondary">Melakukan analisis sifat fisik dan mekanik kayu, termasuk analisis <strong>densitas</strong>, <strong>kekuatan tarik</strong>, <strong>kekuatan tekan</strong>, <strong>kekuatan geser</strong>, dan lain-lain.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto" style="margin-top: 3rem; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('lab.keteknikan') }}">
                    <div class="service-item position-relative rounded-3 shadow-lg">
                        <img src="{{ asset('assets/img/lab3.jpg') }}" alt="Laboratorium Keteknikan" class="img-fluid w-100 h-auto rounded-3" style="max-height: 20rem;">
                        <div class="service-info bg-white rounded-3 p-3">
                            <h3 style="color: #4682b4">Laboratorium Keteknikan</h3>
                            <p class="text-secondary">Melakukan analisis sifat fisik dan mekanik kayu, termasuk analisis <strong>densitas</strong>, <strong>kekuatan tarik</strong>, <strong>kekuatan tekan</strong>, <strong>kekuatan geser</strong>, dan lain-lain.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto" style="margin-top: 3rem; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('lab.sifatkayuanalisaproduk') }}">
                    <div class="service-item position-relative rounded-3 shadow-lg">
                        <img src="{{ asset('assets/img/lab1.jpg') }}" alt="Laboratorium Sifat Kayu Analisa Produk" class="img-fluid w-100 h-auto rounded-3" style="max-height: 20rem;">
                        <div class="service-info bg-white rounded-3 p-3">
                            <h3 style="color: #4682b4">Laboratorium Sifat Kayu Analisa Produk</h3>
                            <p class="text-secondary">Melakukan analisis sifat fisik dan mekanik kayu, termasuk analisis <strong>densitas</strong>, <strong>kekuatan tarik</strong>, <strong>kekuatan tekan</strong>, <strong>kekuatan geser</strong>, dan lain-lain.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto" style="margin-top: 3rem; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('lab.hasil-hutan-non-kayu') }}">
                    <div class="service-item position-relative rounded-3 shadow-lg">
                        <img src="{{ asset('assets/img/lab4.jpg') }}" alt="Laboratorium Hasil Hutan Non Kayu" class="img-fluid w-100 h-auto rounded-3" style="max-height: 20rem;">
                        <div class="service-info bg-white rounded-3 p-3">
                            <h3 style="color: #4682b4">Laboratorium Hasil Hutan Non Kayu</h3>
                            <p class="text-secondary" style="position: relative; z-index: 1;">Melakukan analisis sifat fisik dan mekanik hasil hutan non kayu, termasuk analisis <strong>densitas</strong>, <strong>kekuatan tarik</strong>, <strong>kekuatan tekan</strong>, <strong>kekuatan geser</strong>, dan lain-lain.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

