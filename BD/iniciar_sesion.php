<?php 
include("conexion.php");
session_start();
 $correo_sesion= trim($_POST["correo_sesion"]);
 $clave_sesion= trim($_POST["clave_sesion"]);

define('METHOD','AES-256-CBC');
define('SECRET_KEY','$HSA@2021');
define('SECRET_IV','310521');

class SED {
		public static function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}}
$sed = new SED();
$cifrado = $sed->encryption($clave_sesion);

$query_sesion = "SELECT * from t_usuarios_general  
    where email_general = '$correo_sesion'
    AND clave_user_general = '$cifrado'";

$sql_sesion  = mysqli_query($conexion, $query_sesion);

while($f = mysqli_fetch_array($sql_sesion)){
   $nombre_sesion = $f['nombre_user_general'];
}




$query = "CALL select_sesion('$correo_sesion','$cifrado')";

$sql  = mysqli_query($conexion, $query);

if ($resul = mysqli_fetch_array($sql)) {

	$_SESSION['u_usuario'] = $nombre_sesion;
	header("location: ../index.php");
    
} else {
	 echo "<script>
     alert('Usuario no registrado');
     location.href='../../PHARMATICAS/sesion.php';
	</script>";
	
}

 ?>