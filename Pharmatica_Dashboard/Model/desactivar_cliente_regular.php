<?php 
include("../conexion.php");

$id_usuario_upt = $_POST['id'];
//$fecha_upt = trim($_POST['fecha_upt']);

$act = "UPDATE t_usuarios_general SET
  estatus_usuario = '2' WHERE id_user_general = '$id_usuario_upt' ";

  $exe69 = mysqli_query($conexion,$act);
  header('location:../../Pharmatica_Dashboard/?ir=Clientes_General');
?>