<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLyricsController extends Controller
{
    public function index(){
        return view('admin.lyrics');
    }
}
