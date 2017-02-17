<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    protected $fillable = [
        'title','content','user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();

        return (! is_null($like)) ? true : false;
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
