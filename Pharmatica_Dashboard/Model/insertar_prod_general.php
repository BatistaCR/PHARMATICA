<?php 
include('../conexion.php');


 $countfiles = count($_FILES['img_prod']['name']);
  // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $img1 = $_FILES['img_prod']['name'][0];
  $ruta1=$_FILES["img_prod"]["tmp_name"][0];

  $img2 = $_FILES['img_prod']['name'][1];
  $ruta2=$_FILES["img_prod"]["tmp_name"][1];

  $img3 = $_FILES['img_prod']['name'][2];
  $ruta3=$_FILES["img_prod"]["tmp_name"][2];
   
 }

	//$imagen1=$_FILES["img_prod"]["name"];
    // $ruta=$_FILES["img_prod"]["tmp_name"];

      $destino="../IMG/IMG_PRODUCTOS/".$img1;
          copy($ruta1,$destino);

      $destino1="../../img/productos/".$img1;
          $copy1 = copy($ruta1,$destino1);


      $destino2="../IMG/IMG_PRODUCTOS/".$img2;
          copy($ruta2,$destino2);

      $destino3="../../img/productos/".$img2;
          $copy2 = copy($ruta2,$destino3);
 


       $destino4="../IMG/IMG_PRODUCTOS/".$img3;
          copy($ruta3,$destino4);

      $destino5="../../img/productos/".$img3;
          $copy3 = copy($ruta3,$destino5);







$c_prod = trim($_POST['c_prod']);
$n_prod = trim($_POST['n_prod']);
$uni_prod = trim($_POST['uni_prod']);
$caj_prod = trim($_POST['caj_prod']);
$deta_prod = trim($_POST['deta_prod']);
$ing_prod = trim($_POST['ing_prod']);
$contra_prod = trim($_POST['contra_prod']);

$insert ="INSERT INTO t_inventario_general_web(nombre_prod_inv,img_producto,
	codigo_producto,precio_unidad,precio_caja,detalle_prod,ingrediente_prod,	contraindicaciones_prod,img_producto2,img_producto3)
	VALUES('$n_prod','$img1','$c_prod','$uni_prod','$caj_prod','$deta_prod',
	'$ing_prod','$contra_prod','$img2','$img3')";

$exe = mysqli_query($conexion,$insert);

header("location:../../Pharmatica_Dashboard/?ir=PRODUCTOS");
?>