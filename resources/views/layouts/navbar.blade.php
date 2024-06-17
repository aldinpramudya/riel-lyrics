<nav class="navbar navbar-expand-lg" style="background-color: #FFF065">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="{{ route('home') }}">
                <h2 class="fw-bolder">Rielyrics.</h2>
            </a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active fw-bolder text-uppercase" aria-current="page"
                        href="{{ route('artist') }}">artist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bolder text-uppercase" aria-current="page"
                        href="{{ route('requestlyrics') }}">request lyrics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bolder text-uppercase" aria-current="page"
                        href="{{ route('aboutjoinus') }}">about/join us</a>
                </li>
            </ul>
            <div class="ms-auto">
                <a class="nav-link active fw-bolder text-uppercase" aria-current="page"
                    href="{{ route('admin-login') }}">login</a>
            </div>
        </div>
    </div>
</nav>
