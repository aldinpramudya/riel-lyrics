<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAlbumsController extends Controller
{
    public function index(){
        return view('admin.albums');
    }
}
