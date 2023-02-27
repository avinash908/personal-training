<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['user_id', 'title', 'slug', 'content','viewsCount'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
