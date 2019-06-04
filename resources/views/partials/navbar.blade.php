<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> AnimeBaka</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('animelist') && ! Request::is('animelist/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/animelist')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Inicio
                        </a>
                    </li>
                    @if(Auth::user()->is_admin == "true")
                    <li class="nav-item {{  Request::is('animelist/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/animelist/create')}}">
                            <span>&#10010</span> Nuevo Anime
                        </a>
                    </li>
             
             @endif
                    
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
