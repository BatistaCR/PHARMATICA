<?php 
include("conexion.php");


$nombre_contacto = $_POST['Nombre_contacto'];
$correo_contacto = $_POST['Correo_contacto'];
$telefono_contacto = $_POST['Telefono_contacto'];
$comentario_contacto = $_POST['Comentario_contacto'];
date_default_timezone_set("America/Costa_Rica");
     $fecha_registro = date("Y-m-d H:i:s");

$query = " CALL insert_contacto_general(
     '$nombre_contacto',
     '$correo_contacto',
     '$telefono_contacto',
     '$comentario_contacto',
     '$fecha_registro')";

mysqli_query($conexion, $query);

?>