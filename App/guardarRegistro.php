<?php
include("../Conexion/cn.php");


$nombre = $_POST['txtUsuario'];
$pwd = $_POST['txtPwd'];
$idRol = $_POST['cmbRol'];
$cmd = $conexion->prepare("insert into Usuario(Nombre,Pwd,Id_Rol) values (?,?,?);");
$cmd->bind_param("ssi",$nombre,$pwd, $idRol );
$cmd->execute();
echo $cmd->error;
mysqli_close($conexion);
header("location: Login.php");
?>