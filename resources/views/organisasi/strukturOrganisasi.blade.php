@extends('layouts.landing.index')

@section('content')
<div class="container mx-auto p-4 md:p-6 lg:p-12">
    <div class="flex flex-col md:flex-row items-center justify-center mb-4 md:mb-6 lg:mb-12">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 md:mb-0">Struktur Organisasi Program Studi Pengolahan Hasil Hutan</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-12">
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 lg:p-8 text-center">
            <img src="{{ asset('assets/img/ketua.png') }}" alt="Ketua Program Studi" class="w-24 h-24 rounded-full mx-auto mb-4" style="width: 30%; height: 30%;">
            <h2 class="text-3xl font-bold">Ketua Program Studi</h2>
            <p class="text-gray-600 mb-2" style="font-size: 1.2rem">Dr. Erina Hertianti, S.Hut., MP.</p>
            <p class="text-gray-500 mb-4">NIP: 19700503 199512 2 002</p>
            <p class="text-gray-600">Bertanggung jawab atas pengelolaan prodi secara keseluruhan, kebijakan akademik, pengembangan kurikulum, serta representasi prodi di tingkat Jurusan dan Kampus.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 lg:p-8 text-center">
            <img src="{{ asset('assets/img/kepala-laboraturium-hasil-hutan-non-kayu.png') }}" alt="Kepala Laboratorium Hasil Hutan Non Kayu" class="w-24 h-24 rounded-full mx-auto mb-4" style="width: 30%; height: 30%;">
            <h2 class="text-3xl font-bold">Kepala Laboratorium Hasil Hutan Non Kayu</h2>
            <p class="text-gray-600 mb-2" style="font-size: 1.2rem">Ir. Joko Prayitno, MP.</p>
            <p class="text-gray-500 mb-4">NIP: 19660704 199203 1 005</p>
            <p class="text-gray-600">Bertanggung jawab mengelola dan mengkoordinasikan kegiatan laboratorium hasil hutan non kayu, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam pengolahan hasil hutan non kayu.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 lg:p-8 text-center">
            <img src="{{ asset('assets/img/kepala-laboraturium-keteknikan.png') }}" alt="Kepala Laboratorium Keteknikan" class="w-24 h-24 rounded-full mx-auto mb-4" style="width: 30%; height: 30%;">
            <h2 class="text-3xl font-bold">Kepala Laboratorium Keteknikan</h2>
            <p class="text-gray-600 mb-2" style="font-size: 1.2rem">Ir. Andi Yusuf, MP.</p>
            <p class="text-gray-500 mb-4">NIP: 19621022 199803 1 001</p>
            <p class="text-gray-600">Bertanggung jawab mengelola dan mengkoordinasikan kegiatan laboratorium keteknikan, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam pengolahan hasil hutan.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 lg:p-8 text-center">
            <img src="{{ asset('assets/img/kepala-laboraturium-rekayasa-kayu.jpg') }}" alt="Kepala Laboratorium Rekayasa Kayu" class="w-24 h-24 rounded-full mx-auto mb-4" style="width: 30%; height: 30%;">
            <h2 class="text-3xl font-bold">Kepala Laboratorium Rekayasa Kayu</h2>
            <p class="text-gray-600 mb-2" style="font-size: 1.2rem">Ir. Wartomo, MP.</p>
            <p class="text-gray-500 mb-4">NIP: 19631028 198803 1 003</p>
            <p class="text-gray-600">Bertanggung jawab mengelola dan mengkoordinasikan kegiatan laboratorium rekayasa kayu, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam rekayasa kayu.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 lg:p-8 text-center">
            <img src="{{ asset('assets/img/kepala-laboraturium-sifat-kayu-dan-analisis-produk.jpg') }}" alt="Kepala Laboratorium Sifat Kayu Dan Analisis Produk" class="w-24 h-24 rounded-full mx-auto mb-4" style="width: 30%; height: 30%;">
            <h2 class="text-3xl font-bold">Kepala Laboratorium Sifat Kayu dan Analisis Produk</h2>
            <p class="text-gray-600 mb-2" style="font-size: 1.2rem">Dr. M. Fikri Hernandi, S.Hut., MP.</p>
            <p class="text-gray-500 mb-4">NIP: 19701127 199802 1 001</p>
            <p class="text-gray-600">Bertanggung jawab untuk mengelola dan mengkoordinasikan kegiatan laboratorium sifat kayu dan analisis produk, termasuk pengelolaan sarana dan prasarana, pengawasan kegiatan praktikum, serta pengembangan kemampuan dan keterampilan mahasiswa dalam analisis produk kayu.
        <!-- Repeat similar blocks for other positions with their respective image, name, and NIP -->
    </div>
</div>
@endsection

