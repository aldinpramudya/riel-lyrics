@extends('layouts.base')
@section('content')
    {{-- Artist List --}}
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="text-uppercase fw-bolder">Artist</h2>
        </div>
        <div class="d-flex justify-content-center mt-2 gap-2">
            @foreach ($artists as $artist)
                <a href="{{ route('artist-detail', $artist->id) }}" class="btn btn-dark">{{ $artist->name }}</a>
            @endforeach
        </div>
    </div>

    {{-- Search Bar --}}
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-text" placeholder="Search Lyrics...."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-warning btn-lg" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('button-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
@endpush
