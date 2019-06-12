@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">

  
    <div class="container-fluid">

        <!--row1 -->

        <div class="row justify-content-center">

        <form   action="{{ url('animelist/edit/' . $anime->id) }}" method="POST">
        {{method_field('PUT')}}
        @csrf
            <div class="col-3">
                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario" id="formulario_box" >

                    <h1>Modificar el anime: {{ $anime->title }}</h1>

                    <!--SING IN -->
                    <div class="user_box">
                        <input type="text" class="form-control" value="{{ $anime->title }}" name="title"  placeholder="Titulo" id="UserName">
                    </div>
                   
                    <div class="password_box" id="icono_pass">
                        <input type="number" class="form-control" value="{{ $anime->year }}" name="year"  placeholder="Año" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" value="{{ $anime->director }}" name="director"  placeholder="Director" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" value="{{ $anime->nota }}" name="nota"  placeholder="Nota" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" value="{{ $anime->genero }}" name="genero"  placeholder="Genero" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="url" class="form-control" value="{{ $anime->poster }}" name="poster"  placeholder="URL - Poster" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <textarea type="text" class="form-control" value="{{ $anime->synopsis }}" name="synopsis" rows="3" placeholder="Synopsis" id="Password"></textarea>
                    </div>
                   
                    

                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block mt-4">Añadir</button>
                </div>
            </div>
        </div>
            
        
    <div class="img1"><img src="<?php echo asset('media/back.png')?>" alt="" class="img-fluid p2"></div>


@stop
