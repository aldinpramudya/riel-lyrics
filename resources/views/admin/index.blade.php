@extends('admin.base')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Dashboard</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Rielyrics Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="#" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Artist</h5>
                        <h3 class="fw-medium font-size-24">1,685</h3>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="bi bi-arrow-bar-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="#" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Albums</h5>
                        <h4 class="fw-medium font-size-24">52,368</h4>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="bi bi-arrow-bar-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="#" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Songs</h5>
                        <h4 class="fw-medium font-size-24">15.8</h4>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="bi bi-arrow-bar-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-start mini-stat-img me-4">
                            <img src="#" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase text-white-50">Lyrics</h5>
                        <h4 class="fw-medium font-size-24">2436</h4>
                    </div>
                    <div class="pt-2">
                        <div class="float-end">
                            <a href="#" class="text-white-50"><i class="bi bi-arrow-bar-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
