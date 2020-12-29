<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', 'ApiController@getAllMovies');
Route::post('movies/create', 'ApiController@createMovie');
Route::get('movies/{status}','ApiController@getMovieByStatus');
Route::put('movies/{id}', 'ApiController@updateMovie');
Route::delete('movies/{id}', 'ApiController@deleteMovie');