<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lyric;
use App\Models\Artist;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $lyrics = Lyric::with(['song.album.artist'])
            ->where('lyrics', 'like', '%' . $search . '%')
            ->get();
        $artists = Artist::all();
        return view('riellyrics.home', compact('lyrics', 'artists'));
    }

    public function show(Lyric $lyric)
    {
        $lyrics = Lyric::with(['song.album.artist'])->get();
        return view('riellyrics.lyric', compact('lyric'));
    }

    public function showArtist(Artist $artist)
    {
        $artists = Artist::with(['albums.songs'])->get();
        return view('riellyrics.artist-detail', compact('artist'));
    }
}
