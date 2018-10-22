<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Video 11 diakhir
    //protected $fillable = ['title', 'body'];
    //Kebalikan fillable
    protected $guarded = [];
}
