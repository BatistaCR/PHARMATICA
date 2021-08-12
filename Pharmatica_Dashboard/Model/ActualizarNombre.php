<?php 
  include('../conexion.php');

  $nuevo = $_POST['nombreNuevo'];
  $idUS = $_POST['id'];	

  $act = "CALL CambiarNombreSesion('$nuevo','$idUS')";
  // $act = "UPDATE useracceso SET nombre = '$nuevo' WHERE iduser = '$idUS' ";
  $exe69 = mysqli_query($conexion,$act);

  header('Location:../sesion.html');

 ?>