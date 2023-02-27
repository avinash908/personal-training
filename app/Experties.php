<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Review;

class Experties extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    	'title','slug'
    ];

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
    public function users()
    {
    	return $this->belongsToMany('App\User','user_experties');
    }
}
