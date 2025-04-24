@extends('layouts.landing.index')

@section('content')
<section id="berita-detail" class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="mb-4">
                    <img src="{{ Storage::url($berita->image) }}" alt="{{ $berita->title }}" class="img-fluid rounded shadow-sm w-100">
                </div>
                <h3 class="fw-bold mb-2">
                    {{ $berita->title }}
                </h3>
                <p class="text-muted mb-4">{{ $berita->formatted_date_dfy }}</p>
                <div class="berita-description lh-lg">
                    {!! $berita->description !!}
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
