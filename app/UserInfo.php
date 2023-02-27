<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
	use SoftDeletes;
	
	protected $fillable = [
		'free_trial','phone','location','price_for_one','price_for_group','reps_number','about','facebook', 'twitter', 'instagram',
	];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}