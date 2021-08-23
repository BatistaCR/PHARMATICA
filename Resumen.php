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
  }
  #seccion2{
    
    background-color: #000;
    color: #fff;
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
  <div class="secciones" id="seccion2"><center>RESUMEN</center></div>
  <div class="secciones"><center>PAGO</center></div>
  <div class="secciones"><center>CONFIRMACIÓN</center></div>



 

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