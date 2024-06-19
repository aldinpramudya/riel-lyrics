<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album; // Import the Album class
use App\Models\Artist; // Import the Artist class

class AdminAlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::with('artist')->get();
        return view('admin.albums', compact('albums'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('admin.album-create', compact('artists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_artist' => 'required|exists:artists,id',
            'title' => 'required|string|max:255',
            'release_date' => 'required',
        ]);

        Album::create($request->all());

        return redirect()->route('admin-albums')->with('success', 'Album created successfully.');
    }

    public function edit($id)
    {
        $album = Album::find($id);
        $artists = Artist::all();
        return view('admin.album-edit', compact('album', 'artists'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_artist' => 'required|exists:artists,id',
            'title' => 'required|string|max:255',
            'release_date' => 'nullable|string',
        ]);

        $album = Album::find($id);
        $album->update($request->all());

        return redirect()->route('admin-albums')->with('success', 'Album updated successfully.');
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect()->route('admin-albums')->with('success', 'Album delete successfully.');
    }
}
