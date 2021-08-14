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
      background-color: red;
      margin-right: 20px;
    }
</style>


<?php 
include("./conexion.php");

  if(isset($_GET['editar'])) { 
   $id = $_GET['editar'];
    $editar = "SELECT * FROM  t_inventario_general_web WHERE  id_prod_inv = '$id'";
    $eje = mysqli_query($conexion,$editar);

    while ($e = mysqli_fetch_array($eje)) { ?>


<div class="col-4" id="div_f">
<form action="./Model/actualizar_prod_general.php" method="POST"  enctype="multipart/form-data">

<!--<div class="form-group">
    <label for="exampleFormControlFile1">IMAGEN</label>
    <input type="file" name="img_prod[]" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>-->
<input type="hidden" name="id_prod" value="<?php echo $e['id_prod_inv']; ?>">

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
      <label for="boton" id="lb_caja">PRECIO POR CAJA</label>
    <input name="caj_prod" type="number" class="form-control"
       id="caja"  value="<?php echo $e['precio_caja'];  ?>">
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


<script type="text/javascript">

function editarIMG1()
  {  
var x = document.getElementById("upd_img");
    if (x.style.display === "none") {

       x.style.display = "";
    
    }else{
      x.style.display = "none";
    }





  //document.getElementById('upd_img').style.display = "";
  //document.getElementById('lb_caja').style.display = "";
     
 /*       
  document.getElementById('caja').style.display = "none";
  document.getElementById('lb_caja').style.display = "none";*/
         
}
</script>







<div style="width:100%">
  <div style="background-color: yellow; width:30%; float: left ;">
    <img src="IMG/IMG_PRODUCTOS/<?php echo $e['img_producto']; ?>" width="120px" height="120px" onclick="editarIMG1()">
  </div>

  <div style="background-color: yellow; width:30%; float: left; margin-left: 15px;">
    <img src="IMG/IMG_PRODUCTOS/<?php echo $e['img_producto2']; ?>" width="120px" height="120px">
  </div>

  <div style="background-color: yellow; width:30%; float: left;margin-left: 15px;">
    <img src="IMG/IMG_PRODUCTOS/<?php echo $e['img_producto3'];} ?>" width="120px" height="120px">
  </div>

</div>



<div class="form-group">
 <!--   <label for="exampleFormControlFile1" >IMAGEN 1</label>-->
    <input type="file" name="img_prod1" class="form-control-file"
     id="upd_img" style="display:none;">
</div>



  <div class="form-group">
    <label for="exampleFormControlFile1">IMAGEN 2</label>
    <input type="file" name="img_prod[]" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">IMAGEN 3</label>
    <input type="file" name="img_prod[]" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>


<input type="submit" name="" class="btn btn-success">
        </form>

</div>
     



<?php   
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
     } else{
        
  document.getElementById('caja').style.display = "none";
  document.getElementById('lb_caja').style.display = "none";
     }     
}

function comprobar1(obj)
  {   
      if (obj.checked){
        
  document.getElementById('unidad').style.display = "";
  document.getElementById('lb_unidad').style.display = "";
     } else{
        
  document.getElementById('unidad').style.display = "none";
  document.getElementById('lb_unidad').style.display = "none";
     }     
}
</script>


<label>PRESENTACION</label><br>
<input name="chec" type="checkbox" id="chec" onChange="comprobar1(this);"/>
    <label for="chec">UNIDAD</label>

<input name="chec" type="checkbox" id="chec" onChange="comprobar2(this);" 
style="margin-left: 30px;" />
    <label for="chec">CAJA</label>


<div class="form-group">
      <label for="boton" id="lb_unidad" style="display:none">PRECIO POR UNIDAD</label>
    <input name="uni_prod" type="number" class="form-control"
       id="unidad" style="display:none" placeholder="PRECIO UNIDAD">
  </div>

 <div class="form-group">
      <label for="boton" id="lb_caja" style="display:none">PRECIO POR CAJA</label>
    <input name="caj_prod" type="number" class="form-control"
       id="caja" style="display:none" placeholder="PRECIO CAJA">
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
         <table class='table table-hover table-success' id='tabla_g'>
         <thead class='thead-light'>
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
  <td><b><a class="lk" href="../AdminGPC/?ir=Del_Noticias&idFM=<?php echo 
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
   


