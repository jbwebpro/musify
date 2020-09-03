<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\Song;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::orderBy('id','desc')->paginate(15);
        return view('admin.songs.index',compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $song = new Song();
        $artists = Artist::all();
        return view('admin.songs.create',compact('song','artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'lyrics' => 'required'
        ]);

        Song::create($validatedData);

        return redirect()->route('songs.index')->with('message','Successfully created a new Song lyrics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('admin.songs.show',compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('admin.songs.edit',compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $song->title = $request->title;
        $song->artist = $request->artist;
        $song->lyrics = $request->lyrics;
        $song->save();
        Alert::success('Song Updated', 'Success updated the song');
        return redirect()->route('songs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        Alert::warning('Song Deleted', 'Song deleted easily');
        return redirect()->route('songs.index');
    }
}
