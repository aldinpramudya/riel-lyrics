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
        <div class="d-flex justify-content-center">
            <h2 class="text-uppercase fw-bolder">Lyrics Gallery</h2>
        </div>
        <div class="d-flex justify-content-center mt-2">
            {{-- Class Div For flex for many cards --}}
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/lisa-best-day.jpg')}}" class="card-img-top" alt="Song Name" style="width: 100%; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">Song Title</h5>
                    <p class="card-text">Artist</p>
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-dark text-uppercase">View Lyrics</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Artist List --}}
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="text-uppercase fw-bolder">Artist</h2>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <button type="button" class="btn btn-outline-dark btn-lg">Artist Name</button>
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
            <a href=""  style="color: black;">
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
