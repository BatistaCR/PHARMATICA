<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
       // echo "SIN REGISTRO";
      //header("location:../sesion.php");
      }
 ?>
<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('vistas/head.php') ?>

<body>
  <!-- Header -->
  <?php include('vistas/header.php') ?>


  <div class="container p-5">
    <div class="row align-items-center justify-content-center">
      <div class=" col-md-5 m-3">
        <img src="img/logo.png" class="rounded mx-auto d-block" width="200" height="200">
      </div>
      <div class="col-md-5 m-3">
        <figure class="text-center m-3">
          <h4 class="titulo-registro mb-3">¿QUIENES SOMOS?</h4>
          <blockquote class="blockquote">
            <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus exercitationem, non
              animi ipsa repellat aliquid! Culpa ducimus numquam eveniet voluptatibus sunt quia architecto aliquam, ea
              facilis laborum quis ipsa. Sint.</p>
          </blockquote>
        </figure>
      </div>
      <div class=" col-md-5 m-3 ">
        <figure class="text-center m-3">
          <h4 class="titulo-registro mb-3" style="background-color: blue">NUESTRA MISIÓN</h4>
          <blockquote class="blockquote">
            <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus exercitationem, non
              animi ipsa repellat aliquid! Culpa ducimus numquam eveniet voluptatibus sunt quia architecto aliquam, ea
              facilis laborum quis ipsa. Sint.</p>
          </blockquote>
        </figure>
      </div>
      <div class="col-md-5 m-3">
        <figure class="text-center m-3">
          <h4 class="titulo-registro mb-3" style="background-color: red">NUESTRA VISIÓN</h4>
          <blockquote class="blockquote">
            <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus exercitationem, non
              animi ipsa repellat aliquid! Culpa ducimus numquam eveniet voluptatibus sunt quia architecto aliquam, ea
              facilis laborum quis ipsa. Sint.</p>
          </blockquote>
        </figure>
      </div>
    </div>
  </div>

  <div id="mapid" style="height: 400px;"></div>


  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>
</body>

</html>