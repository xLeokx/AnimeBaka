<!DOCTYPE html>
<html lang="en">

<head>
<style>
</style>

    <!--CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">

    <!--BOOSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnimeBaka</title>
</head>

<body>

    <div class="container">
        <!--row1 -->
        <div class="row justify-content-center">
            <!--col2 -->
            <div class="col-lg-4">
                <!--  ---------------------------------------------LOGIN // SING IN----------------------------------- -->
                <div class="login-formulario">
                    <h1>AnimeBaka</h1>

                    <!--SING IN -->
                    <div class="mb-2">
                        <input type="text" class="form-control" placeholder="Username " id="UserName">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="Passwod">

                    </div>
                    <a class="link mt-4" href="#">Olvidaste tu contraseña?</a>
                    <span class=" mb-2" id="alert">Error, nombre o contraseña Incorrecto</span>
                    <button type="button" id="log-btn" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='/index'">Log in</button>
                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!--JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#log-btn').click(function () {
            $('#log-status').attr('class', 'wrong-entry');
            $('#alert').fadeIn(500);
            setTimeout("$('#alert').fadeOut(1500);", 3000);
        });
        $('.form-control').keypress(function () {
            $('#log-status').removeAttr('wrong-entry');
        });
    });
</script>