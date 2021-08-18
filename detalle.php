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
.caja{
  
overflow: hidden;

}

.caja img{
  height: 100%;
    width: 30vh;
}

.btn-box{
  width: 2rem;
  height: 100%;
  background-color:blue;
  color: white;
}

.contador{
  border-radius: 0.5rem;
  border: solid 2px blue;
  width: auto;
  height: 2rem;
  align-items: center;
  justify-content: center;
  background-color: white;
}
</style>

<!--BREADCRUM-->
<nav aria-label="breadcrumb" class="bc-black py-01">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">pagina</li>
  </ol>
</nav>
<!--BREADCRUM-->

<div class="container pf-02 ja-center">
  <div class="row">
<div class="col-auto caja">
          <img src="img/productos/<?php echo $t['img_producto']; ?>" alt="...">
</div>

<div class="col px-05">
<h1 class="ts-09" ><b><?php echo $t['nombre_prod_inv']; ?></b></h1>
<?php 
              if($t['precio_unidad'] == "" AND $t['precio_caja'] != "") {  ?>
                <p class="fs-10"><b>PRECIO POR CAJA</b></p>
                <p class="fs-10 cr-red"><b>₡<?php  echo $t['precio_caja']; ?>+i.v.a.</b></p>
            <?php  }elseif($t['precio_unidad'] != ""){ ?>
            <p class="fs-10"><b>PRECIO POR UNIDAD</b></p>
            <p class="fs-10 cr-red"><b>₡<?php echo $t['precio_unidad']; ?>+i.v.a.</b></p>
          <?php  }else{
            echo "<p class='fs-10'><b>VER DETALLES</b></p>";
            }
            ?>
            <div class="row ja-center bc-red ta-center fd-row">
            <p class="fs-05 mx-05">cantidad</p> 
            <div class="fd-row contador">
            <button type="button" class="btn-box" value="-">-</button>
            <input type="number" name="" id="">
            <button type="button" class="btn-box" value="+">+</button>
            </div>
          </div>
</div>
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