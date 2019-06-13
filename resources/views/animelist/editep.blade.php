@extends('layouts.master')

@section('content')

    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">
    <div class="container">

        <!--row1 -->
        <div class="row justify-content-center">
        
          
            <div class="col-10 col-sm-8 col-md-7 col-lg-4 align-self-center mt-5 mb-1">
                <form  action="{{ url('animelist/editep/' . $Episodio->id) }}" method="POST">
                {{method_field('PUT')}}
                @csrf
                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">

                    <h1>Modificando Episodio</h1>
                    <!--SING IN -->
                    <div class="user_box">
                        <input type="text" class="form-control" value="{{ $Episodio->title }}" name="title"  placeholder="Titulo" id="UserName">
                    </div>
                    <div class="password_box" id="icono_pass">
                        <input type="text" class="form-control" value="{{ $Episodio->ruta }}" name="ruta"  placeholder="Ruta" id="Password">
                    </div>

                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block mt-4">Cambiar</button>                  
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="img1"><img src="<?php echo asset('media/back.png')?>" alt="" class="img-fluid p2"></div>

@stop