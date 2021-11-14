<?php
include ("../Conexion/cn.php");
$data = json_decode(file_get_contents('php://input', true));
$Id_Venta = $data->{'id'};
$stmt = $conexion->prepare("delete from Venta where Id_Venta=?");
$stmt->bind_param("i",$Id_Venta);
$stmt->execute();
echo $stmt->error;
$arr = array('a'=> $_POST);

echo json_encode($data);