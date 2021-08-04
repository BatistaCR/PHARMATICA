<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/headerStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/style_contacto.css">
    <script type="text/javascript" src="../JS/jquery.js"></script>
    <script type="text/javascript" src="../JS/enviar_contacto.js"></script>

    <title>PHARMATICA</title>
  </head>
  <body>

 <!--HEADER-->   
<?php include('../vistas/header.php') ?>
<!--HEADER-->
<br><br>

<center>
<div id="login_div"><br>
<div id="titulo_registro"><b><h4 id="titulo_h4">CONTÁCTANOS</h4 id="titulo_h4"></b></div>

<p id="titulo_p">Llena los campos y envíanos tu comentario</p>

  
  <div class="row">
    <div class="col">
      <label class="label_contacto">Nombre completo</label>
      <input type="text" class="form-control" placeholder="Tu nombre aquí" 
      id="nombre_contacto"><br>
      <label class="label_contacto">Correo electrónico</label>
      <input type="text" class="form-control" placeholder="Tu correo aquí"
      id="correo_contacto"><br>
      <label class="label_contacto">Teléfono</label>
      <input type="text" class="form-control" placeholder="Tu número aquí"
      id="telefono_contacto"><br><br>

<img src="../img_general/logoH.png" width="80px" height="80px" style="float:left; margin-right:15px;">
<div style="text-align:left;">
  <img src="../img_general/img_interfaz/telephone.svg" width="25px" height="25px">
  <b>800 0000 0000 </b> <br>
   <img src="../img_general/img_interfaz/at.svg" width="25px" height="25px"> <b>pharmatica@info.com</b><br>  
   <img src="../img_general/img_interfaz/geo-alt.svg" width="25px" height="25px">
   <b>Ciudad Neily, Contiguo a...</b><br>
</div>


    </div>


    <div class="col">
      <label class="label_contacto">Comentario</label>
    <textarea class="form-control" rows="8" placeholder="Tu comentario aquí" id="comentario_contacto"></textarea><br>

<button type="button" class="btn btn-primary btn-lg"
href="javascript:;" onclick="realizaProceso($('#nombre_contacto').val(), $('#correo_contacto').val(),$('#telefono_contacto').val(),$('#comentario_contacto').val());return false;"><b>ENVIAR</b></button><br><br>

<button type="reset" class="btn btn-danger btn-lg"><b>BORRAR</b></button>
    </div>
  </div>
<div> 
</div>
<br>
</div>

</center>



<br><br>
<br><br>
<br><br>
<br><br>
<!-- Footer -->
<?php include('../vistas/footer.php'); ?>
<!-- Footer -->

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>