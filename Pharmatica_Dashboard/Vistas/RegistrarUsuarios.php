<div class="col col-lg-8" style="margin-left: 10%;">

<form action="./Model/InsertUser.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Nombre De Usuario" name="nombre_registro" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Correo Del Usuario" name="correo_registro" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" aria-describedby="clave" name="clave1_registro" required>
    <small id="clave" class="form-text text-muted">Max 8 caracteres</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña"
     name="clave2_registro" required>
  </div>
  
  <button type="reset" class="btn btn-warning">LIMPIAR</button>
  <button type="submit" class="btn btn-primary">REGISTRAR</button>
</form>
</div>