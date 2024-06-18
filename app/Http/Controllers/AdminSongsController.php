<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSongsController extends Controller
{
    public function index(){
        return view('admin.songs');
    }
}
