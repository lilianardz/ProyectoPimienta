<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="card border-primary mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                <h1 class="card-title text-center">Inicio de sesión</h1>
                    <br>
                    <br>
<!--                    <img src="https://image.flaticon.com/icons/svg/1945/1945652.svg" class="card-img-top">-->
                    <div class="card-body">
                        <form action="paginaInicio.php" method="POST">
                            <div class="form-group">

                                <input placeholder="Usuario" type="text" class="form-control" name="txtUsuario" id="txtUsuario" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">

                                <input placeholder="Contraseña" type="password" class="form-control" name="txtPwd" required>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <a href="registro.php">Registrarse</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-1">Iniciar sesión</button>
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
