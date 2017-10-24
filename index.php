<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['usuario'] == "admin"){
            header('Location: admin/');
        }
    }
require_once "php/login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gym System</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="error">
        <span>Datos de ingreso no válidos</span>
    </div>
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form id="formlg">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input class="form-control" aria-describedby="emailHelp" type="text" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Usuario" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contaseña</label>
                        <input class="form-control" type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Contraseña" />
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                        </div>
                    </div>
                    <a class="btn btn-primary btn-block"><input class="btn btn-primary btn-block" type="submit" class="botonlg" value="Iniciar Sesión" />
                    </a>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
