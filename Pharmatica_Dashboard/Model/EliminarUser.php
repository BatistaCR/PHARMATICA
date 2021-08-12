<?php 
  include("../conexion.php");

     $id = $_POST['id'];
     $sql = "DELETE  FROM t_usuarios_general WHERE id_user_general = '$id'";
    // $sql = "CALL EliminarUsuarios('$id')";
     mysqli_query($conexion, $sql);
     header("location:../?ir=USERS");

?>