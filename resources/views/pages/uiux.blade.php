@extends('layouts.main')

@section('judul', 'Showcase - UI/UX') {{-- Judul bisa dinamis --}}

@section('konten')
<section class="py-5" id="showcase-detail">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-down">UI/UX Design Projects</h2>
            <p class="text-muted">Browse through some of the UI/UX designs I’ve created for mobile and web platforms — focusing on user-friendly interfaces and intuitive experiences.</p>
        </div>

        <div class="row g-4">
            {{-- @foreach($projects as $project) --}}
            <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/uiux/app-mockup.jpg') }}" class="card-img-top" alt="UI/UX Mockup">
                    <div class="card-body">
                        <h5 class="card-title">Travel App UI</h5>
                        <p class="card-text">A mobile travel app interface design that prioritizes user journey, clean navigation, and modern aesthetics.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
@endsection
