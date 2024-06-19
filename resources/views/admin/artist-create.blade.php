@extends('admin.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Create New Artist</h6>
            </div>
        </div>
    </div>
    <form action="{{route('admin-artist-store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Artist Name:</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" style="height: 200px; resize: none;"></textarea>
        </div>
        <div class="mb-3">
            <label for="instagram_link">Instagram Link:</label>
            <input type="url" class="form-control" id="instagram_link" name="instagram_link">
        </div>
        <div class="mb-3">
            <label for="youtube_link">Youtube Link:</label>
            <input type="url" class="form-control" id="youtube_link" name="youtube_link">
        </div>
        <a href="{{ route('admin-artist') }}">
            <button type="button" class="btn btn-danger">Back</button>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
