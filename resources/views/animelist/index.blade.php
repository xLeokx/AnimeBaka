@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo asset('css/animecards.css')?>" type="text/css">

<P> <h4>Lista de Animes</h4></P>
<div class="row">


        @foreach( $arrayAnimes as $anime )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/animelist/show/' . $anime->id ) }}">
                    <img src="{{$anime->poster}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$anime->title}}
                    </h4>
                </a>
                <a href="{{ url('/animelist/' . $anime->id . $user = auth()->user()->id) }}"> <i class="glyphicon glyphicon-star" style="color:black"></i></a>

            </div>
        @endforeach
    </div>




    <p><h4>Lista de Favoritos</h4></p> 
    <div class="row">
    

        @foreach( $arrayAnimesFavoritos as $misfav )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/animelist/show/' . $misfav->id ) }}">
                    <img src="{{$misfav->poster}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$misfav->title}}        
                    </h4>
                </a>
                
                
                

            </div>
        @endforeach
    </div>

    
@stop
