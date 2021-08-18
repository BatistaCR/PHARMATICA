<?php 
$conexion = new mysqli("localhost","root","","pharmatica_bd");

function getConn(){
  $mysqli = mysqli_connect('localhost', 'root', '', "pharmatica_bd");
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: ".mysqli_connect_error();
  $mysqli->set_charset('utf8');
  return $mysqli;
}


class Conexion{
			var $ruta;
			var $usuario;
			var $contrasena;
			var $baseDatos;
			function Conexion(){
				$this->ruta       ="localhost"; 
				$this->usuario    ="root"; 
				$this->contrasena =""; 
				$this->baseDatos  ="pharmatica_bd"; 
			}
			function conectarse(){
				
				$enlace = mysqli_connect($this->ruta, $this->usuario, $this->contrasena, $this->baseDatos);
				if($enlace){
				//	echo "Conexion exitosa";
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
			}
		}

$servidor = 'localhost';
$base_datos = 'pharmatica_bd';
$usuario = 'root';
$clave = '';

$conexion22 = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $clave);
$conexion22->exec("SET CHARACTER SET utf8");


class DBController
{

    private $host = "localhost";

    private $user = "root";

    private $password = "";

    private $database = "pharmatica_bd";

    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
		$conn->set_charset('utf8');
        return $conn;
    }

    function runQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            $resultset[] = $row;
        }
        if (! empty($resultset))
            return $resultset;
    }
}

 ?>