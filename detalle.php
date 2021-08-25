<?php
include("BD/conexion.php");
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
    $select_user = "SELECT * FROM  t_usuarios_general
     WHERE nombre_user_general = '$no' ";
    $exe_u = mysqli_query($conexion,$select_user);
    while($u = mysqli_fetch_array($exe_u)){
     $id_cliente = $u['id_user_general'];
    }
      }else{   
      header("location:../../PHARMATICAS/PHARMATICAS/sesion.php");
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
/*variable de producto y consulta principal de datos*/
  $id = trim($_GET['id']);
  $consul = "SELECT * FROM  t_inventario_general_web WHERE 
    id_prod_inv  = '$id' ";

  $exe = mysqli_query($conexion,$consul);

    while($t = mysqli_fetch_array($exe)){ 
      /*datos princiapales de la consulta*/
      $cantidad_unidad1 = $t['cantidad_prod_unidades'];
      $cantidad_caja1 = $t['cantidad_prod_cajas'];
      $precio_unidad = $t['precio_unidad'];
      $precio_caja = $t['precio_caja'];
?>


<!--BREADCRUM-->
<nav aria-label="breadcrumb" class="bc-black py-01">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">pagina</li>
  </ol>
</nav>
<!--BREADCRUM-->

<!-- inicio de formulario de envio -->
<form action="BD/insert_carro_compra.php" method="POST">
  <div class="container">
    <div class="row pf-03 ja-center my-05">

      <!-- input oculto de envio de ID del product -->                       
      <input type="hidden" name="id_prod_detalle" 
        value="<?php echo $t['id_prod_inv']; ?>">

      <!-- input oculto que envia el ID del user -->
      <input type="hidden" name="id_cliente"
         value="<?php $id_cliente; ?>">


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


<!-- INICIO espacio temporal de ima del producto -->
<style type="text/css">
  #img1{
    width: 400px;
    height: 400px;
  }
</style>

<img id="img1" src="img/productos/<?php echo $t['img_producto']; ?>">
<!-- FIN espacio temporal de ima del producto -->


<div class="col text-center">
  <!-- titulo del producto -->
  <h1 class="fs-06 fw-06" ><?php echo $t['nombre_prod_inv']; ?></h1>

<?php 
  /*solo muestra precio unidad*/
  if($t['precio_unidad'] != "" AND $t['precio_caja'] === ""){ 
     $cantidad_general = $t['cantidad_prod_unidades'];
  ?>
    <div id="unidad" style="display:;"> 
      <p class="fs-03">PRECIO POR UNIDAD</p>
      <p class="fs-05 cr-red">₡<?php echo $t['precio_unidad']; ?>+i.v.a.</p>
    </div>
  

<?php 
   /*solo muestra precio caja*/
  }elseif($t['precio_unidad'] === "" AND $t['precio_caja'] != "") {

   $cantidad_general = $t['cantidad_prod_cajas'];  ?>
    <div id="caja" style="display:;"> 
      <p class="fs-03">PRECIO POR CAJA</p>
      <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja'];?>+i.v.a.</p>
    </div>

<?php  
  /*si tiene ambos precio muestra el de unidad por defecto*/
  }elseif($t['precio_unidad'] != "" AND $t['precio_caja'] != "") {
    $cantidad_unidad = $t['cantidad_prod_unidades'];
    $cantidad_caja = $t['cantidad_prod_cajas'];  ?>

    <div id="unidad" style="display:;"> 
      <p class="fs-03">PRECIO POR UNIDAD</p>
      <p class="fs-05 cr-red">₡<?php echo $t['precio_unidad']; ?>+i.v.a.</p>
    </div> 

    <div id="caja" style="display:none;"> 
      <p class="fs-03">PRECIO POR CAJA</p>
      <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja']; ?>+i.v.a.</p>
    </div>
<?php  
  }else{
    /*Si NO tiene los precios establecidos*/
    echo "<p class='fs-05'>VER DETALLES</p>";
  }
?>


<!-- selector del tipo de compra -->
<label for="fo">TIPO DE COMPRA</label>
  <select class="custom-select" name="tipoProd" id="selectBox"
     onchange="changeFunc();">
<?php    
  /*las variables de optienen de la consulta en la linea 36*/

  /*Si solo caja*/
  if($precio_unidad == "" AND $precio_caja != "") {
?>
         
  <option value="CAJA">CAJA</option>

<?php 
  /*si solo unidad*/
  }elseif($precio_unidad != "" AND $precio_caja == ""){
?>

  <option value="UNIDAD">UNIDAD</option>

<?php
  /*si tiene ambos precios*/
  }elseif($precio_unidad != "" AND $precio_caja != ""){
?>
  <option value="UNIDAD">UNIDAD</option>
  <option value="CAJA">CAJA</option>

<?php  
  }
?>
</select>


<!-- INICIO input y controles del contador del carrito -->
<div class="row ">
  <div class="col-12 col-md-5 ja-center fd-column">
     <p class="fs-03">Cantidad</p> 
       <div class="fd-row">
            <!-- boton de menos en el contador -->
          <button type="button" class="btn-box-left" 
             onclick="menos()">-
          </button>

           <!-- input de cantidad --> 
          <input class="input" type="number" name="cantidad_productos" 
            id="input" value="1" oninput="this.value = Math.abs(this.value)"
             min="1" onKeyUp="pierdeFoco(this)" required max="
              <?php 
                 if(isset($cantidad_general)){
                   echo $cantidad_general;
                 }else{
                   
                 }
              ?>">

          <!-- input de menos en el contador -->
          <button type="button" class="btn-box-right" 
              onclick="mas()">+
          </button>
       </div>
  </div>


  <div class="col-12 col-md-7 ja-center mt-03 " id="carrito">
      <img class="carrito" src="./img/carrito.png" alt="">
        <button  class="bn bn-red fs-03 ja-center ">
            <span>agregar al carrito</span>
        </button>
  </div>

</div>
<!-- FIN input y controles del contador del carrito -->
          
</div>
</div>
  

<?php
  }/*WHILE linea 41*/
?>
</div>
</form>


<!-- Footer -->
<?php include('vistas/footer.php') ?>

<!-- Scripts -->
<?php include('vistas/scripts.php') ?>

    
</body>
</html>