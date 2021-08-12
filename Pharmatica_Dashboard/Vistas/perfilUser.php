<style type="text/css">
  .hrf{
    text-decoration: none;
    font-family: sans-serif;
    font-size: 25px;
  }
</style>


    <?php 
    include('./conexion.php');

      if (isset($_SESSION['u_usuario'])) {
        $no = $_SESSION['u_usuario'];
       // echo $no;
      }else{   
      header("location:sesion.html");
      }
    ?>

<div class="col col-lg-8" style="margin-left: 10%;">

<?php 

$query = "SELECT * FROM useracceso WHERE nombre = '$no' ";
$sql = mysqli_query($conexion,$query);
while ($tg = mysqli_fetch_array($sql)) {
	echo "<a class='hrf' href='#' data-toggle='modal' data-target='#nombre' title='CAMBIAR NOMBRE DEL PERFIL' ><h3><b>".$tg['nombre']."</b></h3></a><br>";
  $NOMBRE = $tg['nombre'];
  $idUS = $tg['iduser'];
}
 ?>


 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#buscador">
   CAMBIAR CLAVE
  </button>
	
</div>

<!-- CAMBIO DE CLAVE -->
<div class="modal fade" id="buscador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CONTRASEÑA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="./Model/ActualizarClave.php" method="POST">
         
         <input type="hidden" name="NOMBRE" value="<?php echo $NOMBRE; ?>">
          
          <div class="form-group col-md-11">
              <label for="inputEmail4">CONTRASEÑA ACTUAL</label>
              <input type="password" class="form-control" id="inputEmail4" placeholder="Clave Actual" name="actual" required>
            </div>

            <div class="form-group col-md-11">
              <label for="inputEmail4">CONTRASEÑA NUEVA</label>
              <input type="password" class="form-control" id="inputEmail4" placeholder="Clave Nueva" name="clave1" required>
            </div>

            <div class="form-group col-md-11">
              <label for="inputEmail4">CONFIRMAR CONTRASEÑA NUEVA</label>
              <input type="password" class="form-control" id="inputEmail4" placeholder="Confirmar Nueva Clave" name="clave2" required>
            </div>
         
         <button type="submit" class="btn btn-primary" name="update">ACTUALIZAR CLAVE</button>
         </form>  
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        
      </div>
    </div>
  </div>
</div>

<!-- CAMBIO DE NOMBRE DE PERFIL -->
<div class="modal fade" id="nombre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR NOMBRE DE USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="./Model/ActualizarNombre.php" method="POST">
         
         <input type="hidden" name="id" value="<?php echo $idUS; ?>">
          
          <div class="form-group col-md-11">
              <label for="inputEmail4">NUEVO NOMBRE</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="NOMBRE ACTUALIZADO" name="nombreNuevo" required>
            </div>
         
         <button type="submit" class="btn btn-success" name="update">ACTUALIZAR NOMBRE</button>
         </form>  
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        
      </div>
    </div>
  </div>
</div>

