<?php 
include('../conexion.php');


  $img_principal=$_FILES["img_principal"]["name"];
  $ruta=$_FILES["img_principal"]["tmp_name"];

    $destino="../IMG/IMG_CATEGORIA/".$img_principal;
      copy($ruta,$destino);

    $destino1="../../img/categorias/".$img_principal;
      $copy1 = copy($ruta,$destino1);

          /*FECHA*/
    date_default_timezone_set("America/Costa_Rica");
    $fecha_registro = date("Y-m-d H:i:s");



$titulo_cat = trim($_POST['titulo_cat']);
$detalle_cat = trim($_POST['detalle_cat']);


$insert ="INSERT INTO t_categoria_productos
( nombre_categoria,
  img_categoria,
	fecha_registro,
  detalle_categoria)
VALUES(
  '$titulo_cat',
  '$img_principal',
  '$fecha_registro',
  '$detalle_cat'
)";

$exe = mysqli_query($conexion,$insert);

header("location:../../Pharmatica_Dashboard/?ir=CATEGORIAS");
?>