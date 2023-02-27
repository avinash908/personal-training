<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeToWork extends Model
{
	
    protected $fillable = ['with'];
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
