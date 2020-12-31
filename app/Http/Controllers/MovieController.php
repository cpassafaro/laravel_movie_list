<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = Movie::orderBy('created_at', 'asc') ->paginate(10);
        $active = Movie::where('status', 'Active')->orderBy('name', 'asc')->paginate(10);
        $inactive = Movie::where('status', 'Inactive')->orderBy('name', 'asc')->paginate(10);

        // $movies = Movie::all();
        return view('posts.index')->with('active', $active)->with('inactive', $inactive);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'length' => 'required',
            'status' => 'required'
        ]);

        $movie = new Movie;
        $movie ->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->length = $request->input('length');
        $movie->status = $request->input('status');
        $movie->save();

        return redirect('/movies')->with('success', 'Movie Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        return view('posts.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('posts.edit')->with('movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'length' => 'required',
            'status' => 'required'
        ]);

        $movie = Movie::find($id);
        $movie ->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->length = $request->input('length');
        $movie->status = $request->input('status');
        $movie->save();

        return redirect('/movies')->with('success', 'Movie Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();
        return redirect('/movies')->with('success', 'Post Removed');
    }
}
