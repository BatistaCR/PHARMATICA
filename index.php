<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
       // echo "SIN REGISTRO";
     /* header("location:../../PHARMATICAS/PHARMATICAS/sesion.php");*/
      }
 ?>

<!doctype html>
<html lang="es">
<!-- Head -->
<?php include('vistas/head.php') ?>

<body>
  <!-- Header -->
  <?php include('vistas/header.php') ?>

  <!-- Carousel -->
  <?php include('vistas/carousel.php'); ?>  

  <!-- Categorías -->
  <?php include('vistas/category.php'); ?>
  
  <!-- productos -->
  <?php include('vistas/productos.php'); ?>

  <div id="mapid" style="height: 400px;"></div>

  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>

</body>
</html>