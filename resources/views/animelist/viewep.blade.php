@extends('layouts.master')

@section('content')

<div class="row">
        <div class="col-xs-6  text-center">
                <h4>{{$Episodio->title}}</h4>
        </div>
</div>
          


<video width="720" height="420" controls src="{{$Episodio->ruta}}"type="video/mp4"></video>


<div class="row">


        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        @if($Previous=='1')
        @else
        <a class="btn btn-outline-info" href="{{ url('/animelist/viewep/' . $Previous->id ) }}">After</a>  
        @endif
        @if($Next=='1')
        @else
        <a class="btn btn-outline-info" href="{{ url('/animelist/viewep/' . $Next->id  )}}">Next</a>
        @endif

        </div>
        <a class="btn btn-outline-info" href="{{ url('/animelist/show/' . $Anime) }}">Pagina del Anime</a>  
</div>
            
@stop
