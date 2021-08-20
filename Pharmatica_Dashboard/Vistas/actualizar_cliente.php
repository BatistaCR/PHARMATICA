
<label><h5><b>ACTUALIZAR CLIENTE REGULAR</b></h5></label>

<form action="./Model/actualizar_cliente_regular.php" method="POST"  
enctype="multipart/form-data">

<?php 
    include("./conexion.php");

    $idN = trim($_GET['id']);

    $query = "SELECT * FROM t_usuarios_general WHERE id_user_general = 
    '$idN'";
    $sql = mysqli_query($conexion,$query);

    while($sf = mysqli_fetch_array($sql)){
   
    ?>
  <div class="row">

     <input type="hidden" name="id_usuario_upt" value="<?php
      echo $sf['id_user_general']; ?>">
    <div class="col">
      <label for="fo">NOMBRE DEL USUARIO</label>
      <input id="fo" type="text" class="form-control" 
      value="<?php echo $sf['nombre_user_general']; ?>" name="nombre_upt" required>
    </div>
    <div class="col">
      <label for="fo1">IDENTIFICACIÓN</label>
      <input id="fo1" type="text" class="form-control" value="<?php
       echo $sf['numero_identificacion']; ?>" name="cedula_upt">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
      <label for="fo2">TELEFONO 1</label>
      <input id="fo2" type="text" class="form-control"  value="<?php
       echo $sf['telefono1']; ?>" name="telefono1_upt">
    </div>
    <div class="col">
      <label for="fo">TELEFONO 2</label>
      <input type="text" class="form-control" value="<?php
       echo $sf['telefono2']; ?>" name="telefono2_upt">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
      <label for="fo">CORREO ELECTRONICA</label>
      <input type="text" class="form-control" value="<?php
       echo $sf['email_general']; ?>" name="email_upt">
    </div>
    <div class="col">
      <label for="fo">FECHA DE REGISTRO</label>
      <input type="text" class="form-control" value="<?php
       echo $sf['fecha_registro_user']; }?>" name="fecha_upt" readonly>
    </div> 
  </div><br>
  <div class="row">
    <!--<div class="col">
      <label for="fo">FECHA Y HORA DE REGISTRO</label>
      <input type="text" class="form-control" placeholder="Fecha y hora del ingreso">
    </div>-->

   <div class="col">
   <!--<label for="fo">TIPO DE PRODUCTO</label>-->
   <?php
     /* include("./conexion.php");
      $pre = "SELECT * FROM t_tipo_productos";
      $resultado= mysqli_query($conexion,$pre);
    ?>
   <select class="custom-select" id="inputGroupSelect01"
    name="tipoProd">
    <?php    
      while ( $row = mysqli_fetch_array($resultado)){
     ?>
    <option value=" <?php echo $row['id_tipo_prod']; ?> "><?php echo $row['nombre_tipo_prod']; ?></option>
   <?php } */?> 
  </select>
    </div>

    <div class="col">
     <!-- <label for="fo">PROVEEDOR</label>-->
      <?php
     /* $pre2 = "SELECT * FROM t_proveedores";
      $resultado2= mysqli_query($conexion,$pre2);
    ?>
  <select class="custom-select" id="inputGroupSelect01"
  name="proveedorProd">
      <?php    
      while ( $row2 = mysqli_fetch_array($resultado2)){
     ?>
    <option value=" <?php 
    echo $row2['id_provedor']; ?> ">
      <?php echo $row2['nombre_prov']; ?>
    </option>
  <?php } */?>
  </select>
    </div>
  </div><br>


<div class="row">

   <div class="col">
   
    </div>

    <div class="col"></div>
</div><br>
  

  <br>  
  <button type="submit" class="btn btn-primary">ACTUALIZAR CLIENTE</button>
</form> 