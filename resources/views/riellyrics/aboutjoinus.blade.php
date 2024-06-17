@extends('layouts.base')
@section('content')
    <h1 class="text-uppercase fw-bolder text-center">about/join us</h1>

    {{-- Welcome to Riellyrics --}}
    <div class="pt-4">
        <h4 class="text-capitalize fw-bold text-center">welcome to rielyrics!</h4>
        <div class="text-center fs-4">
            Rielyrics is a lyric database, and japan music community that focused on high quality translations. <br> We
            bring you
            what’s the best of us on
        </div>
        <div class="d-flex justify-content-center fw-bold">
            <ul class="fs-4">
                <li>Romanized transliteration to help international community to sing along</li>
                <li>Community-based to contribute songs and lyric suggestion</li>
                <li>Carefully maintained original lyric, including early preview on community socials</li>
            </ul>
        </div>
    </div>

    {{-- Why Japan Music ? --}}
    <div class="pt-4">
        <h4 class="text-capitalize fw-bold text-center">why japan music?</h4>
        <div class="text-center fs-4">
            As a fellow japan music enthusiasts, we find it so hard to sing along with our favorite j-pop, <br>anime opening
            and
            ending and many more without trusted and updated source of lyric. <br>We’re here to answer the wall that
            separate
            your passion and your singing wish.
        </div>
    </div>

    {{-- Join Us --}}
    <div class="pt-4">
        <h4 class="text-capitalize fw-bold text-center">Join Our Community!</h4>
        <div class="text-center fs-4">
            Rielyric has a public Discord community !, We’re working to build a lively, entertain to <br>enganged world wide
            japan music community and we’d love to see you here to with <br>other international japan music ethusiast !
        </div>
        <div class=" d-flex justify-content-center mt-2">
            <img src="{{ asset('img/discord-card.png') }}" alt="Discord Community Links" class="img-fluid" width="300">
        </div>
        <h4 class="text-center text-capitalize fw-bold pt-5">follow our social media!</h4>
        <div class="d-flex justify-content-center gap-4 mt-3">
            <a href="" style="color: black;">
                <i class="bi bi-instagram" style="font-size: 4rem"></i>
            </a>
            <a href="" style="color: black;">
                <i class="bi bi-facebook" style="font-size: 4rem"></i>
            </a>
            <a href=""  style="color: black;">
                <i class="bi bi-twitter-x" style="font-size: 4rem"></i>
            </a>
        </div>
    </div>
@endsection
