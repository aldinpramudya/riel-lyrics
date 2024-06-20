@extends('layouts.base')
@section('content')
    <div class="container">
        <h1>{{ $artists->name }}</h1>
        <h5>{{ $artists -> description}}</h5>
    </div>
@endsection
