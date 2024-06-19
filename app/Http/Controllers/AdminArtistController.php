<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class AdminArtistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $artists = Artist::all();
        return view('admin.artists', compact('artists'));
    }

    public function create(){
        return view('admin.artist-create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'instagram_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
        ]);

        Artist::create($request->all());

        return redirect()->route('admin-artist')->with('success', 'Artist created successfully');
    }

    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('admin.artist-edit', compact('artist'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'instagram_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
        ]);

        $artist = Artist::find($id);
        $artist->update($request->all());

        return redirect()->route('admin-artist')->with('success', 'Artist updated successfully');
    }

    public function destroy($id){

        $artist = Artist::findOrFail($id);
        $artist->delete();


        return redirect()->route('admin-artist')->with('success', 'Artist deleted successfully');
    }


}
