@extends('layouts.base')
@section('content')
    <h1 class="text-uppercase fw-bolder text-center">request lyrics</h1>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="inputRequest" class="form-label">Song Request</label>
                <input type="text" class="form-control" id="songrequest" placeholder="Singer - Songs (LiSa - Crossing Field)">
            </div>
            <div class="mb-3">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" placeholder="i would like to request this song !">
            </div>
            <div class="mb-3">
                <label for="inputDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="date">
            </div>
            <button type="submit" class="btn btn btn-outline-dark mb-3">Submit</button>
        </form>
    </div>
@endsection
