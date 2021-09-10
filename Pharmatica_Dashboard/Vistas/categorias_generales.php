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
      margin-top: 8px;
    }
    a{
    	color: black;
    }
</style>	

<h1>CATEGORIAS GENERALES</h1><br><br>

  <a href="../Pharmatica_Dashboard/?ir=AGREGAR_CATEGORIA" style="text-decoration:none;">
<button title="AGREGAR COLABORADOR" type="button" class="btn btn-warning">
     <b>AGREGAR</b>
</button>
</a><br><br>

<?php  
include("./conexion.php");
  $por_pagina = 20;

            if (isset($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
            }else{
                $pagina= 1;
            }
     $empieza = ($pagina-1) * $por_pagina;

 $query = "SELECT * from t_categoria_productos
 ORDER BY id_categoria DESC
 LIMIT $empieza , $por_pagina";

 $sql = mysqli_query($conexion, $query);

 echo "
 <div class='table-responsive'>
         <table class='table table-info table-striped table-hover'>
         <thead class='thead-dark'>
         <tr>
         <th scope='col'>TITULO CATEGORIA</th>
         <th scope='col'>IMAGEN</th>
         <th scope='col'>FECHA REGISTRO</th>
         <th scope='col'>EDITAR</th>
         <th scope='col'>ELIMINAR</th>
       </tr>
       </thead>";
 while ($f = mysqli_fetch_array($sql)) {

    echo "<tr>";
    echo "<td>".$f['nombre_categoria']."</td>";
    echo "<td><img src='./IMG/IMG_CATEGORIA/".$f['img_categoria']."' 
            width='100px' height='100px'></td>";
    echo "<td>".$f['fecha_registro']."</td>";
  ?>
  
<td>
    <b>
        <a class="btn btn-primary bi bi-pencil-square" href="../Pharmatica_Dashboard/?ir=Actualizar_Cliente&id=<?php echo $f['id_categoria']?>" title="EDITAR">
            
        </a>
    </b>
</td>
<td>
    <b>
        <a class="btn btn-danger bi bi-eraser" href="../Pharmatica_Dashboard/?ir=Desactivar_Regular&id=<?php echo $f['id_categoria']?>"
         title="ELIMINAR">  
        </a>
    </b>
</td>
  
  <?php
  echo "</tr>";
 }
 echo "</table>";
 echo " </div>";
 ?>
   
<div class="paginador">
      
      <?php 
        $query11 = "SELECT * FROM t_categoria_productos LIMIT 500";

        $resultado11 = mysqli_query($conexion,$query11);
        $total_registros = mysqli_num_rows($resultado11);

        $total_paginas = ceil($total_registros / $por_pagina);
       
       echo "<center><a href= '../Pharmatica_Dashboard/?ir=CATEGORIAS&pagina=1'> "/*."Primera"*/."</a>";

       for ($i=1; $i <=$total_paginas ; $i++) { 
           echo "<a href= '../Pharmatica_Dashboard/?ir=CATEGORIAS&pagina=".$i."' class ='ida'> ".$i."</a>";      
            }
 echo "<a href= '../Pharmatica_Dashboard/?ir=CATEGORIAS&pagina==$total_paginas' > "/*."Ultima"*/."</a></center>";
       ?>
 </div>