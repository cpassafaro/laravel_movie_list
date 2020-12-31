@extends('layouts.app')

@section('content')
    <a href='/movies' class='btn btn-secondary'>Go Back</a>
    <h1>{{$movie -> name}}</h1>
    <p>Description: {{$movie -> description}}</p>
    <p>Length: {{$movie -> length}}</p>
    <p>Status: {{$movie -> status}}</p>
    <hr>
    <a href="/movies/{{$movie->id}}/edit" class='btn btn-primary'>Edit</a>

    {!!Form::open(['action' => ['MovieController@destroy', $movie->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection