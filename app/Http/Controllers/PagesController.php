<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $songs = Song::orderBy('id','desc')->paginate(12);
        return view('index',compact('songs',));
    }

    public function song(Song $song)
    {
        return view('song',compact('song'));
    }

    public function artist(Artist $artist)
    {
        return view('artist',compact('artist'));
    }
}
