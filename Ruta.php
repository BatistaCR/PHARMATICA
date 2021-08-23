<!DOCTYPE html>
<html lang="es">
<!-- Head -->
<?php include('vistas/head.php') ?>

<body>
  <!-- Header -->
  <?php include('vistas/header.php') ?>

  <!-- Categorías -->
  <?php include('vistas/category.php'); ?>


<center><div class="row">
    <div class="col"><br>
    	<h3>¿Desea Seguir COMPRANDO?</h3>
    
    	<form action="index.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <br>
          <input type="submit" name="si" value="SI" class="btn btn-primary" style="width: 7%; float: left; margin-right: 2%; margin-left: 42%;">
  
	</form>

    <button class="btn btn-danger" onclick="window.location.href='orden.php'" style="width: 7%; float: left;"> NO</button>
    </div>
 </div> </center><br><br>



  <!-- Footer -->
  <?php include('vistas/footer.php') ?>

  <!-- Scripts -->
  <?php include('vistas/scripts.php') ?>

    <!-- Script contador -->

</body>

</html>