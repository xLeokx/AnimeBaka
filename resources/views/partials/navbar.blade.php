@if( Auth::check() )
<link rel="stylesheet" href="<?php echo asset('css/navbar.css')?>" type="text/css">

<nav class="navbar navbar-expand-md sticky-top" id="nav_color">
    
    <a class="navbar-brand" id="logo_nav" href="#"><i class="fab fa-drupal fa-2x"></i></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
       
        
            <div class="navbar-nav " id="nav_inicio">
                <a class="nav-item nav-link" href="{{url('/animelist')}}" > <span>Inicio</span></a>
                @if(Auth::user()->is_admin == true)
                <a class="nav-item nav-link ml-4 {{  Request::is('animelist/create') ? 'active' : ''}}"  href="{{url('/animelist/create')}}"> <span>Añadir anime</span></a>
                @endif
            </div>

            <div class="navbar-nav navbar-right " id="nav_inicio">
                <form class="form-inline"  action="{{ url('/logout') }}" method="POST" >
                    {{ csrf_field() }}
                    <button class="btn btn-outline mr-4" type="submit"> <span>Cerrar Sesion</span></button>
                </form>
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
    </nav>
    @endif
   
