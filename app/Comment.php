<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body','article_id','user_id',
    ];

    public function articles(){
        return $this->belongsTo('App\Article');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
