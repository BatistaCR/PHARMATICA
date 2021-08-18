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


$act = "UPDATE t_inventario_general_web SET nombre_prod_inv = '$n_prod', codigo_producto = '$c_prod', precio_unidad = '$uni_prod', precio_caja = 
'$caj_prod', detalle_prod = '$deta_prod', ingrediente_prod = 
'$ing_prod', contraindicaciones_prod = '$contra_prod' WHERE id_prod_inv = 
'$id_prod' ";

    $exe69 = mysqli_query($conexion,$act);
    header('location:../../Pharmatica_Dashboard/?ir=PRODUCTOS');




    /*if (empty($_FILES["fotoFM"]["name"])) {

    	$nombreCliente = trim($_POST['nombreCliente']);
    $celCliente = trim($_POST['celCliente']);
    $webCliente = trim($_POST['webCliente']);
    $tituloWEB = trim($_POST['tituloWEB']);
    	

      $act = "UPDATE cliente_fm SET nombreCliente = '$nombreCliente', 
    telefonoCliente = '$celCliente', webCliente = '$webCliente',
    tituloWeb = '$tituloWEB' WHERE idCliente = '$idFM' ";

    $exe69 = mysqli_query($conexion,$act);
    header('location:../?ir=Clientes');


    }else{
    	

    $nombreCliente = trim($_POST['nombreCliente']);
    $celCliente = trim($_POST['celCliente']);
    $webCliente = trim($_POST['webCliente']);

    $imagenFM=$_FILES["fotoFM"]["name"];
    $ruta=$_FILES["fotoFM"]["tmp_name"];

	  $destino="../ARCHIVOS/ImgClientesFM/".$imagenFM;
    copy($ruta,$destino);

    $destino2="../../Colosal_FM/IMG/ImagenesClientes/".$imagenFM;
    $copy2 = copy($ruta,$destino2);


    $act = "UPDATE cliente_fm SET imgCliente = '$imagenFM', nombreCliente = '$nombreCliente', telefonoCliente = '$celCliente', webCliente = '$webCliente', tituloWeb = '$tituloWEB' WHERE idCliente = '$idFM' ";

    $exe69 = mysqli_query($conexion,$act);
    header('location:../?ir=Clientes');
    }*/

   

?>