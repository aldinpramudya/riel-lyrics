@extends('layouts.base')
@section('content')
    {{-- Button --}}
    <div class="container pt-2">
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

    {{-- Lyrics Gallery --}}
    <div class="container mt-5">
        <div class="d-flex justify-content-center" id="scroll-container">
            <h2 class="text-uppercase fw-bolder" id="scroll-text">Lyrics Gallery</h2>
        </div>
        <div class="d-flex justify-content-center mt-2">
            @foreach ($lyrics as $lyric)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lyric->song->alternate_title }}</h5>
                            <h6 class="card-subtitle mb-2">{{ $lyric->song->album->artist->name }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $lyric->song->album->title }}</h6>
                            <a href="{{ route('lyric', $lyric->id) }}" class="d-grid btn btn-outline-dark">View Lyrics</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Artist List --}}
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="text-uppercase fw-bolder">Artist</h2>
        </div>
        <div class="d-flex justify-content-center mt-2 gap-2">
            @foreach ($artists as $artist)
                <a href="{{route('artist-detail', $artist->id)}}" class="btn btn-outline-dark btn-lg">{{ $artist-> name }}</a>
            @endforeach
        </div>
    </div>

    {{-- Join Our Commuity --}}

    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="text-uppercase fw-bolder">Join Our Community!</h2>
        </div>
        <div class=" d-flex justify-content-center mt-2">
            <img src="{{ asset('img/discord-card.png') }}" alt="Discord Community Links" class="img-fluid" width="300">
        </div>
        <div class="d-flex justify-content-center gap-4 mt-3">
            <a href="" style="color: black;">
                <i class="bi bi-instagram" style="font-size: 4rem"></i>
            </a>
            <a href="" style="color: black;">
                <i class="bi bi-facebook" style="font-size: 4rem"></i>
            </a>
            <a href="" style="color: black;">
                <i class="bi bi-twitter-x" style="font-size: 4rem"></i>
            </a>
        </div>
    </div>
@endsection

@push('button-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
@endpush
