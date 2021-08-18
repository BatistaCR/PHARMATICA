<?php 
    include("../conexion.php");

     $id = $_POST['id'];
     $sql = "DELETE  FROM t_inventario_general_web WHERE id_prod_inv = '$id'";
    // $sql = "CALL EliminarUsuarios('$id')";
     mysqli_query($conexion, $sql);
     header("location:../?ir=PRODUCTOS");
?>