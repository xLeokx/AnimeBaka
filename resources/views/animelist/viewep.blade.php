@extends('layouts.master')

@section('content')

<p>{{$Episodio}}</p>
-------------
<p>{{$Previous}}</p>
----------------
<p>{{$Next}}</p>

<video width="720" height="540" controls src="{{$Episodio->ruta}}"type="video/mp4"></video>


<div class="row">


        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a class="btn btn-outline-info" href="{{ url('/animelist/viewep/' . $Previous->id ) }}">After</a>  
        <a class="btn btn-outline-info" href="{{ url('/animelist/viewep/' . $Next->id  )}}">Next</a>
        <a class="btn btn-outline-info" href="{{ url('/animelist/show/' . $Anime) }}">Pagina del Anime</a>  
        
                 
        </div>
</div>
            
@stop
