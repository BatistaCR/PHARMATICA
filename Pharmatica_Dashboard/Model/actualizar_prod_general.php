<?php 
include("../conexion.php");


$id_prod = $_POST['id_prod'];
$c_prod = trim($_POST['c_prod']);
$n_prod = trim($_POST['n_prod']);
$uni_prod = trim($_POST['uni_prod']);
$caj_prod = trim($_POST['caj_prod']);
$deta_prod = trim($_POST['deta_prod']);
$ing_prod = trim($_POST['ing_prod']);
$contra_prod = trim($_POST['contra_prod']);

/*comprobaciones de input file (IMG´S)*/

if ($_FILES['img_prod1']['name']=="") {
 echo $img1 = trim($_POST['img1']);
}else{
  //$img1 = trim($_POST['img_prod1']);

  echo $img1 = $_FILES['img_prod1']['name'];
  $ruta1=$_FILES["img_prod1"]["tmp_name"];

  $destino="../IMG/IMG_PRODUCTOS/".$img1;
      copy($ruta1,$destino);

  $destino1="../../img/productos/".$img1;
      $copy1 = copy($ruta1,$destino1);

}


if ($_FILES['img_prod2']['name']=="") {
 echo $img2 = trim($_POST['img2']);
}else{

  $img2 = $_FILES['img_prod2']['name'];
  $ruta1=$_FILES["img_prod2"]["tmp_name"];

  $destino="../IMG/IMG_PRODUCTOS/".$img2;
      copy($ruta1,$destino);

  $destino1="../../img/productos/".$img2;
      $copy1 = copy($ruta1,$destino1);
}


if ($_FILES['img_prod3']['name']=="") {
 echo $img3 = trim($_POST['img3']);
}else{
  $img3 = $_FILES['img_prod3']['name'];
  $ruta1=$_FILES["img_prod3"]["tmp_name"];

  $destino="../IMG/IMG_PRODUCTOS/".$img3;
      copy($ruta1,$destino);

  $destino1="../../img/productos/".$img3;
      $copy1 = copy($ruta1,$destino1);
}

/*comprobaciones de input file (IMG´S)*/

$act = "UPDATE t_inventario_general_web SET
  nombre_prod_inv = '$n_prod',
  img_producto = '$img1',
  codigo_producto = '$c_prod', 
  precio_unidad = '$uni_prod',
  precio_caja = '$caj_prod',
  detalle_prod = '$deta_prod',
  ingrediente_prod = '$ing_prod',
  contraindicaciones_prod = '$contra_prod',
  img_producto2= '$img2',
  img_producto3= '$img3'
WHERE id_prod_inv = '$id_prod' ";

    $exe69 = mysqli_query($conexion,$act);
    header('location:../../Pharmatica_Dashboard/?ir=PRODUCTOS');
   

?>