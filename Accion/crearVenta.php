<?php
include ("../Conexion/cn.php");

$query = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $conexion->prepare("INSERT INTO Venta (Fecha, Hora, Cantidad, Total, Tipo_Pago) VALUES ('?', '?', '?', '?')");
        $stmt->bind_param("ssids", $fecha, $hora, $cantidad, $total, $tipoPago);
        echo $stmt->param_count." parameters\n";
    } catch (Error $e) {
        die('Error modificando producto: ' .  $e->getMessage());
    }
    echo $stmt;

    $cantidad = $_POST['cantidad'];
    $tipoPago = $_POST['tipoPago'];
    $total = $_POST['total'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    // $stmt->execute();

    echo "<script type='text/javascript' >";
    echo "swal('Venta insertada correctamanete', '', 'success');";
    echo "</script>";
    // header("location: ../App/mostrarVentas.php");
}