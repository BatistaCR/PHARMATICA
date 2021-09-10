<div class="container-fluid my-5">
  <div class="row d-flex justify-content-center text-center align-items-center">
    <div class="text-center mb-3">
    <h2 class="titulo-registro">NUESTROS PRODUCTOS</h2>
    <p class="fs-4">Encuentra todo lo que necesitas</p>
  </div>

      <div class="gallery js-flickity my-3" id="gallery" 
        data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>

<?php 
include('./BD/conexion2.php');
$select = "SELECT * FROM t_categoria_productos";
$exe_s = mysqli_query($conexion2,$select);

while($ff = mysqli_fetch_array($exe_s)){
?>

        <div class="gallery-cell">
          <a href="#" class="category-text">
  <img class="category-img mb-2" src="img/categorias/<?php echo $ff['img_categoria']; ?>">
<a href="../PHARMATICA/Categoria.php?categoria_id=<?php echo $ff['id_categoria']; ?>">
            <p>
              <strong>
                <?php echo $ff['nombre_categoria']; ?>
              </strong>
            </p>
          </a>
        </div>

<?php } ?>
      </div>
    </div>
</div>