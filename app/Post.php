<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }

    public function getCreatedAtAttribute($value)
    {
        $datetime = explode(' ', $value);

        $date = explode('-', $datetime[0]);

        return  $date[2]."-".$date[1]."-".$date[0];
    }

    public function getTagListAttribute()
    {
        $tags = $this->tags()->lists('name')->all();
        return implode(', ', $tags);
    }
}
