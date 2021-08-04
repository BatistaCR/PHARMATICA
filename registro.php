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
      <div class="row">
        <div class="col-auto">
          <div class="text-center">
            <h4 class="titulo-registro mb-3">REGISTRO</h4>
            <p>
              ¿ya tienes una cuenta? <a href="sesion.php">ingresar</a>
            </p>
          </div>

          <form action="../BD/registro-usuarios-nuevo.php" method="POST">
            <div class="form-group">
              <label class="label-registro">Nombre</label>
              <input type="text" class="form-control mb-3" placeholder="Ingrese su nombre completo"
                name="nombre_registro">

              <label class="label-registro">Correo electrónico</label>
              <input type="email" class="form-control mb-3" placeholder="Ingrese su correo electrónico"
                name="correo_registro">


              <label class="label-registro">Contraseña</label>
              <input type="password" class="form-control mb-3" placeholder="Ingrese su contraseña"
                name="clave1_registro">

              <label class="label-registro">Confirmar contraseña</label>
              <input type="password" class="form-control mb-3" placeholder="Confirme su contraseña"
                name="clave2_registro">

              <div class="text-center">
                <p class="pt-3">
                  Al registarse, usted acepta nuestros <br>
                  <a href="#">términos y condiciones</a>
                </p>
                <button type="submit" class="btn btn-primary btn-lg"><b>REGISTRARME</b></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <?php include('vistas/footer.php'); ?>

     <!-- Scripts -->
     <?php include('vistas/scripts.php') ?>

</body>

</html>