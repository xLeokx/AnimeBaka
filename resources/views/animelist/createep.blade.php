@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
    <div class="container">

        <!--row1 -->
        <div class="row justify-content-center">
        <form  action="{{ url('animelist/createep/' . $anime->id) }}" method="POST">
        @csrf
            <div class="colcol-4"></div>
            <div class="colcol-4">
                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">

                    <h1>Nuevo Episodio</h1>
                    <!--SING IN -->
                    <div class="user_box">
                        <input type="text" class="form-control" name="title"  placeholder="Titulo" id="UserName">
                    </div>
                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" name="ruta"  placeholder="Ruta" id="Password">
                    </div>

                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block mt-4">Añadir</button>
                </div>
            </div>
            <div class="colcol-4"></div>
           
        </div>
    </div>
    <div class="img1"><img src="<?php echo asset('media/back.png')?>" alt="" class="img-fluid p2"></div>


@stop