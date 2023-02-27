<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
	use SoftDeletes;
	
	protected $fillable = [
		'language',
	];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
