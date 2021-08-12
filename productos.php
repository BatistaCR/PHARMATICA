<!doctype html>
<html lang="es">

<!-- Head -->
<?php include('vistas/head.php') ?>

<body>
<section class="bg-gray py-03">
<div class="container-fluid">
    <div class="text-center mf-03">
      <h2 class="titulo-registro">NUESTROS PRODUCTOS</h2>
      <p class="fs-4">Encuentra todo lo que necesitas</p>
    </div>

    <div class="row row-col row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4 mf-06">

    <!--AQUI SE DEBE INICIAR EL ARRAY-->
    <?php 
    include("BD/conexion.php");
    $consul = "SELECT * FROM  t_inventario_general_web";
    $exe = mysqli_query($conexion,$consul);
    while($t = mysqli_fetch_array($exe)){ ?>
    
    <a href="detalle.php?id=<?php echo $t['id_prod_inv']; ?>">
      <div class="col tarjeta">
          <img src="img/productos/<?php echo $t['img_producto']; ?>" class="py-02" alt="...">
          <div class="card-body">
            <h3 class="card-title"> <strong><?php echo $t['nombre_prod_inv']; ?></strong></h3>
            <p class="card-text">PRECIO POR UNIDAD</p>
            <p class="fs-3"><?php  echo $t['precio_prod_inv']; ?></p>
          </div>
        </div>
              <!--FINALIZA EL ARRAY-->
    <?php
}
    ?>
    </div>
  </div>
  </section>

  <!-- Scripts -->
  <?php// include('vistas/scripts.php') ?>
</body>
</html>