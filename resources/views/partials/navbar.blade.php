@if( Auth::check() )

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo asset('css/navbar.css')?>" type="text/css">

<script src="<?php echo asset('js/java.js')?>"></script>


<nav class="navbar navbar-expand-md sticky-top" id="nav_color">
    <div class="container p-0">
        <div > <a class="navbar-brand" id="logo_nav" href="{{url('/animelist')}}"><div><img id="logo" src="<?php echo asset('media/logo.png')?>" alt="" ></div></a></div>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav " id="nav_inicio">
                <a id="items" class="nav-item nav-link" href="{{url('/animelist')}}"> <span class="mr-3 ml-3">Inicio</span><i class="fas fa-home"></i></a>
                @if(Auth::user()->is_admin == true)
                <a id="items" class="nav-item nav-link  {{  Request::is('animelist/create') ? 'active' : ''}}"
                    href="{{url('/animelist/create')}}"> <span class="mr-3 ml-3">Añadir anime</span><i class="fas fa-plus"></i></a>
                @endif
                <a id="items" class="nav-item nav-link" href="#misfav"> <span class="mr-3 ml-3">MisFav</span><i class="far fa-star"></i></a>
            </div>
           
            <div class="navbar-nav ml-auto  " id="nav_inicio">
                <form class="form-inline" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                    <a id="items"><button class="btn btn-outline" id="cerrarsesion" type="submit"> <span class="mr-3">Cerrar Sesion</span><i class="fas fa-times"></i></button></a>
                    
                </form>
            </div>
            <div class="navbar-nav   " id="nav_inicio">
               <span id="miname" class="ml-3"> {{Auth::user()->name}}</span>
            </div>
            <div class="navbar-nav" id="search_box">
                <form class="form-inline" action="{{url('animelist/search')}}" method="get">
                    <input class=" mr-sm-2" id="search_input" type="search" name="search" placeholder="Busca tu anime"
                        aria-label="Search">
                        
                    <button class="btn btn-outline my-2 my-sm-0" id="search_btn" type="submit"><i
                            class="fas fa-search fa-lg"></i></button>
                </form>
            </div>
        </div>
    </div>
</nav>


    @endif
   
