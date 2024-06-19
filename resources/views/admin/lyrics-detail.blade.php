@extends('admin.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Detail Lyrics</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $lyric->song->alternate_title }}</h2>
                </div>
            </div>
        </div> <!-- end col -->
        <div class="card-body">
            <h3>Language: {{ $lyric->lyrics_language }}</h3>
            <p>{!! $lyric->lyrics !!}</p>
        </div>
        <a href="{{ route('admin-lyrics') }}">
            <button type="button" class="btn btn-danger">Back</button>
        </a>
    </div>
@endsection
