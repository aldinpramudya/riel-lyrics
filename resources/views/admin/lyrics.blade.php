@extends('admin.base')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Lyrics</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Lyrics List</li>
                </ol>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a href="{{ route('admin-lyrics-create') }}">
                    <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New Lyrics </button>
                </a>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Song Title</th>
                                <th>Lyrics Language</th>
                                <th>Edit Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lyrics as $lyric)
                                <tr>
                                    <td>{{ $lyric->song->alternate_title }}</td>
                                    <td>{{ $lyric->lyrics_language }}</td>
                                    <td>
                                        <a href="{{ route('admin-lyrics-detail', $lyric->id) }}">
                                            <button class="btn btn-info"><i class="bi bi-eye"></i>
                                                Lyrics Detail
                                            </button>
                                        </a>
                                        <a href="{{ route('admin-lyrics-edit', $lyric->id) }}">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i>
                                                Edit</button>
                                        </a>
                                        <form action="{{ route('admin-lyrics-delete', $lyric->id) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
