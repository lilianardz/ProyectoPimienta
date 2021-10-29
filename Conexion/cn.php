<?php
$conexion = new mysqli('localhost','root','1234','ProyectoPimienta');
$acentos = $conexion -> query("SET NAMES 'utf8'");
if($conexion->connect_error){
    die('Error de conexion: '.$conexion->connect_error);//termina la ejecucion del programa
}

?>