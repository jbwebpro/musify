<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('index',compact('songs'));
    }

    public function details(Song $song, $slug)
    {
        return view('show',compact('song'));
    }
}
