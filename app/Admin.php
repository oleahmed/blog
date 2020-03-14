<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
     protected $fillable = [
        'name','password',
    ];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
