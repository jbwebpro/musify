<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $songs = Song::orderBy('id','desc')->paginate(12);
        return view('index',compact('songs'));
    }

    public function details(Song $song)
    {
        return view('show',compact('song'));
    }
}
