<!doctype html>
<html lang="es">

<head>
    <title>TuReceta Premium</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="/home"><img src="assets/img/letras.png" alt="TuReceta Logo" class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" value="" class="form-control" placeholder="Buscar ...">
                    <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                </div>
            </form>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Basic Use</a></li>
                            <li><a href="#">Working With Data</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Troubleshooting</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/login"><i class="lnr lnr-exit"></i> <span>Cerrar sesión</span></a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="/" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Bienvenido a TuReceta Premium</h3>
                <div class="row">
                    <div class="col-md-8">
                        <!-- PANEL HEADLINE -->
                        <div class="panel panel-headline">
                            <div class="panel-heading" >
                                <h3 class="panel-title" id="panel-scrolling-demo">Noticias</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                                <p class="panel-subtitle">Las mejores y mas importantes noticias acerca de nutrición y salud</p>
                            </div>
                            <div class="panel-body">
                                <p id="newsFeed">
                                    <script src="https://rss.bloople.net/?url=http%3A%2F%2Fnutricionaldia.fullblog.com.ar%2F%3Frss%3D1&showtitle=false&type=js"></script>
                                </p>
                            </div>
                        </div>
                        <!-- END PANEL HEADLINE -->
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tips saludables</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <p><ul id="tips">
                                    <li><strong>Sustituye lo frito por lo asado:</strong> Evita los alimentos fritos o que se cocinen con mucho aceite</li>
                                    <li><strong>Desayuna:</strong> Nunca olvides ingerir alimentos en la mañana</li>
                                    <li><strong>Recuerda la regla QQF (Calidad, cantidad y frecuencia):</strong> No existen alimentos malos</li>
                                    <li><strong>Plato colorido:</strong> Incluye la mayor cantidad de los colores del arcoíris en tu alimentación saludable</li>
                                    <li><strong>Come pescado:</strong> Incluye salmón, sardina y atún fresco en tus alimentos</li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- PANEL DEFAULT -->
                    <div class="col-md-4" id="tutorials">
                        <!-- PANEL NO CONTROLS -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Video Tutoriales</h3>
                            </div>
                            <div class="panel-body">
                                <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 0px;">
                                    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                        <ul class="amazingslider-slides" style="display:none;">
                                            <li><img src="assets/img/pGx9w2GJ_mc.jpg" alt="Pollo"  title="Pollo" />
                                                <video preload="none" src="https://www.youtube.com/embed/pGx9w2GJ_mc?v=pGx9w2GJ_mc" ></video>
                                            </li>
                                            <li><img src="assets/img/OeCUsncUPfo.jpg" alt="Ratatouille"  title="Ratatouille" data-description="Si, el de la pelicula" />
                                                <video preload="none" src="https://www.youtube.com/embed/OeCUsncUPfo?v=OeCUsncUPfo" ></video>
                                            </li>
                                            <li><img src="assets/img/00yPwY6a__A.jpg" alt="Rollo de carne"  title="Rollo de carne" data-description="Rico rollo de carne" />
                                                <video preload="none" src="https://www.youtube.com/embed/00yPwY6a__A?v=00yPwY6a__A" ></video>
                                            </li>
                                            <li><img src="assets/img/XJRVrJS0xMg.jpg" alt="Banderines de salchicha"  title="Banderines de salchicha" data-description="Deliciosos banderines de salchicha y queso" />
                                                <video preload="none" src="https://www.youtube.com/embed/XJRVrJS0xMg?v=XJRVrJS0xMg" ></video>
                                            </li>
                                            <li><img src="assets/img/rUs6uLZ_4KM.jpg" alt="Aros de cebolla"  title="Aros de cebolla" data-description="Aros de cebolla super crujientes" />
                                                <video preload="none" src="https://www.youtube.com/embed/rUs6uLZ_4KM?v=rUs6uLZ_4KM" ></video>
                                            </li>
                                        </ul>
                                        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Slideshow">jQuery Slideshow</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- END MAIN CONTENT -->
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
                </p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/scripts/klorofil-common.js"></script>
    <!-- Video -->
    <script src="assets/scripts/jquery.js"></script>
    <script src="assets/scripts/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/scripts/amazingslider-1.css">
    <script src="assets/scripts/initslider-1.js"></script>
</body>

</html>
