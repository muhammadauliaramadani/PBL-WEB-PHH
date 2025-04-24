@extends('layouts.landing.index')

@section('content')
<section id="output-lulusan-detail" class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="mb-4">
                    <img src="{{ Storage::url($outputLulusan->image) }}" alt="{{ $outputLulusan->title }}" class="img-fluid rounded shadow-sm w-100">
                </div>
                <h3 class="fw-bold mb-2">
                    {{ $outputLulusan->title }}
                </h3>
                <p class="text-muted mb-4">{{ $outputLulusan->formatted_date_dfy }}</p>
                <div class="output-lulusan-description lh-lg">
                    {!! $outputLulusan->description !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

