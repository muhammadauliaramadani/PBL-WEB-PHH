@extends('layouts.landing.index')

@section('content')
<section id="berita-detail" class="detail-section services section m-0 pt-4">
    <div class="container p-0 mt-0">
        <div class="img-content mb-3">
            <img src="{{ Storage::url($berita->image) }}" alt="">
        </div>
        <h3 class="fw-bold">
            {{ $berita->title }}
        </h3>
        <p class="m-0 p-0 mb-4">{{ $berita->formatted_date_dfy }}</p>
        <p class="lh-sm m-0 p-0">{!! $berita->description !!}</p>
    </div>
</section>
@endsection
