<?php

namespace App;
//these are our models that we create with artisan
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //this would automatically be the name anyway but this is an example of how you could change the name from what we have in the class
    protected $table = 'movies';

}
