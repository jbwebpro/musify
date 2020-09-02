<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'artist',
        'lyrics',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getLyricsHtmlAttribute() 
    {
        return clean(\Parsedown::instance()->text($this->lyrics));
    }

    public function path()
    {
        return Str::slug($this->title);
    }
}
