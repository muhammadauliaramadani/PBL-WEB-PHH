@extends('layouts.landing.index')
@section('content')
    <style>
        .member {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            text-align: center;
            padding: 20px;
            margin: 15px; /* Menambah jarak antar kotak */
        }

        .member:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .member-img {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        .member-img img {
            width: 100%;
            max-width: 350px;
            height: 470px;
            object-fit: cover;
            border-radius: 10px;
        }

        .member-info h4 {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .member-info p {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 2px;
        }

        .member-info span {
            font-size: 0.9rem;
            font-weight: 600;
            color: #007bff;
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

