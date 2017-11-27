<!doctype html>
<html lang="en">

<head>
    <title>TuReceta</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
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
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/login"><i class="lnr lnr-exit"></i> <span>Cerrar sesión</span></a></li>
                        </ul>
                    </li>
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
                    <li><a href="/home" class=""><i class="fa fa-search"></i> <span>Buscar</span></a></li>
                    <li><a href="/premium" class=""><i class="lnr lnr-rocket"></i> <span>Premium</span></a></li>
                    <li>
                        <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Configurar</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse ">
                            <ul class="nav">
                                <li><a href="adminIngredientes" class="">Ingredientes</a></li>
                                <li><a href="adminRecetas" class="">Recetas</a></li>
                                <li><a href="adminRecetaIngrediente" class="">Receta Ingrediente</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main" id="mainHome">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline" id="busqueda">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿Qué quieres cocinar hoy?</h3>

                    </div>
                    <div class="panel-body">
                        <h4 class="panel-title">Con que ingredientes cuentas:</h4>
                        {!! Form::open(array('route' => 'home.buscar','method'=>'POST', 'class' => 'navbar-form navbar-left', 'id' => 'buscarHome')) !!}
                        <div class="input-group" id="div-buscar">
                            {!! Form::search('busqueda', null, array('placeholder' => 'Pon tus ingredientes delimitados por coma (Arroz,carne,papas)','class' => 'form-control', 'id' => 'buscaIngredientes')),
                                Form::submit('Buscar', ['class' => 'btn btn-primary'], ['id' => 'botonBuscar'])!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- END OVERVIEW -->
                <div class="row">
                        <!-- PANEL HEADLINE -->
                    @if($resultadoBusqueda)
                     <div class="col-md-8" id="resultado">
                         <div class="panel panel-headline">
                            <div class="panel-heading" >
                                <h3 class="panel-title">Resultados de la búsqueda</h3>
                            </div>
                            @if($resultadoBusquedaId)
                            <div class="panel-body">
                                @foreach ($resultadoBusqueda as $key=>$value)
                                    <p><a target="_blank"  href="{{ route('adminRecetas.show',$resultadoBusquedaId[$key]) }}">{{$value}}</a></p>
                                @endforeach
                            </div>
                            @else
                            <div class="panel-body">
                                <p>{{$resultadoBusqueda}}</p>
                            </div>
                            @endif
                         </div>
                     </div>
                    @else

                    @endif
                    <div class="col-md-4" id="resetasTop">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Las recetas mas consultadas</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <img id="imagenTop" src="http://www.grupolaflorida.com/images/recetas/besos.jpg">
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
            <!-- END WRAPPER -->
            <!-- Javascript -->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
            <script src="assets/vendor/chartist/js/chartist.min.js"></script>
            <script src="assets/scripts/klorofil-common.js"></script>
        </div>
    </div>
</div>
</body>

</html>
