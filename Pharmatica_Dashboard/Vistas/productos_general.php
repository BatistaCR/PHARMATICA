
<!-------------------------CONEXION BD-------------------------------->
<?php 
include("./conexion.php");

  if(isset($_GET['editar'])) { 
   $id = $_GET['editar'];
    $editar = "SELECT * FROM  t_inventario_general_web WHERE  id_prod_inv = '$id'";
    $eje = mysqli_query($conexion,$editar);

    while ($e = mysqli_fetch_array($eje)) { ?>



<div class="container">
  <div class="row">


    <!-------------------------INICIO ACTUALIZAR PRODUCTO-------------------------------->
    <div class="ta-center mb-03">
        <h4 class="titulo-registro mb-3">PRODUCTOS</h4>
        <p>
          Ingrese los nuevos datos del producto 
        </p>
    </div>
      <div class="col-6 ta-center" id="div_f">
<form class="login-div pf-02" action="./Model/actualizar_prod_general.php" method="POST"  enctype="multipart/form-data">

<!--<div class="form-group mb-03">
    <label for="exampleFormControlFile1">IMAGEN</label>
    <input type="file" name="img_prod[]" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>-->
  
<input type="hidden" name="id_prod" value="<?php echo $e['id_prod_inv']; ?>">

<input type="hidden" name="img1" value="<?php echo $e['img_producto']; ?>">
<input type="hidden" name="img2" value="<?php echo $e['img_producto2']; ?>">
<input type="hidden" name="img3" value="<?php echo $e['img_producto3']; ?>">

<div class="form-group mb-03">
      <label for="exampleInputPassword1"><b>CODIGO</b></label>
    <input name="c_prod" type="text" class="form-control"
       id="exampleInputPassword1" value="<?php echo $e['codigo_producto'];  ?>">
  </div>

  <div class="form-group mb-03">
      <label for="exampleInputPassword1"><b>NOMBRE DEL PRODUCTO</b></label>
    <input name="n_prod" type="text" class="form-control"
       id="exampleInputPassword1" value="<?php echo $e['nombre_prod_inv'];  ?>">
  </div>

<label for="boton" id="lb_unidad"><b>UNIDAD</b></label>
<div class="fd-row jc-between">
<div class="form-group mb-03 col-6 pr-01">
      <label for="boton" id="lb_unidad">PRECIO</label>
    <input name="uni_prod" type="number" class="form-control"
       id="unidad"  value="<?php echo $e['precio_unidad'];  ?>">
  </div>

  <div class="form-group mb-03 col-6 pl-01">
      <label for="boton" id="lb_unidad">CANTIDAD</label>
    <input name="c_unidad" type="number" class="form-control"
       id="unidad"  value="<?php echo $e['cantidad_prod_unidades'];  ?>">
  </div>
  </div>
  
  <label for="boton" id="lb_unidad"><b>CAJA</b></label>
  <div class="fd-row jc-between">
 <div class="form-group mb-03 col-6 pr-01">
      <label for="boton" id="lb_caja">PRECIO POR CAJA</label>
    <input name="caj_prod" type="number" class="form-control"
       id="caja"  value="<?php echo $e['precio_caja'];  ?>">
  </div> 

  <div class="form-group mb-03 col-6 pl-01">
      <label for="boton" id="lb_unidad">CANTIDAD POR CAJA</label>
    <input name="c_caja" type="number" class="form-control"
       id="unidad"  value="<?php echo $e['cantidad_prod_cajas'];  ?>">
  </div>
  </div>

<div class="form-group mb-03">
    <label for="exampleFormControlTextarea1"><b>DETALLES</b></label>
    <textarea name="deta_prod" class="form-control" id="exampleFormControlTextarea1" style="height: 150px"><?php echo $e['detalle_prod'];  ?></textarea>
  </div>

  <div class="form-group mb-03">
    <label for="exampleFormControlTextarea1"><b>INGREDIENTES</b></label>
    <textarea name="ing_prod" class="form-control" id="exampleFormControlTextarea1" style="height: 150px"><?php echo $e['ingrediente_prod'];  ?></textarea>
  </div>

  <div class="form-group mb-03">
    <label for="exampleFormControlTextarea1"><b>CONTRAINDICACIONES</b></label>
    <textarea name="contra_prod" class="form-control" id="exampleFormControlTextarea1" style="height: 150px"><?php echo $e['contraindicaciones_prod']; ?></textarea>
  </div>

  <label for="exampleInputPassword1"><b>IMAGENES</b></label>

<input class="inputFile" type="file" style="display: none;">

                    <!--SCRIPT ACTUALIZAR SIN USO
                    <script type="text/javascript">

                    /*function editarIMG1()
                      {  
                    var x = document.getElementById("upd_img1");
                    var lb1 = document.getElementById("label1");
                        if (x.style.display === "none") {
                          
                          x.style.display = "";
                          lb1.style.display = "";
                        }else{
                          x.style.display = "none";
                          lb1.style.display = "none";
                        }    
                    }*/
                    </script>-->


<div style="width:100%">
  <div style="background-color: ; width:30%; float: left ;">
   <label> 
    <img src="IMG/IMG_PRODUCTOS/<?php echo $e['img_producto']; ?>" width="120px" height="120px" title="Click para actualizar">
    <input name="img_prod1" type="file" style="display:none;">
   </label>
  </div>

  <div style="background-color: ; width:30%; float: left; margin-left: 15px;">
    <label>
    <img src="IMG/IMG_PRODUCTOS/<?php echo $e['img_producto2']; ?>" width="120px" height="120px" title="Click para actualizar" >
    <input type="file" name="img_prod2" id="upd_img2" style="display:none;">
    </label>
  </div>

  <div style="background-color: ; width:30%; float: left;margin-left: 15px;">
    <label>
      
    <img src="IMG/IMG_PRODUCTOS/<?php echo $e['img_producto3'];} ?>" width="120px" height="120px" title="Click para actualizar">
    <input type="file" name="img_prod3" id="upd_img3" style="display:none;">
    </label>
  </div>

</div>


<br><br><br><br><br><br>
<input type="submit" name="" class="btn btn-primary btn-lg mr-02" value="ACTUALIZAR">
<input type="submit" name="" class="btn btn-danger btn-lg ml-02" value="CANCELAR"><br><br>
        </form>

</div>
     
    <!-------------------------FINAL ACTUALIZAR PRODUCTO-------------------------------->


<?php
  }else{
?>  
    <!-------------------------INICIO INGRESAR PRODUCTO-------------------------------->
    <div class="text-center mb-03">
        <h4 class="titulo-registro mb-3">PRODUCTOS</h4>
        <p>
          Ingrese los datos para el producto
        </p>
      </div>
<div class="col-6 ta-center" id="div_f">
<form class="login-div pf-02" action="./Model/insertar_prod_general.php" method="POST"  enctype="multipart/form-data">

  <div class="mb-3">
  <label for="formFileMultiple" class="form-label"><b>SELECCIONE 3 IMAGENES</b></label>
  <input class="form-control form-control-lg" type="file" name="img_prod[]" id="formFileMultiple" multiple>
</div>

  <div class="form-floating mb-3">
  <input name="c_prod" type="text" class="form-control" id="floatingInput" placeholder="CODIGO">
  <label for="floatingInput"><b>CODIGO</b></label>
</div>


  <div class="form-floating mb-3">
  <input name="n_prod" type="text" class="form-control" id="floatingInput" placeholder="NOMBRE">
  <label for="floatingInput"><b>NOMBRE</b></label>
</div>

<script type="text/javascript">
function comprobar2(obj)
  {   
      if (obj.checked){
        
  document.getElementById('caja').style.display = "";
     } else{
        
  document.getElementById('caja').style.display = "none";
     }     
}

function comprobar1(obj)
  {   
      if (obj.checked){
        
  document.getElementById('unidad').style.display = "";
     } else{
        
  document.getElementById('unidad').style.display = "none";
     }     
}
</script>

<!--CHECKBOXS-->
<div class="form-check form-check-inline mb-03">
  <label class="form-check-label" for="chec"><b>PRESENTACION:</b></label>
  </div>

<div class="form-check form-check-inline mb-03">
  <input class="form-check-input" type="checkbox" value="option1" id="chec" onChange="comprobar1(this);">
  <label class="form-check-label" for="chec">UNIDAD</label>
  </div>

  <div class="form-check form-check-inline mb-03">
  <input class="form-check-input" type="checkbox" value="option2" id="chec2" onChange="comprobar2(this);">
  <label class="form-check-label" for="chec2">CAJA</label>
</div>

<!--INPUTS UNIDADES-->
<div class="fd-row jc-between" id="unidad" style="display:none">
  <div class="form-floating mb-3 col-6 pr-01">
    <input name="uni_prod" type="number" class="form-control" placeholder="PRECIO UNIDAD">
    <label for="precio_unidad">PRECIO UNIDAD</label>
  </div>

  <div class="form-floating mb-3 col-6 pl-01">
    <input name="cantidad_unidad" type="text" class="form-control" placeholder="CANTIDAD UNIDADES">
    <label for="cantidad_unidad">CANTIDAD UNIDAD</label> 
  </div>
</div>


<!--INPUTS CAJAS-->
<div class="fd-row jc-between" id="caja" style="display:none">
  <div class="form-floating mb-3 col-6 pr-01">
    <input name="caj_prod" type="number" class="form-control" id="caja" placeholder="PRECIO CAJA">
    <label for="boton" id="lb_caja">PRECIO CAJA</label>
  </div>

  <div class="form-floating mb-3 col-6 pl-01">
    <input name="cantidad_caja" type="number" class="form-control" id="caja" placeholder="CANTIDAD CAJA">
    <label for="boton" id="lb_caja">CANTIDAD CAJA</label>
  </div>
</div>

<!--INPUTS TEXTO-->

  <div class="form-floating mb-3">
  <textarea name="deta_prod" class="form-control" placeholder="Detalles" id="floatingTextarea2" style="height: 150px"></textarea>
  <label for="floatingTextarea2"><b>DETALLES</b></label>
  </div>

  <div class="form-floating mb-3">
  <textarea name="ing_prod" class="form-control" placeholder="Ingredientes" id="floatingTextarea2" style="height: 150px"></textarea>
  <label for="floatingTextarea2"><b>INGREDIENTES</b></label>
  </div>


  <div class="form-floating mb-3">
  <textarea name="contra_prod" class="form-control" placeholder="Contraindicaciones" id="floatingTextarea2" style="height: 150px"></textarea>
  <label for="floatingTextarea2"><b>CONTRAINDICACIONES</b></label>
  </div>

<!--BOTON INGRESAR-->
  <button class="btn btn-success btn-lg mr-02 " type="submit" name="">INGRESAR</button>
  <button class="btn btn-danger btn-lg ml-02" type="clear" name="">BORRAR</button>
        </form>

</div>
     
<!-------------------------FINAL INGRESAR PRODUCTO-------------------------------->

<?php 

}



//include("./conexion.php");
$por_pagina = 25;
            if (isset($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
            }else{
                $pagina= 1;
            }
     $empieza = ($pagina-1) * $por_pagina;

$query = "SELECT * FROM t_inventario_general_web ORDER BY id_prod_inv  DESC
 LIMIT $empieza , $por_pagina";

$sql = mysqli_query($conexion, $query);

echo "  
         <div class='table-responsive col-6 ta-center'>
         <table class='table table-borderless table-info table-hover' id='tabla_g'>
         <thead class='thead ta-center'>
         <tr class='table-info table-active'>
         <th scope='col'>CODIGO</th>
         <th scope='col'>NOMBRE</th>
         <th scope='col'>PRECIO</th>
         <th scope='col'>EDITAR</th>
         <th scope='col'>ELIMINAR</th>
       </tr>
       </thead>";
while ($f = mysqli_fetch_array($sql)) {

    echo "<tr>";
    echo "<td>".$f['codigo_producto']."</td>";
    echo "<td>".$f['nombre_prod_inv']."</td>";
    echo "<td>".$f['precio_unidad']."</td>";
  ?>

  <td><b><a class="btn btn-primary bi bi-pencil-fill" href="../Pharmatica_Dashboard/?ir=PRODUCTOS&editar=<?php echo
   $f['id_prod_inv']?>" role="button"></a></b></td>
  <td><b><a class="btn btn-danger bi bi-x-lg" href="../Pharmatica_Dashboard/?ir=DeleteProductos&id=<?php echo 
  $f['id_prod_inv']?>" role="button"></a></b></td>
  
  <?php
  echo "</tr>";
}
echo "</table>";
echo "</div>";
?>



<div class="paginador">
      
      <?php 
        $query11 = "SELECT * FROM t_inventario_general_web LIMIT 500";
        $resultado11 = mysqli_query($conexion,$query11);
        $total_registros = mysqli_num_rows($resultado11);

        $total_paginas = ceil($total_registros / $por_pagina);
       
       echo "<center><a href= '../Pharmatica_Dashboard/?ir=PRODUCTOS&pagina=1'> "/*."Primera"*/."</a>";

       for ($i=1; $i <=$total_paginas ; $i++) { 
           echo "<a href= '../Pharmatica_Dashboard/?ir=PRODUCTOS&pagina=".$i."' class ='ida'> ".$i."</a>";      
            }
echo "<a href= '../Pharmatica_Dashboard/?ir=PRODUCTOS&pagina==$total_paginas' > "/*."Ultima"*/."</a></center>";
       ?>
</div>


</div> <!--container-->
</div><!--row-->
