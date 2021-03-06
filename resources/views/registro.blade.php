<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>TuReceta</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box " id="div-registro">
                <div class="left" id="mainRegistro">
                    <div class="content" id="contenido-registro">
                        <div class="header">
                            <div class="logo"><img id="registroHeaderLogo" src="assets/img/letras.png" alt="Klorofil Logo"></div>
                            <p class="lead">Dejanos conocerte</p>
                        </div>
                        <form class="form-auth-small" id="registro" action="/registrar">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Nombre</label>
                                <input type="text" class="form-control" id="reg-nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Apellido</label>
                                <input type="text" class="form-control" id="reg-apellido" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" id="signin-email" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">usuario</label>
                                <input type="text" class="form-control" id="reg-apellido" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>

                        </form>
                        </br>
                        </br>
                        <a id="login-registro" href="/login">Iniciar sesión</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

</html>
