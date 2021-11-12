<?php
include ("../Conexion/cn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conexion->prepare("INSERT INTO Venta(Cantidad, Total, Tipo_Pago) VALUES (?,?,?);");
    $stmt->bind_param("ids", $cantidad, $total, $tipoPago);

    $cantidad = $_POST['cantidad'];
    $tipoPago = $_POST['tipoPago'];
    $total = $_POST['total'];

    $stmt->execute();
    echo $stmt->error;
    header("location: ../App/mostrarVentas.php");
}