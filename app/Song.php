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

    protected $appends = ['created_date','lyrics_html'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getLyricsHtmlAttribute() 
    {
        return clean($this->lyricsHtml());
    }

    public function lyricsHtml()
    {
        return \Parsedown::instance()->text($this->lyrics);
    }

    public function getExcerptAttribute()
    {
        return $this->excerpt(250);
    }

    public function excerpt($length)
    {
        return Str::limit(strip_tags($this->lyricsHtml()),$length);
    }

    // public function getRouteKeyName()
    // {
    //     return $this->slug;
    // }

    // public function path()
    // {
    //     return Str::slug($this->title);
    // }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
