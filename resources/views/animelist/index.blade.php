@extends('layouts.master')

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo asset('css/index.css')?>" type="text/css">
<script  src="<?php echo asset('js/java.js')?>"></script>

<button onclick="topFunction()" id="myBtn" class="nav-link" title="Go to top">
        <i class="fas fa-arrow-up"></i>
</button>

 <div class="container-fluid " id="entrada" ></div>

    <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-4 align-self-center mt-1 mb-1" >
                            <h1 id="box_lista">Lista de Bakanime</h1>
                    </div>  
            </div>
    </div>

    <div class="container mt-1" id="nosotros">
        <div class="row justify-content-center">
        @foreach( $arrayAnimes as $anime )
            <div class="col-7 col-sm-6 col-md-4 col-lg-3 align-self-center mt-1 mb-1" id="inicio">
                <div class="card ">
                    <div class="front" style="background-image: url('{{$anime->poster}}')">
                        <div class="title">
                            <h2>{{$anime->title}}</h2>
                        </div>
                    </div>
                    <div class="back">
                   <a class="linkfav"  href="{{ url('/animelist/' . $anime->id  .'/'. $anime->title ) }}"><i class="far fa-star"></i></a>
                        <p>{{$anime->synopsis}}</p>  
                       
                        <a  id="btn_ver" class="btn" href="{{ url('/animelist/show/' .$anime->id) }}">Ver Anime</a> 
                    </div>
                </div>
            </div>
        @endforeach  
        </div>
    </div>

    <div class="container mt-4">
            <div class="row justify-content-center" >
                    <div class="col-12 " > <p id="paginador">{{ $arrayAnimes->onEachSide(1)->links() }}</p></div>
            </div>
    </div>
    
    @if( $arrayAnimesFavoritos->first()== null)

    @else 
    <div class="container-fluid mt-1">
            <div class="row justify-content-around">
                    <div id="misfav" class="col-12 col-sm-10 col-md-8 col-lg-4 align-self-center mt-1 mb-1"  >
                            <h1 id="box_lista">Lista de Favoritos</h1>
                    </div>  
            </div>
    </div>
    @endif
    <div class="container " id="nosotros">
        <div class="row justify-content-around">
        @foreach( $arrayAnimesFavoritos as $misfav )
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 align-self-center mt-1 mb-1" id="inicio">
                <div class="card">
                    <div class="front" style="background-image: url('{{$misfav->poster}}')">
                        <div class="title">
                            <h2>{{$misfav->title}}</h2>
                        </div>
                    </div>
                    <div class="back">
                    <a class="linkfav"  href="{{ url('/animelist/' . $misfav->id .'/'. $misfav->title) }}"><i class="far fa-star"></i></a>
                    <p>{{$misfav->synopsis}}</p>  
                        <a id="btn_ver" class="btn" href="{{ url('/animelist/show/' . $misfav->id) }}">Ver Anime</a> 
                       
                      
                    </div>
                </div>
            </div>
        @endforeach  
        </div>
    </div>

    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



     


    


    
@stop
