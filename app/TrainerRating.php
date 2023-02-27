<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainerRating extends Model
{
	use SoftDeletes;
	
	protected $fillable = ['review_id', 'knowledge_rating', 'training_technique_rating', 'communication_rating', 'results_rating', 'service_quality_rating'];

    public function review()
    {
        return $this->belongsTo('App\Comment', 'review_id');
    }
}
