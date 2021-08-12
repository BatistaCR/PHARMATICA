<?php 
include("../conexion.php");
 //session_start();
     $nombre_registro = trim($_POST['nombre_registro']);
     $correo_registro = trim($_POST['correo_registro']);

     date_default_timezone_set("America/Costa_Rica");
     $fecha_registro = date("Y-m-d H:i:s");

/**/
$clave1_registro = trim($_POST['clave1_registro']);
$clave2_registro = trim($_POST['clave2_registro']);

if ($clave1_registro == $clave2_registro) {


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
$encriptada = $sed->encryption($clave1_registro);
//echo $encry."<br>";

$query = " CALL insert_usuarios_general(
     '$nombre_registro',
     '$correo_registro',
     '$encriptada',
     '$fecha_registro')";

$sql=mysqli_query($conexion, $query);
 if( $sql  == true){
     $_SESSION['u_usuario'] = $nombre_registro;
   echo "
   <script>
 alert('USUARIO REGISTRADO CON EXITO');
window.location.href='../';
</script>

   ";
 }
}
else{
    echo "<script>
 alert('CONTRASEÑAS NO COINCIDEN');
</script>";
//header("location:./?go=key");
}
//header("location:./?go=Login");

/**/

?>