<?php 
  include('../conexion.php');	

  $NOMBRE = $_POST['NOMBRE'];
 $claveActual=htmlentities(addslashes($_POST['actual']));
 $clave1=htmlentities(addslashes($_POST['clave1']));
 $clave2=htmlentities(addslashes($_POST['clave2']));

 if ($clave1 == $clave2) {

     $trus = "SELECT * FROM useracceso WHERE nombre = '$NOMBRE' ";
     $exe = mysqli_query($conexion,$trus);

     while ($yh = mysqli_fetch_array($exe)) {
	      $idUS = $yh['iduser'];
	      $claveBD = $yh['clave'];
     }

 if(password_verify($claveActual, $claveBD) ) {
   
  $clave_cifrada = password_hash($clave1, PASSWORD_DEFAULT, array("cost"=>15));

  $act = "UPDATE useracceso SET clave = '$clave_cifrada' WHERE iduser = '$idUS' ";
  $exe69 = mysqli_query($conexion,$act);

  }else{
 	echo "ERROR";
  }
}

?>