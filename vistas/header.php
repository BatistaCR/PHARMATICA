<?php
include("./BD/conexion2.php");
header("Cache-Control: no-cache, must-revalidate"); 
    // session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];

     
$consul = "SELECT tipo_usuario FROM t_usuarios_general WHERE  nombre_user_general  = '$no'  ";

$exe = mysqli_query($conexion2,$consul);

while($t = mysqli_fetch_array($exe)){ 
  $nivel = $t['tipo_usuario'];
}
      }else{   
     //   echo "SIN REGISTRO";
     /* header("location:../../PHARMATICAS/PHARMATICAS/sesion.php");*/
      }
 ?>

<nav class="navbar navbar-expand-xl navbar-dark">
    <div class="container">  
      <a class="navbar-brand" href="index">
        <img class="logo me-3" src="img/logo.png" width="60" height="60" class="d-inline-block" alt="">PHARMATICA
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">   
            <form class="d-flex p-2 align-items-center" action="busqueda" method="POST">
                  <input class="form-control me-2 " type="search" placeholder="Búsqueda" aria-label="Búsqueda" name="busqueda">
                  <input type="submit" name="" style="display: none;">
                  <button class="search-icon" href="busqueda"><img src="img/search-icon.svg" width="30" height="30" class="d-inline-block align-center" alt=""></button>
              </form>
              
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorías
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Categoría 1</a></li>
                      <li><a class="dropdown-item" href="#">Categoría 2</a></li>
                      <li><a class="dropdown-item" href="#">Categoría 3</a></li>
                    </ul>
                    </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="conocenos">Conócenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto">Contáctanos</a>
              </li>
            </ul>
            <?php 
            if (isset($no)) { ?>

           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?php echo "<b id='nombre_sesion'>".$no."</b>"; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php 
                       if ($nivel == 1) {
                       ?>
                       <li><a class="dropdown-item" href="Pharmatica_Dashboard/" target="_blank">Panel Admin</a></li>
                     <?php } ?>
                     <li><a class="dropdown-item" href="./orden.php">Mis Ordenes</a></li>
                     <li><a class="dropdown-item" href="Pharmatica_Dashboard/" target="_blank">Favoritos</a></li>
                      <li><a class="dropdown-item" href="#">Perfil</a></li>
                      <li><a class="dropdown-item" href="BD/exit.php">Cerrar Sesion</a></li>
                     
                    </ul>
                    </li>
            </ul>
       
           <?php }else{
             ?>
              <a href="sesion" id="link_registro">
              <button class="btn-grad" type="submit"><b>Ingresar</b></button>
              </a>
              <?php } ?>
        </div>
    </div>
  </nav>