@extends('layouts.master')

@section('content')
<p>Hola vecinos de mi ciudad{{$Episodio}}</p>

<video width="720" height="540" controls src="{{$Episodio->ruta}}"type="video/mp4"></video>
            
@stop
