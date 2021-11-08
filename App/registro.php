<?php
    include ("../Conexion/cn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("../Layout/estilos.php");
    ?>
</head>

<body>

<form class="container" method="post" action="guardarRegistro.php">
    <div class="row justify-content-md-center ">
        <div class="containerRegistro">
            <br>
                <div class="card border-primary mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <!-- <form method="POST" action="#" role="form"> -->
                            <div class="form-group">
                                <h1>Crea tu cuenta</h1>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupPassword">Nombre:</label>
                                <input id="signupName" type="text" maxlength="50" class="form-control" name="txtUsuario">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupPasswordagain">Contraseña:</label>
                                <input id="signupPasswordagain" type="password" maxlength="50" class="form-control" name="txtPwd">
                            </div>
                            <div class=" form-group">
                                <label class="control-label">Rol</label>
                                <select name="cmbRol" id="cmbRol" class="form-control" style="font-size:12px">

                                    <?php
                                    $cmd = "select * from Rol";
                                    $resultado = $conexion->query($cmd);
                                    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) : ?>
                                        <option value="<?php echo $row['Id']; ?>">
                                            <?php echo $row['Rol']; ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <button id="signupSubmit" type="submit" class="btn btn-info btn-block">
                                    Crear cuenta
                                </button>
                            </div>
                            <hr>
                            <p></p>¿Ya tienes una cuenta? <a href="Login.php">Iniciar sesion</a></p>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</form>

<?php
include("../Layout/scripts.php");

?>

</body>

</html>
