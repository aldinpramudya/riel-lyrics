<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Album;
use Illuminate\Http\Request;

class AdminSongsController extends Controller
{
    public function index(){
        $songs = Song::with('album')->get();
        return view('admin.songs', compact('songs'));
    }

    public function create(){
        $albums = Album::all();
        return view('admin.song-create', compact('albums'));
    }
    
    public function store(Request $request){
        $request->validate([
            'id_album' => 'required|exists:albums,id',
            'original_title' => 'nullable|string|max:255',
            'alternate_title' => 'required|string|max:255',
            'release_date' => 'required',
            'youtube_link' => 'nullable|string|max:255',
            'spotify_link' => 'nullable|string|max:255',
        ]);

        Song::create($request->all());

        return redirect()->route('admin-songs')->with('success', 'Song created successfully.');
    }

    public function edit($id){
        $song = Song::find($id);
        $albums = Album::all();
        return view('admin.song-edit', compact('song', 'albums'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'id_album' => 'required|exists:albums,id',
            'original_title' => 'nullable|string|max:255',
            'alternate_title' => 'required|string|max:255',
            'release_date' => 'required',
            'youtube_link' => 'nullable|string|max:255',
            'spotify_link' => 'nullable|string|max:255',
        ]);

        $song = Song::find($id);
        $song->update($request->all());

        return redirect()->route('admin-songs')->with('success', 'Song updated successfully.');
    }

    public function destroy($id){
        $song = Song::findOrFail($id);
        $song->delete();

        return redirect()->route('admin-songs')->with('success', 'Song deleted successfully.');
    }


}
