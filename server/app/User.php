<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'email',
        'password',
        'display_name',
        'gender_id',
    ];


    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
