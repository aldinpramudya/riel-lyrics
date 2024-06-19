@extends('admin.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Create New Albums</h6>
            </div>
        </div>
    </div>
    <form action="{{ route('admin-songs-store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_album" class="form-label">Album Name:</label>
            <select name="id_album" id="id_album" class="form-control" required>
                <option value="">Select Albums</option>
                @foreach($albums as $album)
                    <option value="{{ $album->id }}">{{ $album->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="original_title" class="form-label">Original Title:</label>
            <input type="text" class="form-control" id="original_title" name="original_title" aria-describedby="original_title"></input>
        </div>
        <div class="mb-3">
            <label for="alternate_title" class="form-label">Alternate Title:</label>
            <input type="text" class="form-control" id="alternate_title" name="alternate_title" aria-describedby="alternate_title" required></input>
        </div>
        <div class="mb-3">
            <label for="release_date">Release Date:</label>
            <input type="date" class="form-control" id="release_date`" name="release_date" aria-describedby="release_date" required>
        </div>
        <div class="mb-3">
            <label for="youtube_link">Youtube Link:</label>
            <input type="url" class="form-control" id="youtube_link" name="youtube_link" aria-describedby="youtube_link">
        </div>
        <div class="mb-3">
            <label for="spotify_link">Spotify Link:</label>
            <input type="url" class="form-control" id="spotify_link" name="spotify_link" aria-describedby="spotify_link">
        </div>
        <a href="{{ route('admin-songs') }}">
            <button type="button" class="btn btn-danger">Back</button>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
