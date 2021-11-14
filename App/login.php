<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/mdb.min.css" rel="stylesheet"/>
    <link href="../assets/css/estilos.css" rel="stylesheet"/>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sweetalert2@11.js"></script>
    <title>Iniciar sesión</title>
    <?php
    include("../Layout/estilos.php");

    ?>
</head>
<br>
<body>
<div class="container">
    <div class="row justify-content-md-center ">
        <div class="col-md-4">
            <div class="card border-info mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                <h1 class="card-title text-center">Inicio de sesión</h1>
                    <br>
                    <br>
<!--                    <img src="https://image.flaticon.com/icons/svg/1945/1945652.svg" class="card-img-top">-->
                    <div class="card-body">
                        <form action="validarSesion.php" method="POST">
                            <div class="form-group">

                                <input placeholder="Usuario" type="text" class="form-control" name="txtUsuario" id="txtUsuario" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <br>
                                <input placeholder="Contraseña" type="password" class="form-control" name="txtPwd" required>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <br>
                                    <button type="submit" class="btn btn-info mt-1">Iniciar sesión</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <br>
                                    <h5>Crear una cuenta</h5>
                                    <a href="registro.php"><input type="button" value="Registrarse" class="btn btn-outline-info"></a>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php

if (isset($_GET["status"])) {
    $status = $_GET['status'];
    echo "<script type='text/javascript' >";
    if ($status == 400) {
        echo "swal('Usuario incorrecto','verifique su contraseña');";
    }
    if ($status == 500) {
        echo "swal('Cuidado','Error de sesión','error');";
    }
    echo "</script>";
}

?>
</body>
</html>
