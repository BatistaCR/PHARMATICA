<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
     //  echo "SIN REGISTRO";
      header("location:../../PHARMATICA/sesion.php");
      }
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/pc_style.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/category.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/productos.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/detalle.css">
    <link rel="stylesheet" href="./css/simple-sidebar.css" >
    


    <title>PHARMATICA</title>

  <style type="text/css">
    .hd{
      font-size: 22px;

    }
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper" style="background-color: #000000;">
      <center><div class="sidebar-heading"><img src="../img/logo.png" width="175px" height="175px" style="border: solid 5px #fff; border-radius: 50%;"></div></center>
      <div class="list-group list-group-flush">

       <style type="text/css">
         #link_a:hover{
           background-color: #fff;
         }
       </style>
       <a href="#" id="link_a" class="list-group-item list-group-item-action" style="background-color: #000000;"></a>

     

        <a href="?ir=Wait" id="link_a" class="list-group-item list-group-item-action" style="background-color: #000000; color: #fff;">INICIO</a>
        <a href="?ir=RegistDiario" class="list-group-item list-group-item-action" style="background-color: #000000;  color: #fff;">ORDENES</a>
        <a href="?ir=Clientes_General" class="list-group-item list-group-item-action" style="background-color: #000000;  color: #fff;">CLIENTES</a>
        <a href="?ir=PRODUCTOS" class="list-group-item list-group-item-action" style="background-color: #000000;  color: #fff;">PRODUCTOS</a>
        <a href="?ir=Mensajeria" class="list-group-item list-group-item-action" style="background-color: #000000;  color: #fff;">MENSAJERIA</a>
        <a href="?ir=CATEGORIAS" class="list-group-item list-group-item-action" style="background-color: #000000;  color: #fff;">CATEGORIAS</a>
       <!-- <a href="?ir=Regs" class="list-group-item list-group-item-action bg-light">Registro Nuevo</a>-->

       <!-------  INVENTARIO MENU 

                    <a href="#inventariomenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light"> INVENTARIO </a>
                    <ul class="collapse list-unstyled" id="inventariomenu">
                        <li>
                            <a href="?ir=Inv" class="list-group-item list-group-item-action bg-light">
                              <h5 style="margin-left: 15%; font-size: 15px;">
        <img src="./IMG/indicador.png" width="13px" height="13px"> INVENTARIO MODEM </h5></a>
                        </li>
                        <li>
                            <a href="?ir=InvGpon" class="list-group-item list-group-item-action bg-light">
                              <h5 style="margin-left: 15%; font-size: 15px;">
        <img src="./IMG/indicador.png" width="13px" height="13px"> INVENTARIO ONU </h5></a>
                        </li>
                       
                    </ul>-->

         <!-------  TARIFAS 
 
         <a href="#tarifas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light"> TARIFAS </a>
                    <ul class="collapse list-unstyled" id="tarifas">
                      <li>
                            <a href="?ir=Rate" class="list-group-item list-group-item-action bg-light">
                              <h5 style="margin-left: 15%; font-size: 15px;">
                               <img src="./IMG/indicador.png" width="13px" height="13px">  Tarifas Registradas</h5></a>
                        </li>
                        <li>
                            <a href="?ir=RegTarifa" class="list-group-item list-group-item-action bg-light">
                              <h5 style="margin-left: 15%; font-size: 15px;">
                                <img src="./IMG/indicador.png" width="13px" height="13px">  Agregar Tarifa</h5></a>
                        </li>
                    </ul>    -->
                    
      </div>
    </div>
    
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button type="button" class="btn btn-danger" id="menu-toggle"><i class="bi bi-arrow-left-right"></i></button>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><h5><?php echo $no; ?></h5><span class="sr-only"></span></a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>-->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">ADMINISTRACION</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?ir=Profile">Perfil</a></li>
                <li><a class="dropdown-item" href="?ir=USERS">Usuarios</a></li>
                <li><a class="dropdown-item" href="?ir=RegUser">Registrar Usuario</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="Control/unset.php">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      <br>
      
      <div class="container">
        <div class="row">

            <?php
            /*require_once*/
          include_once('./Control./Controlador.php');
          new control();
            ?>

        </div>
      </div>
    </div>
  </div>
    <script src="vendor/jquery/jquery.min.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


</body>
</html>
