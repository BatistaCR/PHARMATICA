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
     // header("location:../../PHARMATICA/sesion.php");
      }
?>
 
<!DOCTYPE html>
<html lang="es">
<!-- Head -->

<!-- desactiva el clik der e inspeccionar -->
<body oncontextmenu="return false" onload="primer_funcion();">


<?php include('vistas/head.php') ?>

<body>
  <!-- Header -->
<?php include('vistas/header.php') ?>

  <!-- Categorías -->
<?php include('vistas/category.php'); ?>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?php 
if (isset($_GET['limite_exe'])) { ?>

  <script type="text/javascript">
  setTimeout(function() {
    $('#notificacion').fadeOut('fast');
}, 2000); // <-- time in milliseconds
</script>
<style type="text/css">
  #notificacion{
    width: 100%;
    height: 100px;
    background: #000;
    color: #fff;
    text-align: center;
}
</style>

<div id="notificacion">
    !!!CANTIDAD DIGITADA DE PRODUCTOS EXCEDE EL LIMITE DE DISPONIBILIDAD
</div>
  
<?php
}
?>

<br><br>

<div  style=" width:100%;">
    
<?php 
/*variable de producto y consulta principal de datos*/
  $id = trim($_GET['id']);
  $consul = "SELECT * FROM  t_inventario_general_web WHERE 
    id_prod_inv  = '$id' ";

  $exe = mysqli_query($conexion,$consul);

    while($t = mysqli_fetch_array($exe)){ 
      /*datos princiapales de la consulta*/
      $nombre1 = $t['nombre_prod_inv'];
      $cantidad_unidad1 = $t['cantidad_prod_unidades'];
      $cantidad_caja1 = $t['cantidad_prod_cajas'];
      $precio_unidad = $t['precio_unidad'];
      $precio_caja = $t['precio_caja'];
?>

<!--<a href="https://web.whatsapp.com/send?phone=50687472886&text=https://www.youtube.com/watch?v=<?php // echo $nombre1; ?>" target="_blank">WHATSAPP</a><br>-->

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

      <!-- input oculto de envio de CODIGO del product -->
      <input type="hidden" name="cod_prod_detalle" 
        value="<?php echo $t['codigo_producto']; ?>">

      <!-- input oculto que envia el ID del user -->
      <input type="hidden" name="id_cliente"
         value="<?php $id_cliente; ?>">


<script type="text/javascript">

function primer_funcion(){
  var var1 = "<?php echo $cantidad_unidad1; ?>";
  var var2 = "<?php echo $cantidad_caja1; ?>";
  var var3 = document.getElementById("caja_pri");
  var var4 = document.getElementById("caja_tercer");

  if (var1 != '0' && var2 != '0' ) {
    var3.style.display = "none";
    var4.style.display = "";
  }
}

  //document.getElementById("caja_pri").style.display = "none";



function changeFunc(){


if(document.getElementById('selectBox').value == "UNIDAD_M") {
   
  document.getElementById("caja_tercer").style.display = "";
  document.getElementById("caja_pri").style.display = "none";
  document.getElementById("caja_pri").value = '0';
  document.getElementById("caja_secun").style.display = "none";
  document.getElementById("caja_secun").value = '0';

  
}

if(document.getElementById('selectBox').value == "CAJA_M") {

   document.getElementById("caja_secun").style.display = "";
   document.getElementById("caja_pri").style.display = "none";
   document.getElementById("caja_pri").value = '0';
   document.getElementById("caja_tercer").style.display = "none";
   document.getElementById("caja_tercer").value = '0';

  
}


  
//  document.write(nombre);
var caja = document.getElementById("caja");
var unidad = document.getElementById("unidad");
var selectBox = document.getElementById("selectBox");
var tipo_compra = selectBox.options[selectBox.selectedIndex].value;
//var caja = selectBox.options[selectBox.selectedIndex].value="UNIDAD";
   // alert(selectedValue);

if (tipo_compra === "CAJA_M") {
    unidad.style.display = "none";
    caja.style.display = "";
    var cantidad_general1 = "<?php echo $cantidad_caja1; ?>"
    //document.write(cantidad_general1);
}else if (tipo_compra === "UNIDAD_M") {
    unidad.style.display = "";
    caja.style.display = "none";
    var cantidad_general1 = "<?php echo $cantidad_unidad1; ?>"
    //document.write(cantidad_general1);
}

}
</script>


<!-- INICIO IMAGEN PRODUCTO -->

<img class="img-escalada-full" src="img/productos/<?php echo $t['img_producto']; ?>">

<!-- FIN IMAGEN PRODUCTO -->


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
      <p class="fs-05 cr-blue">DISPONIBLE: <?php echo $t['cantidad_prod_unidades']; ?></p>
    </div>
  

<?php 
   /*solo muestra precio caja*/
  }elseif($t['precio_unidad'] === "" AND $t['precio_caja'] != "") {

   $cantidad_general = $t['cantidad_prod_cajas'];  ?>
    <div id="caja" style="display:;"> 
      <p class="fs-03">PRECIO POR CAJA</p>
      <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja'];?>+i.v.a.</p>
      <p class="fs-05 cr-blue">DISPONIBLE: <?php echo $t['cantidad_prod_cajas'];?></p>
    </div>

<?php  
  /*si tiene ambos precio muestra el de unidad por defecto*/
  }elseif($t['precio_unidad'] != "" AND $t['precio_caja'] != "") {
    $cantidad_unidad = $t['cantidad_prod_unidades'];
    $cantidad_caja = $t['cantidad_prod_cajas'];  ?>

    <div id="unidad" style="display:;"> 
      <p class="fs-03">PRECIO POR UNIDAD</p>
      <p class="fs-05 cr-red">₡<?php echo $t['precio_unidad']; ?>+i.v.a.</p>
      <p class="fs-05 cr-blue">DISPONIBLE: 
        <?php echo $t['cantidad_prod_unidades']; ?></p>
    </div> 

    <div id="caja" style="display:none;"> 
      <p class="fs-03">PRECIO POR CAJA</p>
      <p class="fs-05 cr-red">₡<?php  echo $t['precio_caja']; ?>+i.v.a.</p>
      <p class="fs-05 cr-blue"> DISPONIBLE: <?php 
      echo $t['cantidad_prod_cajas']; ?></p>
    </div>
<?php  
  }else{
    /*Si NO tiene los precios establecidos*/
    echo "<p class='fs-05'>CONSULTAR DETALLES</p>";
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

  <option value="UNIDAD_M" id="uni">UNIDAD</option>
  <option value="CAJA_M" id="caj">CAJA</option>

<?php  
  }
?>
</select>

<script type="text/javascript">
   /*3DA CAJA*/
 
 function masUni() {
    
     let valor_actual_unidad = document.getElementById("input_caja3").value;
     var cantidad_general_unidad = "<?php echo $cantidad_unidad1; ?>";
     valor_actual_unidad++;
  
      if(valor_actual_unidad<=cantidad_general_unidad){
         document.getElementById("input_caja3").value=valor_actual_unidad++;
      }
  } 

    function menosUni() {
      var valor_unidad = document.getElementById("input_caja3").value;  
      if (valor_unidad == 1) {
    }else if(valor_unidad < 1){
      document.getElementById("input_caja3").value++;
    }
    else{
        document.getElementById("input_caja3").value--;
    }
  }

/*FIN 2DA CAJA*/

</script>


<script type="text/javascript">
   /*2DA CAJA*/
 
 function masCaj() {
    
     let valor_actual_caja = document.getElementById("input_caja2").value;
     var cantidad_general_caja = "<?php echo $cantidad_caja1; ?>";
     valor_actual_caja++;
  
      if(valor_actual_caja<=cantidad_general_caja){
         document.getElementById("input_caja2").value=valor_actual_caja++;
      }
  } 

    function menosCaj() {
      var valor_caja = document.getElementById("input_caja2").value;  
      if (valor_caja == 1) {
    }else if(valor_caja < 1){
      document.getElementById("input_caja2").value++;
    }
    else{
        document.getElementById("input_caja2").value--;
    }
  }

/*FIN 2DA CAJA*/

</script>

<script type="text/javascript">

  function mas() {
    
     let valor_actual = document.getElementById("input").value;
     var cantidad_general = "<?php echo $cantidad_general; ?>";
     valor_actual++;
  
      if(valor_actual<=cantidad_general){
         document.getElementById("input").value=valor_actual++;
      }
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



  window.addEventListener("keydown", function(e) {
    // flechas
    if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        e.preventDefault();
    }
}, false);


</script>




<!-- INICIO input y controles del contador del carrito -->
<div class="row">
  <div class="col-12 col-md-5 ja-center fd-column">
     <p class="fs-03">Cantidad</p> 
       <div class="fd-row" id="caja_pri" style="display:;">
            <!-- boton de menos en el contador -->
          <button type="button" class="btn-box-left" 
             onclick="menos()">-
          </button>

           <!-- input de cantidad --> 
          <input class="input" type="number" name="cantidad_productos_general" 
            id="input" value="1" oninput="this.value = Math.abs(this.value)"
             min="1"  required>

          <!-- input de menos en el contador -->
          <button type="button" class="btn-box-right" 
              onclick="mas()">+
          </button>
       </div>

<!-- CAJA 2 (prod x cajas)-->
       <div class="fd-row" id="caja_secun" style="display:none;">
            <!-- boton de menos en el contador -->
          <button type="button" class="btn-box-left" 
             onclick="menosCaj()">-
          </button>

          <!-- input de cantidad --> 
          <input class="input" type="number" name="cantidad_productos_solo_caja"
            id="input_caja2" value="1" oninput="this.value = Math.abs(this.value)" min="1"  required>

          <!-- input de menos en el contador -->
          <button type="button" class="btn-box-right" 
              onclick="masCaj()">+
          </button>
       </div>

 <!-- CAJA 3 (prod x unidades)-->
       <div class="fd-row" id="caja_tercer" style="display:none;">
            <!-- boton de menos en el contador -->
          <button type="button" class="btn-box-left" 
             onclick="menosUni()">-
          </button>

           <!-- input de cantidad --> 
    <input class="input" type="number" name="cantidad_productos_solo_unidad" 
            id="input_caja3" value="1" oninput="this.value = Math.abs(this.value)" min="1"  required>

          <!-- input de menos en el contador -->
          <button type="button" class="btn-box-right" 
              onclick="masUni()">+
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