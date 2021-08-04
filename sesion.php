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
            <h4 class="titulo-registro mb-3">INGRESO</h4>
            <p>
              ¿aún no tienes una cuenta? <a href="registro.php">registrarme</a>
            </p>
          </div>

          <form action="../BD/registro-usuarios-nuevo.php" method="POST">
            <div class="form-group">

              <label class="label-registro">Correo electrónico</label>
              <input type="email" class="form-control mb-3" placeholder="Ingrese su correo electrónico"
                name="correo_registro">

              <label class="label-registro">Contraseña</label>
              <input type="password" class="form-control mb-3" placeholder="Ingrese su contraseña"
                name="clave1_registro">

              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg"><b>INGRESAR</b></button>
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