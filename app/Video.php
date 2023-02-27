<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
	use SoftDeletes;
	
    protected $fillable = ['user_id','video'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}