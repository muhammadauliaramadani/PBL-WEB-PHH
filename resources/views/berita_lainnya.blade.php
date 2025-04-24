@extends('layouts.landing.index')

@section('content')
<section id="berita-lainnya" class="berita-section section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Berita</h2>
        </div>

        <div class="row g-4">
            @if ($beritas->isNotEmpty())
                @foreach ($beritas as $berita)
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('berita-detail', $berita->id) }}" class="text-decoration-none text-dark">
                        <div class="d-flex border rounded shadow-sm p-3 gap-3 service-item">
                            <!-- Gambar -->
                            <div style="width: 120px; height: 100px; flex-shrink: 0;">
                                <img src="{{ Storage::url($berita->image) }}"
                                     alt="{{ $berita->title }}"
                                     class="img-fluid rounded"
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Teks -->
                            <div class="flex-grow-1">
                                <h5 class="title fw-bold mb-1">{{ $berita->title }}</h5>
                                <small class="text-muted d-block mb-2">{{ $berita->formatted_date_dfy }}</small>
                                <p class="description mb-0">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->description), 200) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="text-muted">Belum ada berita yang tersedia.</p>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
