<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    
    protected  $fillable = [
    	'user_id', 'first_name', 'last_name', 'email', 'body', 'commentable_id', 'commentable_type'
    ];
    public function commentable()
    {
        return $this->morphTo();
    }
    public function rating()
    {
        return $this->hasOne('App\TrainerRating', 'review_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
