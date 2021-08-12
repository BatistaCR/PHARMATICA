<center><div class="row">
    <div class="col"><br>
    	<h3>¿Desea Eliminar Este USUARIO?</h3>
    	<?php
    	 $id = $_GET['id'];
    	?>
    	<form action="./Model/EliminarUser.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <br>
          <input type="submit" name="si" value="SI" class="btn btn-primary" style="width: 7%; float: left; margin-right: 2%; margin-left: 42%;">
  
	</form>

    <button class="btn btn-danger" onclick="window.location.href='../Pharmatica_Dashboard/?ir=USERS'" style="width: 7%; float: left;"> NO</button>
    </div>
 </div> </center>