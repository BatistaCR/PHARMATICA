<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
       // echo "SIN REGISTRO";
      //header("location:../../PHARMATICAS/PHARMATICAS/sesion.php");
      }
 ?>
 
<!DOCTYPE html>
<html lang="es">
hola todo bien
<!-- Head -->
<?php include('vistas/head.php') ?>

<body>
  <!-- Header -->
  <?php include('vistas/header.php') ?>

  <!-- Categorías -->
  <?php include('vistas/category.php'); ?>

  <br>

  <div  style=" width:100%;">
    <?php 
$id = trim($_GET['id']);

    include("BD/conexion.php");


$consul = "SELECT * FROM  t_inventario_general_web WHERE id_prod_inv  = '$id' ";

$exe = mysqli_query($conexion,$consul);

while($t = mysqli_fetch_array($exe)){ ?>

<style type="text/css">
#caja1{
width: 40%;
background-color: red;
float: left;
}
#titulo{
 /* float: right;
  margin-top: -450px;
  margin-right: 800px;*/
}
#titulo2{
 /* float: right;
  margin-top: -400px;
  margin-right: 550px;*/
}
#titulo3{
  /*float: right;
  margin-top: -300px;
  margin-right: 550px;*/
}
#detalles_p{
  background-color: greenyellow;
  height: 100px;
  width: 500px;
  float: left;
}
</style>

<div>

<div id="caja1">
  <img src="img/productos/<?php echo $t['img_producto']; ?>" width="100%">
</div>

<div id="detalles_p">

<h1 id="titulo"><b><?php echo $t['nombre_prod_inv']; ?></b></h1>
<h2 id="titulo2"><b>PRECIO POR UNIDAD</b></h2>
<h1 id="titulo3"><b><?php  echo $t['precio_unidad']; ?></b></h1>

</div>

  <?php
}
    ?>
  </div><br>




  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>
</body>

</html>