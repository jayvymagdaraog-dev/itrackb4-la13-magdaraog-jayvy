@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2 class="fw-bold">Movie Record System</h2>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-3">
                    <h4>Total Movies</h4>
                    <h2>{{ $movieCount }}</h2>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-3">
                    <h4>Total Genres</h4>
                    <h2>{{ $genreCount }}</h2>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3 mb-4">
    <img src="{{ asset('img/profile.jpg') }}"
         width="96"
         height="96"
         class="rounded-circle"
         alt="Profile Photo">

    <div>
        <h5 class="mb-1">Jayvy P. Magdaraog</h5>
        <p class="mb-0">Course: BS Information Technology</p>
        <p class="mb-0">Year: 4th Year</p>
        <p class="mb-0">Block: 4C</p>
    </div>
</div>

        <p class="text-muted mb-4">A system for managing your movie collection</p>

        <a href="{{ route('movies.index') }}" class="btn btn-primary">
            Browse Movies
        </a>
    </div>
@endsection
