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

while($t = mysqli_fetch_array($exe)){ 

  $cantidad_unidad1 = $t['cantidad_prod_unidades'];
  $cantidad_caja1 = $t['cantidad_prod_cajas'];
?>
<style type="text/css">


</style>

<!--BREADCRUM-->
<nav aria-label="breadcrumb" class="bc-black py-01">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">pagina</li>
  </ol>
</nav>
<!--BREADCRUM-->


<form action="BD/insert_carro_compra.php" method="POST">
  <div class="container">
  <div class="row pf-03 ja-center my-05">
    <img class="img-escalada-full" src="img/productos/<?php echo $t['img_producto']; ?>" alt="...">


<input type="hidden" name="id_prod_detalle" value="<?php echo $t['id_prod_inv']; ?>">


<script type="text/javascript">
  
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

let nombre = 'aLEX';



function changeFunc(){
  
//  document.write(nombre);
var caja = document.getElementById("caja");
var unidad = document.getElementById("unidad");
var selectBox = document.getElementById("selectBox");
var tipo_compra = selectBox.options[selectBox.selectedIndex].value;
//var caja = selectBox.options[selectBox.selectedIndex].value="UNIDAD";
   // alert(selectedValue);

if (tipo_compra === "CAJA") {
    unidad.style.display = "none";
    caja.style.display = "";
    var cantidad_general1 = "<?php echo $cantidad_caja1; ?>"
    //document.write(cantidad_general1);
}else if (tipo_compra === "UNIDAD") {
    unidad.style.display = "";
    caja.style.display = "none";
    var cantidad_general1 = "<?php echo $cantidad_unidad1; ?>"
    //document.write(cantidad_general1);
}

}



</script>



<div class="col text-center">
<h1 class="fs-06 fw-06" ><?php echo $t['nombre_prod_inv']; ?></h1>
<?php 
  if($t['precio_unidad'] != "" AND $t['precio_caja'] === ""){ 
     $cantidad_general = $t['cantidad_prod_unidades'];
  ?>
    <div id="unidad" style="display:;"> 
         <p class="fs-03">PRECIO POR UNIDAD</p>
         <p class="fs-05 cr-red">₡<?php echo $t['precio_unidad']; ?>+i.v.a.</p>

    </div>
  

<?php  }elseif($t['precio_unidad'] === "" AND $t['precio_caja'] != "") {

  $cantidad_general = $t['cantidad_prod_cajas'];  ?>
    <div id="caja" style="display:;"> 
         <p class="fs-03">PRECIO POR CAJA</p>
         <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja']; ?>+i.v.a.
         </p>
    </div>
<?php  }
elseif($t['precio_unidad'] != "" AND $t['precio_caja'] != "") {
  $cantidad_unidad = $t['cantidad_prod_unidades'];
  $cantidad_caja = $t['cantidad_prod_cajas'];  ?>
    <div id="unidad" style="display:;"> 
      <script type="text/javascript">
        document.write(cantidad_general1);
      </script>
         <p class="fs-03">PRECIO POR UNIDAD</p>
         <p class="fs-05 cr-red">₡<?php echo $t['precio_unidad']; ?>+i.v.a.</p>
    </div> 

    <div id="caja" style="display:none;"> 
         <p class="fs-03">PRECIO POR CAJA</p>
         <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja']; ?>+i.v.a.
         </p>
    </div>
<?php  }else{
            echo "<p class='fs-05'>VER DETALLES</p>";
      }
?>

<label for="fo">TIPO DE COMPRA</label>
   <?php
     
      $pre = "SELECT * FROM  t_inventario_general_web WHERE id_prod_inv = '$id'";
      $resultado= mysqli_query($conexion,$pre);
   
    ?>
   <select class="custom-select"
    name="tipoProd" id="selectBox" onchange="changeFunc();">
    <?php    
      while ( $row = mysqli_fetch_array($resultado)){

        $precio_unidad = $row['precio_unidad'];
        $precio_caja = $row['precio_caja'];

        if ($precio_unidad == "" AND $precio_caja != "") {  ?>
         
    <option value="CAJA">CAJA</option>

      <?php }elseif($precio_unidad != "" AND $precio_caja == ""){ ?>

        <option value="UNIDAD">UNIDAD</option>

       <?php }elseif($precio_unidad != "" AND $precio_caja != ""){ ?>
        <option value="UNIDAD">UNIDAD</option>
        <option value="CAJA">CAJA</option>
   <?php     }
     ?>
    
   <?php } ?> 
 </select>

  <div class="row ">
    <div class="col-12 col-md-5 ja-center fd-column">
    <p class="fs-03">cantidad</p> 
    <div class="fd-row">
    <button type="button" class="btn-box-left" onclick="menos()">-</button>
    <input class="input" type="number" name="cantidad_productos" id="input" value="1" min="1" max="<?php 
     if(isset($cantidad_general)){
       echo $cantidad_general;
     }else{
       echo "<script> document.write(cantidad_general1); </script>";
     }
     ?>" oninput="this.value = Math.abs(this.value)" 
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

</body>

</html>