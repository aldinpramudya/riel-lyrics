@extends('admin.base')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Artist</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Artist List</li>
                </ol>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a href="{{ route('admin-artist-create') }}">
                    <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New Artist </button>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Instagram Link</th>
                                <th>Youtube_Link</th>
                                <th>Edit Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artists as $artist)
                                <tr>
                                    <td>{{ $artist->name }}</td>
                                    <td>{{ Str::words($artist->description, 10, '...') }}</td>
                                    <td>{{ $artist->instagram_link }}</td>
                                    <td>{{ $artist->youtube_link }}</td>
                                    <td>
                                        <a href="{{ route('admin-artist-edit', $artist->id) }}">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i>
                                                Edit</button>
                                        </a>
                                        <form action="{{ route('admin-artist-delete', $artist->id) }}" method="POST" style="display: inline-block">
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

@section('datatable-js')
@endsection
