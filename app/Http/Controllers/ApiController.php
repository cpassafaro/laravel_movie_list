<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class ApiController extends Controller
{
    public function getAllMovies(){
        //logic to retrieve all movies
        $movies = Movie::all();
        return $movies;
    }

    public function createMovie(Request $request){
        //create movie 
        $movie = new Movie;
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->length = $request->length;
        $movie->status = $request->status;
        $movie->save();

        return response()->json([
            "message" => "Movie created"
        ], 201);
    }

    public function getMovieByStatus($status){
        //get movie by status
        if(Movie::where('status', $status)->exists()){
            $movie = Movie::where('status', $status)->get();
            return response($movie, 200);
        }else{
            return response()->json([
                "message"=>"No movies with that status"
            ],404);
        }
    }

    public function updateMovie(Request $request, $id){
        //logic to update student
        if(Movie::where('id', $id)->exists()){
            $movie = Movie::find($id);
            //using ternaray operator to check if we are only changing one of the properties,
            //if there is no info for a key then it will not be updated
            $movie->name = is_null($request ->name) ? $movie->name : $request->name;
            $movie->description = is_null($request ->description) ? $movie->description : $request->description;
            $movie->length = is_null($request ->length) ? $movie->length : $request->length;
            $movie->status = is_null($request ->status) ? $movie->status : $request->status;
            $movie->save();

            return response()->json([
                "message" =>'records updated successfully'
            ], 200);
        }else{
            return response()->json([
                "message"=>"Movie not found"
            ], 404);
        }
    }

    public function deleteMovie($id){
        if(Movie::where('id', $id)->exists()){
            $movie = Movie::find($id);
            $movie->delete();

            return response()->json([
                "message" => "Movie deleted"
            ], 202);
        }else{
            return response()->json([
                "message" => "Movie not found"
            ], 404);
        }
    }
}
