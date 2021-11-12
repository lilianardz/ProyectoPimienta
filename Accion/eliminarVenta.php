<?php
include ("../Conexion/cn.php");
$Id_Venta = $_POST['Id_Venta'];
$stmt = $conexion->prepare("delete from Venta where Id_Venta=?");
$stmt->bind_param("i",$Id_Venta);
$stmt->execute();
echo $stmt->error;
header("location: ../App/mostrarVentas.php");


