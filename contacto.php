<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
       // echo "SIN REGISTRO";
      header("location:../pharmatica/sesion.php");
      }
 ?>

<!doctype html>
<html lang="es">
<!-- Head -->

<?php include('vistas/head.php') ?>

<body>

  <!--HEADER-->
  <?php include('vistas/header.php') ?>
  <!--HEADER-->

  <div class="d-flex justify-content-center py-5 m-5">
    <div class=" login-div p-5 my-5">


      <div class="text-center">
        <h4 class="titulo-registro mb-3">CONTÁCTANOS</h4>
        <p>
          Llena los campos y envíanos tus comentarios
        </p>
      </div>

      <form action="../BD/registro-usuarios-nuevo.php" method="POST">

        <div class="form-group">
          <div class="row justify-content-center ">
            <div class="col-auto flex-fill ">
              <label class="label-registro">Nombre</label>
              <input type="text" class="form-control mb-3" placeholder="Ingrese su nombre completo"
                name="nombre_registro">

              <label class="label-registro">Correo electrónico</label>
              <input type="email" class="form-control mb-3" placeholder="Ingrese su correo electrónico"
                name="correo_registro">

              <label class="label-registro">Teléfono</label>
              <input type="tel" class="form-control mb-3" pattern="[0-9]{4}-[0-9]{4}" placeholder="Ingrese su número"
                name="clave1_registro">
            </div>
            <div class="col-auto flex-fill">
              <label class="label-registro">Comentario</label>
              <textarea type="text" class=" form-control mb-3 comentario" placeholder="escriba su comentario"
                name="clave2_registro"> </textarea>

            </div>
          </div>

          <div class="row align-items-center justify-content-center">
            <div class="col-auto ">
              <img class="logo" src="img/logo.png" width="120" height="120">
            </div>
            <div class="col-auto flex-md-fill m-3">
              <ul class="list-unstyled m-auto text-center text-sm-start ">
                <li class="mb-2">
                  <i class="bi bi-telephone"></i>
                  800 00000000
                </li>
                <li class="mb-2">
                  <i class="bi bi-envelope"></i>
                  pharmatica@gmail.com
                </li>
                <li>
                  <i class=" bi bi-geo-alt"></i>
                  Ciudad Neily, Corredores, C.R.
                </li>

              </ul>
            </div>

            <div class="d-md-grid col-auto d-xs-flex">
              <button type="submit" class="btn btn-primary btn-lg m-2"><b>ENVIAR</b></button>
              <button type="reset" class="btn btn-danger btn-lg m-2"><b>BORRAR</b></button>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
  </div>


  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

    <!-- Scripts -->
    <?php include('vistas/scripts.php') ?>
    
</body>

</html>