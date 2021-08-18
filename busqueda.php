<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
       // echo "SIN REGISTRO";
      //header("location:../../pharmatica/sesion.php");
      }
 ?>

<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('vistas/head.php') ?>

<body>
  <!-- Header -->
  <?php include('vistas/header.php') ?>

  <!-- Categorías -->
  <?php include('vistas/category.php'); ?>

  <br>

  <div  style=" width:100%;"><center>
    <?php 
    include("BD/conexion.php");
     $dato = $_POST['busqueda'];

$consul = "SELECT * FROM  t_inventario_general_web WHERE  nombre_prod_inv = '$dato' OR precio_unidad   = '$dato' ";


$exe = mysqli_query($conexion,$consul);

while($t = mysqli_fetch_array($exe)){ ?>

<style type="text/css">
  #d{
   min-width: 100px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
   /* background-color: green;*/
    margin-bottom: 15px;
    border: 1px solid gray;
    margin-left: 10px;
  }
  #caja2{
    min-width: 200px;
   /* background-color: pink;*/
  }
</style>

<a href="detalle?id=<?php echo $t['id_prod_inv']; ?>">
<div id="d">
<div class="row row-cols-1 row-cols-md-4 g-4 m-5" id="cajas">
  <div class="col">
    <div  id="caja2">
      <img src="img/productos/<?php echo $t['img_producto']; ?>" alt="..." height="100px">
      <div class="card-body">
        <h3 class="card-title"> <strong><?php echo $t['nombre_prod_inv']; ?></strong></h3>
        <p class="card-text"><?php echo $t['precio_unidad']; ?></p>
        <p class="fs-3">₡00.000 +iva</p>
      </div>
    </div>
  </div>
</div>
</div>
</a>
  <?php
  
}

    ?></center>
  </div><br>




  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>
</body>

</html>