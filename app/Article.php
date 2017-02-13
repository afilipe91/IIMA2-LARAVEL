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

}
