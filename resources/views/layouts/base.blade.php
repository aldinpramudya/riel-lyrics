<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @stack('button-styles')

    {{-- Bootstrap Scaffolding --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Rielyrics</title>
</head>

<body>
    @include('layouts.navbar')
    <div class="mt-4">
        @yield('content')
    </div>
    
    <div class="d-flex flex-column min-vh-100">
        @include('layouts.footer')
    </div>
</body>

</html>
