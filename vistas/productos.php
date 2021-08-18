
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
    $consul = "SELECT * FROM  t_inventario_general_web ORDER BY rand()";
    $exe = mysqli_query($conexion,$consul);
    while($t = mysqli_fetch_array($exe)){ ?>
    
    <a href="detalle?id=<?php echo $t['id_prod_inv']; ?>">
      <div class="col tarjeta">
          <img src="img/productos/<?php echo $t['img_producto']; ?>" class="py-02" alt="...">
          <div class="card-body">
            <h3 class="card-title"> <strong><?php echo $t['nombre_prod_inv']; ?></strong></h3>
            <?php 
              if($t['precio_unidad'] == "" AND $t['precio_caja'] != "") {  ?>
                <p class="card-text">PRECIO POR CAJA</p>
                <p class="fs-3"><?php  echo $t['precio_caja']; ?></p>
            <?php  }elseif($t['precio_unidad'] != ""){ ?>
            <p class="card-text">PRECIO POR UNIDAD</p>
            <p class="fs-3"><?php echo $t['precio_unidad']; ?></p>
          <?php  }else{
            echo "<p class='card-text'>VER DETALLES</p>";
            }
            ?>
          
          </div>
        </div>
              <!--FINALIZA EL ARRAY-->
    <?php
}
    ?>
    </div>
  </div>
  </section>
