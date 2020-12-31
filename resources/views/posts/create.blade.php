@extends('layouts.app')

@section('content')
    <h1>Create Movie</h1>
    {!! Form::open(['action' => 'MovieController@store', 'method'=> 'POST'])!!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('length', 'Length')}}
            {{Form::text('length', '', ['class' => 'form-control', 'placeholder' => 'Length'])}}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            {{Form::text('status', '', ['class' => 'form-control', 'placeholder' => 'Status'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection