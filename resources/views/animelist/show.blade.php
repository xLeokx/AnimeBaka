@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="<?php echo asset('css/show.css')?>" type="text/css">
<div class="container"> 
    <div class="row justify-content-around mt-4 mb-4 " id="box_anime">

    
        <div class="col-0 col-sm-10 col-md-4 col-lg-4 align-self-center mt-4 mb-4">
            <img src="{{$anime->poster}}"/>
           
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-8 align-self-center  mb-4 " > 
            <h2> <strong>{{$anime->title}}</strong> </h2>
            <h5><strong>Director : </strong><span id="spans">{{$anime->director}}</span> </h5>
            <h5><strong>Año : </strong><span id="spans">{{$anime->year}}</span> </h5>
            <h5><strong>Nota : </strong><span id="spans">{{$anime->nota}}</span></h5>
            <h5><strong>Resumen : </strong><span id="spans">{{$anime->synopsis}}</span></h5>

            
            
            
            
            








            <a class="btn btn-outline-info" id="btn" href="{{ action('AnimelistController@getIndex') }}">Volver al listado</a>
            @if(Auth::user()->is_admin == true)
            <a class="btn btn-outline-info" id="btn" href="{{ url('/animelist/edit/' . $anime->id ) }}">Editar Anime</a>
            <a class="btn btn-outline-info" id="btn" href="{{url('/animelist/createep/' . $anime->id)}}"> Nuevo Episodio</a>
            @endif
        </div>
    </div>
</div>


<div class="container mt-1 mb-1"> 
    <div class="row justify-content-around" id="box_episodio" >
    @foreach( $Episodios as $Episodio )
    <div class="col-0 col-sm-10 col-md-4 col-lg-4 align-self-center mt-3">
    @if(Auth::user()->is_admin == true)
        <a class="btn btn-outline-info" id="btn" href="{{ url('/animelist/editep/' . $Episodio->id ) }}">Editar Episodio </a> 
        <a class="btn btn-outline-info" id="btn" href="/animelist/deleteep/{{$Episodio->id}}">Borrar Episodio</a>
        @endif
      
    </div>
       
       <div class="col-12 col-sm-12 col-md-6 col-lg-8 align-self-center mt-3 " >
       <a class="btn btn-outline-info" id="btn" href="{{ url('/animelist/viewep/' . $Episodio->id )}}">{{$Episodio->title}}</a>      
        
        </div>
    
   
      @endforeach
      </div>
</div>



@stop
