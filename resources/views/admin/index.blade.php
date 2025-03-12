@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-3">Dashboard</h1>
            <div class="card">
                <div class="card-header">
                    <h1 style="font-size: 25px" class="card-title" >SELAMAT DATANG DI DASHBOARD ADMIN PENGOLAHAN HASIL HUTAN</h1>
                </div>
                <div class="card-body">
                    <p>Di sini Anda dapat menemukan informasi singkat tentang status Website Anda dan kegiatan terbaru.</p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Alasan</h5>
                                    <p class="card-text">Kelola alasan Anda dengan efisien.</p>
                                    <a href="{{ route('alasan.index') }}" class="btn btn-light">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Berita</h5>
                                    <p class="card-text">Tetap up-to-date dengan berita terbaru.</p>
                                    <a href="{{ route('admin.berita.index') }}" class="btn btn-light">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Output Lulusan</h5>
                                    <p class="card-text">Periksa informasi output lulusan.</p>
                                    <a href="{{ route('admin.output-lulusan.index') }}" class="btn btn-light">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dosen</h5>
                                    <p class="card-text">Kelola informasi dosen dengan mudah.</p>
                                    <a href="{{ route('admin.dosen.index') }}" class="btn btn-light">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection

