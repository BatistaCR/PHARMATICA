<style type="text/css">
  .ida{
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    color: black;
}
.ida:hover{
    text-decoration: overline;
    }
    .paginador{
      margin-top: 350px;

    }
    a{
    	color: black;
    }
    #tabla_g{
      width: 65%;
      float: left;
    }
    #div_f{
      float: left;
      margin-right: 0px;
    }
</style>


<?php 
include("./conexion.php");

  if(isset($_GET['editar'])) { 
   $id = $_GET['editar'];
    $editar = "SELECT * FROM  t_inventario_general_web WHERE  id_prod_inv = '$id'";
    $eje = mysqli_query($conexion,$editar);

    while ($e = mysqli_fetch_array($eje)) { ?>

<div class="container">
<div class="col-4" id="div_f">
<form action="./Model/actualizar_prod_general.php" method="POST"  enctype="multipart/form-data">

<!--<div class="form-group">
    <label for="exampleFormControlFile1">IMAGEN</label>
    <input type="file" name="img_prod[]" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>-->
<input type="hidden" name="id_prod" value="<?php echo $e['id_prod_inv']; ?>">

<input type="hidden" name="img1" value="<?php echo $e['img_producto']; ?>">
<input type="hidden" name="img2" value="<?php echo $e['img_producto2']; ?>">
<input type="hidden" name="img3" value="<?php echo $e['img_producto3']; ?>">

<div class="form-group">
      <label for="exampleInputPassword1">CODIGO</label>
    <input name="c_prod" type="text" class="form-control"
       id="exampleInputPassword1" value="<?php echo $e['codigo_producto'];  ?>">
  </div>

  <div class="form-group">
      <label for="exampleInputPassword1">NOMBRE DEL PRODUCTO</label>
    <input name="n_prod" type="text" class="form-control"
       id="exampleInputPassword1" value="<?php echo $e['nombre_prod_inv'];  ?>">
  </div>


<div class="form-group">
      <label for="boton" id="lb_unidad">PRECIO POR UNIDAD</label>
    <input name="uni_prod" type="number" class="form-control"
       id="unidad"  value="<?php echo $e['precio_unidad'];  ?>">
  </div>

  <div class="form-group">
      <label for="boton" id="lb_unidad">CANTIDAD POR UNIDAD</label>
    <input name="c_unidad" type="number" class="form-control"
       id="unidad"  value="<?php echo $e['cantidad_prod_unidades'];  ?>">
  </div>

 <div class="form-group">
      <label for="boton" id="lb_caja">PRECIO POR CAJA</label>
    <input name="caj_prod" type="number" class="form-control"
       id="caja"  value="<?php echo $e['precio_caja'];  ?>">
  </div> 

  <div class="form-group">
      <label for="boton" id="lb_unidad">CANTIDAD POR CAJA</label>
    <input name="c_caja" type="number" class="form-control"
       id="unidad"  value="<?php echo $e['cantidad_prod_cajas'];  ?>">
  </div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">DETALLES</label>
    <textarea name="deta_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $e['detalle_prod'];  ?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">INGREDIENTES</label>
    <textarea name="ing_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $e['ingrediente_prod'];  ?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">CONTRAINDICACIONES</label>
    <textarea name="contra_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $e['contraindicaciones_prod']; ?></textarea>
  </div>

<input class="inputFile" type="file" style="display: none;">
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
</script>

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
<input type="submit" name="" class="btn btn-success" value="ACTUALIZAR"><br><br>
        </form>

</div>
     



<?php   
/*@derechos reservados*/
  }else{
?>



<div class="col-4" id="div_f">
<form action="./Model/insertar_prod_general.php" method="POST"  enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleFormControlFile1">IMAGEN</label>
    <input type="file" name="img_prod[]" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>


<div class="form-group">
      <label for="exampleInputPassword1">CODIGO</label>
    <input name="c_prod" type="text" class="form-control"
       id="exampleInputPassword1" placeholder="CODIGO DEL PRODUCTO">
  </div>

  <div class="form-group">
      <label for="exampleInputPassword1">NOMBRE DEL PRODUCTO</label>
    <input name="n_prod" type="text" class="form-control"
       id="exampleInputPassword1" placeholder="NOMBRE DEL PRODUCTO">
  </div>

<script type="text/javascript">
function comprobar2(obj)
  {   
      if (obj.checked){
        
  document.getElementById('caja').style.display = "";
  document.getElementById('lb_caja').style.display = "";
  document.getElementById('C_caja').style.display = "";
  //document.getElementById('cantidad_unidad').style.display = "";
     } else{
        
  document.getElementById('caja').style.display = "none";
  document.getElementById('lb_caja').style.display = "none";
  document.getElementById('C_caja').style.display = "none";
  //document.getElementById('cantidad_unidad').style.display = "none";
     }     
}

function comprobar1(obj)
  {   
      if (obj.checked){
        
  document.getElementById('unidad').style.display = "";
  document.getElementById('lb_unidad').style.display = "";
  document.getElementById('C_unidad').style.display = "";
 // document.getElementById('cantidad_caja').style.display = "";
     } else{
        
  document.getElementById('unidad').style.display = "none";
  document.getElementById('lb_unidad').style.display = "none";
  document.getElementById('C_unidad').style.display = "none";
  //document.getElementById('cantidad_unidad').style.display = "none";
     }     
}
</script>


<label>PRESENTACION</label><br>
<input  type="checkbox" id="chec" onChange="comprobar1(this);"/>
    <label for="chec">UNIDAD</label>

<input type="checkbox" id="chec2" onChange="comprobar2(this);" 
style="margin-left: 30px;" />
    <label for="chec2">CAJA</label>


<div class="form-group">
      <label for="boton" id="lb_unidad" style="display:none">PRECIO POR UNIDAD</label>
    <input name="uni_prod" type="number" class="form-control"
       id="unidad" style="display:none" placeholder="PRECIO UNIDAD">
  </div>
<div class="form-group" id="C_unidad" style="display:none">
      <label for="cantidad_U">CANTIDAD DE UNIDADES</label>
    <input name="cantidad_unidad" type="text" class="form-control"
       id="cantidad_unidad" placeholder="CANTIDAD DE UNIDADES">
</div>


<div class="form-group">
      <label style="display:none" for="boton" id="lb_caja">PRECIO POR CAJA</label>
    <input name="caj_prod" type="number" class="form-control"
       id="caja" placeholder="PRECIO CAJA" style="display:none">
</div> 
<div class="form-group" id="C_caja" style="display:none">
      <label for="cantidad_C">CANTIDAD DE CAJAS</label>
    <input name="cantidad_caja" type="number" class="form-control"
       id="cantidad_caja" placeholder="CANTIDAD DE CAJAS">
</div>



<div class="form-group">
    <label for="exampleFormControlTextarea1">DETALLES</label>
    <textarea name="deta_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">INGREDIENTES</label>
    <textarea name="ing_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">CONTRAINDICACIONES</label>
    <textarea name="contra_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>



<input type="submit" name="" class="btn btn-success">
        </form>

</div>
     


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

         <table class='table table-bordered table-dark border-primary table-hover' id='tabla_g'>
         <thead class='thead-dark'>
         <tr>
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

  <td><b><a class="lk" href="../Pharmatica_Dashboard/?ir=PRODUCTOS&editar=<?php echo
   $f['id_prod_inv']?>" title="Mover">EDITAR</a></b></td>
  <td><b><a class="lk" href="../Pharmatica_Dashboard/?ir=DeleteProductos&id=<?php echo 
  $f['id_prod_inv']?>">ELIMINAR</a></b></td>
  
  <?php
  echo "</tr>";
}
echo "</table>";

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
</div>


