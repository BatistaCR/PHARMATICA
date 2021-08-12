<?php

require '../conexion.php';

session_start();
 $nombre=htmlentities(addslashes($_POST['usuario']));
 $clave=htmlentities(addslashes($_POST['clave']));

 if (empty($_POST['usuario']) AND empty($_POST['clave'])) {
   header("location: ../sesion.html");
 }
 
 $contador = 0;
 $sql = "SELECT * FROM useracceso WHERE nombre = :usuario";
     // $sql = "CALL CofirmarSesion('$nombre')";
 
 $resultado=$conexion22->prepare($sql);
 $resultado->execute(array(":usuario"=>$nombre));

 
   while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
    $usuarioN = $registro['nombre'];
     $claveBD = $registro['clave'];
  }

  if ($usuarioN == $nombre) {

      if(password_verify($clave,$claveBD)) {
     
            $_SESSION['u_usuario'] = $usuarioN;

            header("location:../");
            //$contador++;
      }else{
         header("location: ../sesion.html");
      }

   }else{
      header("location: ../sesion.html");
  }


 $conexion = null;
?>
