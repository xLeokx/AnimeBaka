<!DOCTYPE html>
<html lang="en">

<head>
    <!--CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/welcome.css')?>" type="text/css">

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
    <title>welcome</title>
</head>

<body>
    <!--inicio -->
    <div class="container-fluid" id="principal">

        <div class="row justify-content-center">
            <!--Logo -->
            <div class="col-11 text-center">
                <h1 id="titulo">AnimeBaka</h1>
            </div>

            <div class="col-1 text-center">
                <!--boton de login -->
                <button type="button" id="log-btn" class="btn btn-primary btn-lg  m-2 pl-4 pr-4" onclick="window.location.href='/login'">Log
                    in</button>
            </div>
        </div>

        <div class="row justify-content-center" id="animewelcome1">
            <div class="col-12 text-center">
                <span class="" id="animewelcome2">Disfruta del Anime</span>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <span class="" id="animewelcome3">Vé Todo tu anime donde y cuando quieras!!</span>
            </div>
        </div>

        <div class="row justify-content-center " id="suscripcion">
            <div class="col-12 text-center">
                <span id="suscripcionborder" class="border border-primary rounded" onclick="window.location.href='tablaprecios.html'">Activa tu Suscripcion! </span>
            </div>
        </div>
    </div>


    <!--nav-tabs -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active, text-center" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Donde y Cuando quieras</a>

                        <a class="nav-item nav-link text-center" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                            role="tab" aria-controls="nav-about" aria-selected="false">Precio de AnimeBaka</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <div class="leave">Si decides que AnimeBaka no es para ti, no hay problema. Sin
                                        compromisos.
                                        Cancela en línea cuando quieras.</div>
                                </div>
                                <div class="col-6">
                                    <img class="imgleave" src="img/unsub.png" alt="imagen">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="background">
                                        <div class="container">
                                            <div class="panel pricing-table">

                                                <div class="pricing-plan">
                                                    <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt=""
                                                        class="pricing-img">
                                                    <h2 class="pricing-header">Personal</h2>
                                                    <ul class="pricing-features">
                                                        <li class="pricing-features-item">Custom domains</li>
                                                        <li class="pricing-features-item">Sleeps after 30 mins of
                                                            inactivity</li>
                                                    </ul>
                                                    <span class="pricing-price">Free</span>
                                                    <a href="#/" class="pricing-button">Sign up</a>
                                                </div>



                                                <div class="pricing-plan">
                                                    <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
                                                    <h2 class="pricing-header">Small team</h2>
                                                    <ul class="pricing-features">
                                                        <li class="pricing-features-item">Never sleeps</li>
                                                        <li class="pricing-features-item">Multiple workers for more
                                                            powerful apps</li>
                                                    </ul>
                                                    <span class="pricing-price">$150</span>
                                                    <a href="#/" class="pricing-button is-featured">Free trial</a>
                                                </div>



                                                <div class="pricing-plan">
                                                    <img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt=""
                                                        class="pricing-img">
                                                    <h2 class="pricing-header">Enterprise</h2>
                                                    <ul class="pricing-features">
                                                        <li class="pricing-features-item">Dedicated</li>
                                                        <li class="pricing-features-item">Simple horizontal scalability</li>
                                                    </ul>
                                                    <span class="pricing-price">$400</span>
                                                    <a href="#/" class="pricing-button">Free trial</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>