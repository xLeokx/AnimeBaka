@extends('layouts.master')

@section('content')



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
<script  src="<?php echo asset('js/move.js')?>"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-sm-8 col-md-7 col-lg-4 align-self-center mt-5 mb-1">
           

                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">
                    <div class="contenedor pb-5"><img id="logologin" src="<?php echo asset('media/logo.png')?>" alt=""
                            class="img-fluid"></div>



                    <!--SING IN -->
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="user_box">
                        <i class="fas fa-users" id="icono_user"></i>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail Adress "
                            id="UserName">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="password_box" id="icono_pass">
                        <i class="fas fa-lock"></i><input type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required placeholder="Password" id="Password">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!--{{ route('password.request') }} -->
                    <a class="link mt-4" href="">Olvidaste tu contraseña?</a>
                    <span class=" mb-2" id="alert">Error, nombre o contraseña Incorrecto</span>

                    <button type="submit" id="log-btn" class="btn btn-primary btn-lg btn-block">Iniciar Sesion</button>

                    <a type="button" id="log-btn" class="btn btn-primary btn-lg btn-block" href="/register">Crear
                        cuenta</a>
                        </form>
                </div>
            
        </div>
    </div>
</div>
 
@endsection
