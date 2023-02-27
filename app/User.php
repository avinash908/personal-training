<?php

namespace App;

// use willvincent\Rateable\Rateable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    // use Rateable;
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function languages()
    {
        return $this->belongsToMany('App\Language', 'user_languages');
    }
    public function experties()
    {
        return $this->belongsToMany('App\Experties','user_experties');
    }
    public function info()
    {
        return $this->hasOne('App\UserInfo');
    }
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
    public function training_locations()
    {
        return $this->belongsToMany('App\Location', 'user_locations');
    }
    public function like_to_work_with()
    {
        return $this->belongsToMany('App\LikeToWork', 'user_like_to_works');
    }
    public function videos()
    {
        return $this->hasMany('App\Video');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function reviews()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug','gender','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
