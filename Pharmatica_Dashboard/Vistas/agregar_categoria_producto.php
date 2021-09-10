<div class="col-12 ta-center" id="div_f">
<form class="login-div pf-02" action="./Model/insert_categoria_general.php" method="POST"  enctype="multipart/form-data">


  <div class="form-floating mb-3">
  <input name="titulo_cat" type="text" class="form-control" id="floatingInput" placeholder="TITULO CATEGORIA">
  <label for="floatingInput"><b>Titulo Categoria</b></label>
</div>


<div class="form-floating mb-3">
  <textarea name="detalle_cat" class="form-control" placeholder="Detalles" id="floatingTextarea2" style="height: 150px"></textarea>
  <label for="floatingTextarea2"><b>DETALLES</b></label>
</div>


<div class="mb-3">
  <label for="formFileMultiple" class="form-label">
    <b>IMAGEN PRINCIPAL</b>
  </label>
  <input class="form-control form-control-lg" type="file" name="img_principal"
   id="formFileMultiple">
</div>


<!--BOTON INGRESAR-->
  <button class="btn btn-success btn-lg mr-02" type="submit" name="">INGRESAR</button>
  <button class="btn btn-danger btn-lg ml-02" type="clear" name="">BORRAR</button>
        </form>

</div>
