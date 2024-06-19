@extends('admin.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Update New Albums</h6>
            </div>
        </div>
    </div>
    <form action="{{ route('admin-albums-update', $album->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_artist" class="form-label">Artist Name:</label>
            <select name="id_artist" id="id_artist" class="form-control" required>
                <option value="">Select Artist</option>
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}" {{ $album->id_artist == $artist->id ? 'selected' : '' }}>{{ $artist->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $album->title }}"></input>
        </div>
        <div class="mb-3">
            <label for="release_date">Release Date:</label>
            <input type="date" class="form-control" id="release_date`" name="release_date" value="{{$album->release_date}}">
        </div>
        <a href="{{ route('admin-albums') }}">  
            <button type="button" class="btn btn-danger">Back</button>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
