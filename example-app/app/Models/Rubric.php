<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;
    //rubric =Rubric:find(1);
    //$rubric->post
    public function  posts()
    {
        return $this->hasMany('App\Models\Post');
//        return $this->hasOne(Post::class);


    }
}
