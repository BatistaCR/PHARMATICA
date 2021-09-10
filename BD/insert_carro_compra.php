<?php 
include("conexion.php");

echo $cantidad_productos_general = $_POST['cantidad_productos_general'];
echo $cantidad_productos_solo_caja = $_POST['cantidad_productos_solo_caja'];
echo $cantidad_productos_solo_unidad = $_POST['cantidad_productos_solo_unidad'];

/*
$cod_prod_detalle = $_POST['cod_prod_detalle'];
$cantidad_productos = $_POST['cantidad_productos'];
$id_cliente = $_POST['id_cliente'];
$tipoProd = $_POST['tipoProd'];

date_default_timezone_set("America/Costa_Rica");
     $fecha_registro = date("Y-m-d H:i:s");*/

/*********/

/*
$select_prod = "SELECT * FROM t_inventario_general_web 
WHERE codigo_producto = '$cod_prod_detalle' ";

$exe_select = $conexion->query($select_prod);

$index = 1;
while($row = mysqli_fetch_array($exe_select)){
$id_prduct_carro = $row["id_prod_inv"];
$nombre_prod_inv  = $row["nombre_prod_inv"];
$img_producto = $row["img_producto"];
$codigo_producto = $row["codigo_producto"];
$precio_unidad = $row["precio_unidad"];
$precio_caja = $row["precio_caja"];
$detalle_prod = $row["detalle_prod"];
$ingrediente_prod = $row["ingrediente_prod"];
$contraindicaciones_prod = $row["contraindicaciones_prod"];
$img_producto2 = $row["img_producto2"];
$img_producto3 = $row["img_producto3"];
$cantidad_prod_unidades = $row["cantidad_prod_unidades"];
$cantidad_prod_cajas = $row["cantidad_prod_cajas"];


if ($tipoProd == "CAJA") {

		if ($cantidad_productos <= $cantidad_prod_cajas) {

$insertsql= "INSERT into t_carro_compras_temporal
 (  
 	nombre_prod_carro,
 	img_producto_carro,
 	codigo_producto_carro, 
 	precio_unidad_carro,
 	precio_caja_carro,
 	detalle_prod_carro,
 	ingrediente_prod_carro,
 	contraindicaciones_prod,
 	img_producto2_carro,
 	img_producto3_carro,
 	usuario_compra_carro,
 	cantidad_prod_unidad_carro,
 	cantidad_prod_caja_carro,
 	tipo_precio_compra,
 	fechayhora_carro  )
 VALUES(
	'$nombre_prod_inv',
	'$img_producto',
	'$codigo_producto',
	'$precio_unidad',
	'$precio_caja',
	'$detalle_prod',
	'$ingrediente_prod',
	'$contraindicaciones_prod',
	'$img_producto2',
	'$img_producto3',
	'$id_cliente',
	'$cantidad_productos',
	'$cantidad_productos',
	'$tipoProd',
	'$fecha_registro'
 )";
 $ready = mysqli_query($conexion,$insertsql);
 //$conexion->query($insertsql);

if ($ready == TRUE) {

$resta1 = $cantidad_prod_unidades-$cantidad_productos;
$resta2 = $cantidad_prod_cajas-$cantidad_productos;


$borrar = "UPDATE t_inventario_general_web SET
  	cantidad_prod_unidades = '$resta1',
  	cantidad_prod_cajas = '$resta2'
WHERE id_prod_inv = '$id_prduct_carro'  ";
$exe_borrar = mysqli_query($conexion,$borrar);

$index++;

//header("location:../Ruta.php");

  }
		}else{
			echo "!!!CANTIDAD DIGITADA DE PRODUCTOS EXCEDE EL
						 LIMITE DE DISPONIBILIDAD";

		header("location:../detalle.php?id=".$id_prduct_carro."&limite_exe=1");
		}


}elseif($tipoProd == "UNIDAD"){

		if ($cantidad_productos <= $cantidad_prod_unidades) {

$insertsql= "INSERT into t_carro_compras_temporal
 (  
 	nombre_prod_carro,
 	img_producto_carro,
 	codigo_producto_carro, 
 	precio_unidad_carro,
 	precio_caja_carro,
 	detalle_prod_carro,
 	ingrediente_prod_carro,
 	contraindicaciones_prod,
 	img_producto2_carro,
 	img_producto3_carro,
 	usuario_compra_carro,
 	cantidad_prod_unidad_carro,
 	cantidad_prod_caja_carro,
 	tipo_precio_compra,
 	fechayhora_carro  )
 VALUES(
	'$nombre_prod_inv',
	'$img_producto',
	'$codigo_producto',
	'$precio_unidad',
	'$precio_caja',
	'$detalle_prod',
	'$ingrediente_prod',
	'$contraindicaciones_prod',
	'$img_producto2',
	'$img_producto3',
	'$id_cliente',
	'$cantidad_productos',
	'$cantidad_productos',
	'$tipoProd',
	'$fecha_registro'
 )";
 $ready = mysqli_query($conexion,$insertsql);
 //$conexion->query($insertsql);

if ($ready == TRUE) {

$resta1 = $cantidad_prod_unidades-$cantidad_productos;
$resta2 = $cantidad_prod_cajas-$cantidad_productos;


$borrar = "UPDATE t_inventario_general_web SET
  	cantidad_prod_unidades = '$resta1',
  	cantidad_prod_cajas = '$resta2'
WHERE id_prod_inv = '$id_prduct_carro'  ";
$exe_borrar = mysqli_query($conexion,$borrar);

$index++;

//header("location:../Ruta.php");

  }




			
			
		}else{
			echo "!!!CANTIDAD DIGITADA DE PRODUCTOS EXCEDE EL
						 LIMITE DE DISPONIBILIDAD";

			header("location:../detalle.php?id=".$id_prduct_carro."&limite_exe=1");
		}

}



}*/


?>