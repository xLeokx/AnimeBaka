@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/index.css')?>" type="text/css">


<button id="mybtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
</button>

<div class="container-fluid " id="entrada" style="background-image: url('<?php echo asset('media/banner.jpg')?>">
        </div>



    <br>
    <br>
    <br>
   
    <div class="container-fluid mt-3">
            <div class="row justify-content-around">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 align-self-center mt-1 mb-1" >
                            <h1>Lista de AnimeBaka</h1>
                    </div>  
            </div>
    </div>


    <div class="container mt-3" id="nosotros">
        <div class="row justify-content-around">
        @foreach( $arrayAnimes as $anime )
            <div class="col-12 col-sm-5 col-md-5 col-lg-3 align-self-center mt-4 mb-1" id="inicio">
                <div class="card">
                    <div class="front" style="background-image: url('{{$anime->poster}}')">
                        <div class="title">
                            <h2>{{$anime->title}}</h2>
                           
                        </div>
                    </div>
                    <div class="back">
                        <p>historia pequeña.</p> 
                        
                        <a  href="{{ url('/animelist/' . $anime->id  .'/'. $anime->title ) }}">fav</a> 
                        <a class="btn" href="{{ url('/animelist/show/' .$anime->id) }}">Ver Anime</a> 
                        
                       
                    </div>
                </div>
            </div>
        @endforeach  
        </div>
    </div>

    <div>{{ $arrayAnimes->onEachSide(1)->links() }}</div>
    
    @if( $arrayAnimesFavoritos->first()== null)

    @else 
    <div class="container-fluid mt-3">
            <div class="row justify-content-around">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 align-self-center mt-1 mb-1" >
                            <h1>Lista de Favoritos</h1>
                    </div>  
            </div>
    </div>
    @endif


    <div class="container mt-3" id="nosotros">
        <div class="row justify-content-around">
        @foreach( $arrayAnimesFavoritos as $misfav )
            <div class="col-12 col-sm-10 col-md-5 col-lg-3 align-self-center mt-4 mb-1" id="inicio">
                <div class="card">
                    <div class="front" style="background-image: url('{{$misfav->poster}}')">
                        <div class="title">
                            <h2>{{$misfav->title}}</h2>
                        </div>
                    </div>
                    <div class="back">
                        <p>historia pequeña.</p>
                        <a class="btn" href="{{ url('/animelist/show/' . $misfav->id) }}">Ver Anime</a> 
                        <a href="{{ url('/animelist/' . $misfav->id .'/'. $misfav->title) }}"> <i class="glyphicon glyphicon-star" style="color:yellow">asd</i></a>
                    </div>
                </div>
            </div>
        @endforeach  
        </div>
    </div>

    


    
@stop
