<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lyric;
use App\Models\Artist;

class ArtistController extends Controller
{


    public function index()
    {
        $artists = Artist::all();
        return view('riellyrics.artist', compact('artists'));
    }

    public function show($id)
    {
        $artists = Artist::find($id);
        return view('riellyrics.artist-detail', compact('artists'));
    }
    
}
