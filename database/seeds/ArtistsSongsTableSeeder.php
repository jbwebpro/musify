<?php

use App\Artist;
use App\Song;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsSongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->delete();
        DB::table('songs')->delete();


        factory(Artist::class,10)->create()->each(function($artist){
            $artist->songs()->saveMany(
                factory(Song::class, rand(1,10))->make()
            );
        });
    }
}
