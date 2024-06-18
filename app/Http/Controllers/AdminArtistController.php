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
        return view('admin.artists');
    }

    public function create(){
        return view('#');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'instagram_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
        ]);

        Artist::create($request->all());

        return redirect()->route('admin.artists')->with('success', 'Artist created successfully');
    }

    public function edit(Artist $artist){
        return view('#', compact('artist'));
    }

    public function update(Request $request, Artist $artist){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'instagram_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
        ]);

        $artist->update($request->all());

        return redirect()->route('admin.artists')->with('success', 'Artist updated successfully');
    }

    public function destroy(Artist $artist){
        
        $artist->delete();

        return redirect()->route('admin.artists')->with('success', 'Artist deleted successfully');
    }


}
