<?php
header("Cache-Control: no-cache, must-revalidate"); 
     session_start();
      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
     // echo "CON REGISTRO".$no;
      }else{   
       // echo "SIN REGISTRO";
      header("location:../../PHARMATICA/sesion.php");
      }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registro Interno Cc</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/simple-sidebar.css" rel="stylesheet">

  <style type="text/css">
    .hd{
      font-size: 22px;

    }
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" >
      <div class="sidebar-heading">ADMINISTRADOR</div>
      <div class="list-group list-group-flush">


       <a href="#" class="list-group-item list-group-item-action bg-light"></a>

     

        <a href="?ir=Wait" class="list-group-item list-group-item-action bg-light">INICIO</a>
        <a href="?ir=RegistDiario" class="list-group-item list-group-item-action bg-light">ORDENES</a>
        <a href="?ir=List" class="list-group-item list-group-item-action bg-light">CLIENTES</a>
        <a href="?ir=Inv" class="list-group-item list-group-item-action bg-light">PRODUCTOS</a>
        <a href="?ir=Inv" class="list-group-item list-group-item-action bg-light">MENSAJERIA</a>
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

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-info" id="menu-toggle"> MENU </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ADMINISTRACION
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="?ir=Profile">Perfil</a>
                <a class="dropdown-item" href="?ir=USERS">Usuarios</a>
                <a class="dropdown-item" href="?ir=RegUser">Registrar Usuario</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Control/unset.php">Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <br>
      
      <div class="col col-lg-12">

        <?php
        /*require_once*/
      include_once('./Control./Controlador.php');
      new control();
        ?>

      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>
