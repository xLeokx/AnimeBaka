@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">
<div class="container">

        <!--row1 -->

        <div class="row justify-content-center">
            <div class="col-10 col-sm-8 col-md-7 col-lg-4 align-self-center mt-5 mb-1">
                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">

                <div class="contenedor"><img  id="logologin" src="<?php echo asset('media/logo.png')?>" alt="" class="img-fluid"></div>

                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!--SING IN -->
                    <div class="user_box">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Username " id="UserName">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email" id="Password">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="password"type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" id="Password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="password_box" id="icono_pass">
                        <input type="password"   type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password" id="Password">
                    </div>


                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block">Registrar</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="img1"><img id="imagen_inicial" src="<?php echo asset('media/back.png')?>" alt="" class="img-fluid p2"></div>
@endsection
