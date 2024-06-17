<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestLyricsController extends Controller
{
    public function index()
    {
        return view('riellyrics.request-lyrics');
    }
}
