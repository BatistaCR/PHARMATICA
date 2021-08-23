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

  <div class="text-center mb-3">
    <h2 class="titulo-registro">CARRITO DE COMPRA</h2>
    <p class="fs-4">Encuentra todo lo que necesitas</p>
  </div><br>

<style type="text/css">
  .secciones{
    /*background-color: #000;*/
   /* color: #fff;*/
    font-weight: bold;
    height: 35px;
    width: 150px;
    float: left;
    margin-left: 20px;
    border-radius: 30px;
    padding-top: 5px;
    border-color: black;
    border-style: solid;
  }

  #seccion1{
    margin-left: 23%;
    background-color: #000;
    color: #fff;
  }
  #producto_carro{
   /* background-color: red;*/
    width: 31%;
    float: left;
    margin-left:23%;
    border-style: solid;
    border-color: black;
    border-radius: 10px;
    margin-bottom: 10px;
  }
  #monto_carro{
   /* background-color: green;*/ 
   border-style: solid;
    border-color: black;
    border-radius: 10px;
    width: 23%;
    float: left;
    margin-left: 10px;
    margin-top: -370px;
  }
  #lb_c{
    float: left;
  }
  #p1{
    color: #000;
    font-weight: bold;
    font-size: 20px;
  }
  #p2{
    color: grey;
    font-weight: bold;
    font-size: 16px;
  }
  #p3{
    color:red;
    font-weight: bold;
    font-size: 22px;
  }
  #lb_o{
    background-color: #000;
    height: 33px;
    width: 110px;
    border-radius: 40px;
    color: #fff;
    font-size: 25px;
  }
  #bt_continuar{
    width: 90%;
  }
  .det_monto{
    font-size: 22px;
    margin-left: 15px;
  }
  #final_monto{
    font-size: 23px;
    color: red;
    margin-left: 15px;
  }
</style>

<style type="text/css">
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
input[type=number] { -moz-appearance:textfield; }
</style>
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

  <div class="secciones" id="seccion1"><center>ORDEN</center></div>
  <div class="secciones"><center>ENVIO</center></div>
  <div class="secciones"><center>RESUMEN</center></div>
  <div class="secciones"><center>PAGO</center></div>
  <div class="secciones"><center>CONFIRMACIÓN</center></div>

<br>
<br>
<br>

<div style="margin-bottom:500px;">

<?php 
$select = "SELECT * FROM t_carro_compras_temporal ";
$exe_ca = mysqli_query($conexion,$select);

while ($t = mysqli_fetch_array($exe_ca)) {
  


?>

<div id="producto_carro">
  <img src="img/productos/<?php echo $t['img_producto_carro']; ?>" width="100px" height="100px" style="margin-left: 10px; float: left;"> 
  <label id="lb_c"><p id="p1"><?php echo $t['nombre_prod_carro']; ?></p><br>
  <p id="p2">PRECIO POR UNIDAD </p>

 <p id="p3">₡ <?php echo $t['precio_unidad_carro']; ?> +i.v.a.</p>
</label>

<div style="margin-left:15px; width:35%; float:left;">
<button type="button" class="btn btn-primary" id="menos" onclick="menos()" style=" float: left;">-</button>

<input type="number" name="" id="input" value="1" min="1" 
oninput="this.value = Math.abs(this.value)" onKeyUp="pierdeFoco(this)" 
style="width:80px; float: left; height:37px; border-color:blue;border-style: solid;">


<button type="button" class="btn btn-primary" id="mas" onclick="mas()" style=" float: left;">+</button>
<br><br>

<button type="button" class="btn btn-danger">ELIMINAR</button>
</div>

</div>
<?php } ?>


<div id="monto_carro"><br>
  <center>
  <div id="lb_o">ORDEN</div><br>
  </center>

 <p class="det_monto"> Subtotal    ₡ 0000.00</p>
 <p class="det_monto"> Descuento    ₡ 0000.00</p>
 <p class="det_monto"> IVA    ₡ 0000.00</p>
 <p id="final_monto"> Total    ₡ 0000.00</p><br>

<center>
<button type="button" id="bt_continuar" class="btn btn-primary">CONTINUAR</button>
<br>
</center>
<br>
</div><br>

<div style="float:left; width: 23%;margin-left: 25px;margin-top: -50px;">
<button type="button" class="btn btn-dark" style=" width: 90%;">REGRESAR</button><br><br><button type="button" class="btn btn-danger" style=" width: 90%;">VACIAR EL CARRO</button>
</div>

</div>
  
 

<br><br>
<br><br>
<br><br>
<br><br>

  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>

    <!-- Script contador -->

</body>

</html>