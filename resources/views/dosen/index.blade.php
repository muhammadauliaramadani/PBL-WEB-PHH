@extends('layouts.landing.index')
@section('content')
    <style>
        .member-img img {
            width: 350px;
            height: 470px;
            object-fit: cover;
        }
    </style>
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Daftar Dosen</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($dosens as $dosen)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ Storage::url($dosen->foto) }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $dosen->nama }}</h4>
                                <p>{{ $dosen->nip }}</p>
                                <span>{{ $dosen->jabatan }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

