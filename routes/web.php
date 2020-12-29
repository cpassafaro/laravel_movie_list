<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('movies', 'ApiController@getAllMovies');
// Route::post('movies/create', 'ApiController@createMovie');
// Route::get('movies/{status}','ApiController@getMovieByStatus');
// Route::put('movies/{id}', 'ApiController@updateMovie');
// Route::delete('movies/{id}', 'ApiController@deleteMovie');



//multiple routes for movie controller, run php artisan route:list  to see the routes
// Route::resource('movies', 'MovieController');
