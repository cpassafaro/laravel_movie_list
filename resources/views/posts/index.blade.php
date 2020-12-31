@extends('layouts.app')

@section('content')
    {{-- <div class='jumbotron text-center'> --}}
        <h1> Active Movies</h1>
        @if(count($active)>0)
            @foreach($active as $act)
                <div class='well'>
                    <h3><a href="/movies/{{$act->id}}">{{$act->name}}</a></h3>
                    <p>{{$act->description}}</p>
                </div>
            @endforeach
            {{$active->links()}}
        @else 
            <p>No Active Movies Found</p>
        @endif
        <h1>Inactive Movies</h1>
        @if(count($inactive)>0)
            @foreach($inactive as $act)
                <div class='well'>
                    <h3><a href="/movies/{{$act->id}}">{{$act->name}}</a></h3>
                    <p>{{$act->description}}</p>
                </div>
            @endforeach
            {{$inactive->links()}}
        @else 
            <p>No Inactive Movies Found</p>
        @endif
    {{-- </div> --}}
@endsection