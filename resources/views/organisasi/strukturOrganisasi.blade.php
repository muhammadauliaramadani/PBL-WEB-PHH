@extends('layouts.landing.index')

@section('content')
<link href="assets/img/LogoPHH.png" rel="icon">
<div class="container mx-auto p-4 md:p-6 lg:p-12 organisasi-container">
    <h1 class="organisasi-title">Struktur Organisasi Program Studi Pengolahan Hasil Hutan</h1>
    
    <div class="grid organisasi-grid">
        <div class="card organisasi-card">
            <img src="{{ asset('assets/img/ketua.png') }}" alt="Ketua Program Studi" class="organisasi-img">
            <h2 class="organisasi-subtitle">Ketua Program Studi</h2>
            <p class="organisasi-name"><strong>Dr. Erina Hertianti, S.Hut., MP.</strong></p>
            <p class="organisasi-nip">NIP: <strong>19700503 199512 2 002</strong></p>
            <p class="organisasi-description">Bertanggung jawab atas pengelolaan prodi secara keseluruhan, kebijakan akademik, pengembangan kurikulum, serta representasi prodi di tingkat Jurusan dan Kampus.</p>
        </div>
        <div class="card organisasi-card">
            <img src="{{ asset('assets/img/kepala-laboraturium-hasil-hutan-non-kayu.png') }}" alt="Kepala Laboratorium Hasil Hutan Non Kayu" class="organisasi-img">
            <h2 class="organisasi-subtitle">Kepala Laboratorium Hasil Hutan Non Kayu</h2>
            <p class="organisasi-name"><strong>Ir. Joko Prayitno, MP.</strong></p>
            <p class="organisasi-nip">NIP: <strong>19660704 199203 1 005</strong></p>
            <p class="organisasi-description">Bertanggung jawab mengelola dan mengkoordinasikan kegiatan laboratorium hasil hutan non kayu, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam pengolahan hasil hutan non kayu.</p>
        </div>
        <div class="card organisasi-card">
            <img src="{{ asset('assets/img/kepala-laboraturium-keteknikan.png') }}" alt="Kepala Laboratorium Keteknikan" class="organisasi-img">
            <h2 class="organisasi-subtitle">Kepala Laboratorium Keteknikan</h2>
            <p class="organisasi-name"><strong>Ir. Andi Yusuf, MP.</strong></p>
            <p class="organisasi-nip">NIP: <strong>19621022 199803 1 001</strong></p>
            <p class="organisasi-description">Bertanggung jawab mengelola dan mengkoordinasikan kegiatan laboratorium keteknikan, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam pengolahan hasil hutan.</p>
        </div>
        <div class="card organisasi-card">
            <img src="{{ asset('assets/img/kepala-laboraturium-rekayasa-kayu.jpg') }}" alt="Kepala Laboratorium Rekayasa Kayu" class="organisasi-img">
            <h2 class="organisasi-subtitle">Kepala Laboratorium Rekayasa Kayu</h2>
            <p class="organisasi-name"><strong>Ir. Wartomo, MP.</strong></p>
            <p class="organisasi-nip">NIP: <strong>19631028 198803 1 003</strong></p>
            <p class="organisasi-description">Bertanggung jawab mengelola dan mengkoordinasikan kegiatan laboratorium rekayasa kayu, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam rekayasa kayu.</p>
        </div>
        <div class="card organisasi-card">
            <img src="{{ asset('assets/img/kepala-laboraturium-sifat-kayu-dan-analisis-produk.jpg') }}" alt="Kepala Laboratorium Sifat Kayu dan Analisis Produk" class="organisasi-img">
            <h2 class="organisasi-subtitle">Kepala Laboratorium Sifat Kayu dan Analisis Produk</h2>
            <p class="organisasi-name"><strong>Dr. M. Fikri Hernandi, S.Hut., MP.</strong></p>
            <p class="organisasi-nip">NIP: <strong>19701127 199802 1 001</strong></p>
            <p class="organisasi-description">Bertanggung jawab untuk mengelola dan mengkoordinasikan kegiatan laboratorium sifat kayu dan analisis produk, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam analisis produk kayu.</p>
        </div>
    </div>
</div>
@endsection

