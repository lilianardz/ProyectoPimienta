<?php
include ("../Conexion/cn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conexion->prepare("INSERT INTO Venta(Fecha,Hora, Cantidad, Total, Tipo_Pago) VALUES (?, ?, ?, ?, ?);");
    $stmt->bind_param("ssids", $fecha, $hora, $cantidad, $total, $tipoPago);

    $cantidad = $_POST['cantidad'];
    $tipoPago = $_POST['tipoPago'];
    $total = $_POST['total'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $stmt->execute();
    echo $stmt->error;
    // header("location: ../App/mostrarVentas.php");
}