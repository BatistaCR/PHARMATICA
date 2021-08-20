<?php 
include("../conexion.php");


$id_usuario_upt = $_POST['id_usuario_upt'];
$nombre_upt = trim($_POST['nombre_upt']);
$cedula_upt = trim($_POST['cedula_upt']);
$telefono1_upt = trim($_POST['telefono1_upt']);
$telefono2_upt = trim($_POST['telefono2_upt']);
$email_upt = trim($_POST['email_upt']);
//$fecha_upt = trim($_POST['fecha_upt']);

/*comprobaciones de input file (IMG´S)*/

$act = "UPDATE t_usuarios_general SET
  nombre_user_general = '$nombre_upt',
  numero_identificacion = '$cedula_upt',
  telefono1 = '$telefono1_upt', 
  telefono2 = '$telefono2_upt',
  email_general = '$email_upt'
WHERE id_user_general = '$id_usuario_upt' ";

    $exe69 = mysqli_query($conexion,$act);
    header('location:../../Pharmatica_Dashboard/?ir=Clientes_General');
   

?>