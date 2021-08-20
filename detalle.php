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


</style>

<!--BREADCRUM-->
<nav aria-label="breadcrumb" class="bc-black py-01">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">pagina</li>
  </ol>
</nav>
<!--BREADCRUM-->


<form action="#" method="POST">
  <div class="container">
  <div class="row pf-03 ja-center my-05">
          <img class="img-escalada-full" src="img/productos/<?php echo $t['img_producto']; ?>" alt="...">




<div class="col text-center">
<h1 class="fs-06 fw-06" ><?php echo $t['nombre_prod_inv']; ?></h1>
<?php 
              if($t['precio_unidad'] == "" AND $t['precio_caja'] != "") {  ?>
                <p class="fs-03">PRECIO POR CAJA</p>
                <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja']; ?>+i.v.a.</p>
            <?php  }elseif($t['precio_unidad'] != ""){ ?>
            <p class="fs-03">PRECIO POR UNIDAD</p>
            <p class="fs-05 cr-red">₡<?php echo $t['precio_unidad']; ?>+i.v.a.</p>
          <?php  }else{
            echo "<p class='fs-05'>VER DETALLES</p>";
            }
            ?>
            <div class="row ">
              <div class="col-12 col-md-5 ja-center fd-column">
            <p class="fs-03">cantidad</p> 
            <div class="fd-row">
            <button type="button" class="btn-box-left" onclick="menos()">-</button>
            <input class="input" type="number" name="" id="input" value="1" min="1" oninput="this.value = Math.abs(this.value)" 
            onKeyUp="pierdeFoco(this)" required>
            <button type="button" class="btn-box-right" onclick="mas()">+</button>
          </div>
            </div>
            <div class="col-12 col-md-7 ja-center mt-03 " id="carrito">
              <img class="carrito" src="./img/carrito.png" alt="">
            <button  class="bn bn-red fs-03 ja-center "><span>agregar al carrito</span></button>
          </div>
          </div>
          
</div>
</div>
  

  <?php
}
    ?><br>
</div>
</form>


  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>

    <!-- Script contador -->

  <script>
  
  function mas() {
      document.getElementById("input").value++;
  }
  
  function menos() {
      var valor = document.getElementById("input").value;
      
  
      if (valor == 1) {
    }else if(valor < 1){
      document.getElementById("input").value++;
    }
    else{
        document.getElementById("input").value--;
    }
      
  }

  function pierdeFoco(e){
    var valor = e.value.replace(/^0*/, '');
    e.value = valor;
  }
  </script>

</body>

</html>