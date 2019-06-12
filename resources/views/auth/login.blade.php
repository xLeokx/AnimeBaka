@extends('layouts.master')

@section('content')



<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
<div class="container">

        <!--row1 -->

        <div class="row justify-content-center">

        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="colcol-4"></div>


            <div class="colcol-4">

                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">

                    <h1>AnimeBaka</h1>

                    <!--SING IN -->
                    <div class="user_box">
                        <i class="fas fa-users" id="icono_user"></i>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail Adress " id="UserName">

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                    </div>
                   

                    <div class="password_box" id="icono_pass">
                        <i class="fas fa-lock"></i><input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password"id="Password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                    </div>

                    <a class="link mt-4" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                    <span class=" mb-2" id="alert">Error, nombre o contraseña Incorrecto</span>

                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block">Iniciar Sesion</button>
                    
                    <a type="button" id="log-btn" class="btn btn-primary btn-lg btn-block" href="/register">Crear cuenta</a></form>

                </div>
            </div>
            <div class="colcol-4"></div>
           
        </div>
    </div>
    <div class="img1"><img src="<?php echo asset('media/back.png')?>" alt="" class="img-fluid p2"></div>

    @endsection
