<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'email',
        'password',
        'name',
        'gender_id',
        'created_at',
        'updated_at'
    ];


    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
