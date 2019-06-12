@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">


    <div class="container">

        <!--row1 -->

        <div class="row justify-content-center">

        <form  action="{{ url('animelist/create') }}" method="POST">
        @csrf
            <div class="col-4"></div>


            <div class="col-4">

                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">

                    <h1>Nuevo Anime</h1>

                    <!--SING IN -->
                    <div class="user_box">
                        <input type="text" class="form-control" name="title"  placeholder="Titulo" id="UserName">
                    </div>
                   
                    <div class="password_box" id="icono_pass">
                        <input type="number" class="form-control" name="year"  placeholder="Año" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" name="director"  placeholder="Director" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" name="nota"  placeholder="Nota" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" name="genero"  placeholder="Genero" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="url" class="form-control" name="poster"  placeholder="URL - Poster" id="Password">
                    </div>

                    <div class="password_box" id="icono_pass">
                        <textarea type="text" class="form-control" name="synopsis" rows="3" placeholder="Synopsis" id="Password"></textarea>
                    </div>
                   
                    

                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block mt-4">Añadir</button>
                    

                </div>
            </div>
            <div class="col-4"></div>
           
        </div>
    </div>
    <div class="img1"><img src="<?php echo asset('media/back.png')?>" alt="" class="img-fluid p2"></div>


@stop
