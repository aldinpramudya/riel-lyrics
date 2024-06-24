@extends('layouts.base')
@section('content')
    <div class="container">
        <h1>{{ $artists->name }}</h1>
        <h5>{{ $artists -> description}}</h5>
        {{-- Official Links --}}
        <h1>Official Links</h1>
        <a href="{{$artists->instagram_link}}" target="_blank" class="text-decoration-none">
            <h4 class="text-black unstyled"><i class="bi bi-instagram" style="font-size: 1.5rem"></i> Official Instagram</h4>
        </a>
        <a href="{{$artists->youtube_link}}" target="_blank" class="text-decoration-none">
            <h4 class="text-black unstyled"><i class="bi bi-youtube" style="font-size: 1.5rem"></i> Official Youtube</h4>
        </a>
    </div>
@endsection
