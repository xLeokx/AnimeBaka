@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="<?php echo asset('css/animecards.css')?>" type="text/css">

<div class="row">

        @foreach( $arrayAnimes as $anime )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/animelist/show/' . $anime->id ) }}">
                    <img src="{{$anime->poster}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$anime->title}}
                    </h4>
                </a>

            </div>
        @endforeach
    </div>
@stop
