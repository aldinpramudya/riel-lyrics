<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lyric; // Import the Lyric class
use App\Models\Song; // Import the Song class

class AdminLyricsController extends Controller
{
    public function index()
    {
        $lyrics = Lyric::with('song')->get();
        return view('admin.lyrics', compact('lyrics'));
    }

    public function create()
    {
        $songs = Song::all();
        return view('admin.lyrics-create', compact('songs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_song' => 'exists:songs,id',
            'lyrics_language' => 'string|max:255',
            'lyrics' => 'string',
        ]);

        Lyric::create($request->all());

        return redirect()->route('admin-lyrics')->with('success', 'Lyric created successfully.');
    }

    public function edit($id)
    {
        $lyrics = Lyric::find($id);
        $songs = Song::all();
        return view('admin.lyrics-edit', compact('lyrics', 'songs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_song' => 'exists:songs,id',
            'lyrics_language' => 'string|max:255',
            'lyrics' => 'string',
        ]);

        $lyric = Lyric::find($id);
        $lyric->update($request->all());

        return redirect()->route('admin-lyrics')->with('success', 'Lyric updated successfully');
    }

    public function destroy($id)
    {
        $lyric = Lyric::findOrFail($id);
        $lyric->delete();

        return redirect()->route('admin-lyrics')->with('success', 'Lyric deleted successfully');
    }

    public function show(Lyric $lyric)
    {
        return view('admin.lyrics-detail', compact('lyric'));
    }

}
