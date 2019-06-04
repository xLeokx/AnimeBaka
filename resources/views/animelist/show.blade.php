@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/animelist/show/' . $anime->id ) }}">
                <img src="{{$anime->poster}}" style="height:220px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$anime->title}}</h4>
            <h6>A&ntilde;o: {{$anime->year}}</h6>
            <h6>Director: {{$anime->director}}</h6>
            <p><strong>Resumen:</strong> {{$anime->synopsis}}</p>


            
            <a class="btn btn-outline-info" href="{{ action('AnimelistController@getIndex') }}">Volver al listado</a>
            @if(Auth::user()->is_admin == "true")
            <a class="btn btn-warning" href="{{ url('/animelist/edit/' . $anime->id ) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar An&iacute;me</a>
             <a class="nav-link" href="{{url('/animelist/createep/' . $anime->id)}}"> Nuevo Episodio</a>
             @endif


            
            @foreach( $Episodios as $Episodio )
                <p>
                <a class="btn btn-outline-info" href="{{ url('/animelist/viewep/' . $Episodio->id )}}">{{$Episodio->title}}</a> 
                @if(Auth::user()->is_admin == "true")
                <a class="btn" href="{{ url('/animelist/editep/' . $Episodio->id ) }}">Mod-EP </a> 
                <a href="/animelist/deleteep/{{$Episodio->id}}">Delete</a>
                @endif
                


                </p>
            @endforeach 
            

        </div>
    </div>


@stop
