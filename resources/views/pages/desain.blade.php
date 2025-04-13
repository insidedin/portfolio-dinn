@extends('layouts.main')

@section('judul', 'Showcase - Graphic Design') {{-- Judul bisa dinamis --}}

@section('konten')
<section class="py-5" id="showcase-detail">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-down">Graphic Design Projects</h2>
            <p class="text-muted">Here are some of my graphic design works, including posters, banners, and branding materials.</p>
        </div>

        <div class="row g-4">
            {{-- @foreach($projects as $project) --}}
            <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/designs/poster-sample.jpg') }}" class="card-img-top" alt="Poster Design">
                    <div class="card-body">
                        <h5 class="card-title">Creative Poster Design</h5>
                        <p class="card-text">A vibrant poster created for a youth event campaign focusing on modern typography and colors.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
@endsection
