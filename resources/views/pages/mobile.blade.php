@extends('layouts.main')

@section('judul', 'Showcase - Mobile App') {{-- Judul bisa dinamis --}}

@section('konten')
<section class="py-5" id="showcase-detail">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-down">Mobile App Projects</h2>
            <p class="text-muted">Explore some of the mobile applications I’ve built with Flutter and other frameworks.</p>
        </div>

        <div class="row g-4">
            {{-- Card Showcase --}}
            {{-- @foreach($projects as $project) --}}
            <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                <div class="card shadow-sm h-100">
                    {{-- <img src="{{ asset('assets/images/projects/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ route('project.detail', $project->slug) }}" class="btn btn-outline-success btn-sm">Read More</a>
                    </div> --}}
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
@endsection
