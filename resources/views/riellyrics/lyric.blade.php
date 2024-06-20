@extends('layouts.base')
@section('content')
    <div class="container pt-2">
        <div class="card">
            <div class="card-header">
                <h2>{{ $lyric->song->alternate_title }}</h2>
                <h4>{{ $lyric->song->original_title }}</h4>
                <h3>Artist: {{ $lyric->song->album->artist->name }}</h3>
                <h4>Language: {{ $lyric->lyrics_language }}</h4>
            </div>
            <div class="card-body">
                <p>{!! $lyric->lyrics !!}</p>
            </div>
        </div>

    </div>
@endsection
