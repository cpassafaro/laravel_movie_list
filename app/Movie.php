<?php

namespace App;
//these are our models that we create with artisan
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['name', 'time'];
}
