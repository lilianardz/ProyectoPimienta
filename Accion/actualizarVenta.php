<?php
include ("../Conexion/cn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conexion->prepare("update Venta set Cantidad=?,Total=?,Tipo_Pago=? where Id_Venta=?");
    $stmt->bind_param("idsi", $cantidad, $total, $tipoPago, $id_venta);

    $cantidad = $_POST['cantidad'];
    $tipoPago = $_POST['tipoPago'];
    $id_venta = $_POST['id_venta'];

    $stmt->execute();
    echo $stmt->error;
    header("location: ../App/mostrarVentas.php");

}