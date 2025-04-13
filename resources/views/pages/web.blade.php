@extends('layouts.main')

@section('judul', 'Showcase - Website') {{-- Judul bisa dinamis --}}

@section('konten')
<section class="py-5" id="showcase-detail">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-down">Website Projects</h2>
            <p class="text-muted">Explore some of the websites I’ve developed using HTML, CSS, JavaScript, PHP, Laravel, and other modern web technologies.</p>
        </div>

        <div class="row g-4">
            {{-- @foreach($projects as $project) --}}
            <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/projects/website-1.jpg') }}" class="card-img-top" alt="Website Project">
                    <div class="card-body">
                        <h5 class="card-title">Tourism Booking Website</h5>
                        <p class="card-text">A dynamic tourism website with booking system built using Laravel and Bootstrap. Includes admin dashboard and customer features.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">View Project</a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
@endsection
