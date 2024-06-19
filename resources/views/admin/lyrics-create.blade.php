@extends('admin.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Create New Lyrics</h6>
            </div>
        </div>
    </div>
    <form action="{{ route('admin-lyrics-store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_song" class="form-label">Song Name:</label>
            <select name="id_song" id="id_song" class="form-control">
                <option value="">Select Songs</option>
                @foreach ($songs as $song)
                    <option value="{{ $song->id }}">{{ $song->alternate_title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="lyrics_language" class="form-label">Lyrics Language:</label>
            <input type="text" class="form-control" id="lyrics_language" name="lyrics_language"
                aria-describedby="lyrics_language"></input>
        </div>
        <div class="mb-3">
            <label for="lyrics" class="form-label">Lyrics</label>
            <textarea class="form-control" id="lyrics" name="lyrics" aria-describedby="lyrics" rows="10"></textarea>
        </div>
        <a href="{{ route('admin-lyrics') }}">
            <button type="button" class="btn btn-danger">Back</button>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#lyrics'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
