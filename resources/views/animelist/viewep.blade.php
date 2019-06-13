@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/viewep.css')?>" type="text/css">
<div class="container mt-4">
    <div class="row justify-content-around pt-3 pb-3" id="box_episodio" >
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 align-self-center ">
                <div class="text-center mt-4 mb-4"><h4>{{$Episodio->title}}</h4></div>
           
            <div class="text-center"><video width="100%" height="100%" controls src="{{$Episodio->ruta}}" type="video/mp4"></video></div>
            





            <div class="container">
                <div class="row justify-content-around mt-3 mb-3" >



                    <div class="col-4">
                        @if($Previous=='1')
                        @else
                        <div class="text-left"><a class="btn btn-outline-info" id="btn"
                            href="{{ url('/animelist/viewep/' . $Previous->id ) }}"><i class="far fa-arrow-alt-circle-left fa-2x"></i></a></div>
                        @endif
                    </div>


                    <div class="col-4">
                            <div class="text-center" >   <a class="btn btn-outline-info" id="btn" href="{{ url('/animelist/show/' . $Anime) }}">Pagina del
                            Anime</a></div>
                      
                    </div>


                    <div class="col-4">
                        @if($Next=='1')
                        @else
                        <div class="text-right" >   <a class="btn btn-outline-info "  id="btn" href="{{ url('/animelist/viewep/' . $Next->id  )}}"><i class="far fa-arrow-alt-circle-right fa-2x"></i></a></div>
                        
                        @endif
                    </div>



                </div>
            </div>






        </div>
    </div>
</div>
            
@stop
