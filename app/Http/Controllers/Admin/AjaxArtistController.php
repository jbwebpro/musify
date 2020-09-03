<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxArtistController extends Controller
{
    public function artistsFetch()
    {
        $artists = Artist::all();
        return $artists;
    }

    public function artistsSearch(Request $request)
    {
        // $data = [];

        $artists = Artist::where('name','LIKE','%'."%$search%")->get(['id','name']);
        return ['results' => $artists];

        // if($request->has('query')) {
        //     $search = $request->query;
        //     $data = DB::table('artists')
        //     ->select("id","name")
        //     ->where("name","LIKE","%$search%")
        //     ->get();
        // }
        // return response()->json($data);
    }
}
