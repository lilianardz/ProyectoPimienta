<?php
include ("../Conexion/cn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conexion->prepare("update Venta set Fecha=?,Cantidad=?,Total=?,Tipo_Pago=?");
    $stmt->bind_param("sids", $fecha, $cantidad, $total, $tipoPago);

    $cantidad = $_POST['cantidad'];
    $tipoPago = $_POST['tipoPago'];
    $total = $_POST['total'];
    $fecha = $_POST['fecha'];

    $stmt->execute();
    echo $stmt->error;
    header("location: ../App/mostrarVentas.php");

}