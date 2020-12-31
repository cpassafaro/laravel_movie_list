@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>
    {!! Form::open(['action' => ['MovieController@update', $movie->id], 'method'=> 'POST'])!!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $movie->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $movie->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('length', 'Length')}}
            {{Form::text('length', $movie->length, ['class' => 'form-control', 'placeholder' => 'Length'])}}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            {{Form::text('status', $movie->status, ['class' => 'form-control', 'placeholder' => 'Status'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection