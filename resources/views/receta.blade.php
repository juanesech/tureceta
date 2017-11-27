<!doctype html>
<html lang="en">

<head>
    <title>TuReceta</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/linearicons/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/chartist/css/chartist-custom.css') }}" rel="stylesheet" type="text/css" >
    <!-- MAIN CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" >
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="/home"><img src="{{ asset('assets/img/letras.png') }}" alt="TuReceta Logo" class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('assets/img/user.png') }}"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/login"><i class="lnr lnr-exit"></i> <span>Cerrar sesión</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- MAIN -->
    <div class="main" id="mainHome">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline" id="main-receta">
                    <div class="panel-heading">
                        <h3 class="panel-title" id="tituloReceta">{{$receta->nombre}}</h3>
                    </div>
                    <div class="panel-body">
                        <h4>Ingredientes</h4>
                        @foreach($ingredientes as $key=>$value)
                            <ul>
                               <li> <p><strong>{{$value}}:</strong>  {{$cantidad[$key]}}</p></li>
                            </ul>
                        @endforeach
                        <br>
                        <h4>Instrucciones</h4>
                        <p>{!!nl2br(e($receta->instrucciones))!!}</p>
                    </div>
                </div>
                <!-- END OVERVIEW -->
            </div>
            <!-- END WRAPPER -->
            <!-- Javascript -->
            <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
        </div>
    </div>
</div>
</body>

</html>
