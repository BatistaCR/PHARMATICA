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


<?php  

include("./conexion.php");
  $por_pagina = 5;

            if (isset($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
            }else{
                $pagina= 1;
            }
     $empieza = ($pagina-1) * $por_pagina;

 $query = "SELECT * from t_usuarios_general WHERE  tipo_usuario = 2
 ORDER BY id_user_general DESC
 LIMIT $empieza , $por_pagina";

 $sql = mysqli_query($conexion, $query);

 echo "
 <div class='table-responsive'>
         <table class='table table-info table-striped table-hover'>
         <thead class='thead-dark'>
         <tr>
         <th scope='col'>NOMBRE</th>
         <th scope='col'>IDENTIFICACIÓN</th>
         <th scope='col'>TELEFONO</th>
         <th scope='col'>CORREO ELECTRONICO</th>
         <th scope='col'>ESTATUS</th>
         <th scope='col'>FECHA REGISTRO</th>
         <th scope='col'>EDITAR</th>
         <th scope='col'>DESACTIVAR</th>
       </tr>
       </thead>";
 while ($f = mysqli_fetch_array($sql)) {

    echo "<tr>";
    echo "<td>".$f['nombre_user_general']."</td>";
    echo "<td>".$f['numero_identificacion']."</td>";
    echo "<td>".$f['telefono1']."</td>";
    echo "<td>".$f['email_general']."</td>";
    echo "<td>".$f['estatus_usuario']."</td>";
    echo "<td>".$f['fecha_registro_user']."</td>";
  ?>
  
  <td><b><a class="lk" href="../Pharmatica_Dashboard/?ir=Actualizar_Cliente&id=<?php
  echo $f['id_user_general']?>" title="Mover">EDITAR</a></b></td>
  <td><b><a class="lk" href="../Pharmatica_Dashboard/?ir=Desactivar_Regular&id=<?php
   echo $f['id_user_general']?>">DESACTIVAR</a></b></td>
  
  <?php
  echo "</tr>";
 }
 echo "</table>";
 echo " </div>";
 ?>
   
   <div class="paginador">
      
      <?php 
        $query11 = "SELECT * FROM
      t_usuarios_general WHERE  tipo_usuario = 2 LIMIT 500";

        $resultado11 = mysqli_query($conexion,$query11);
        $total_registros = mysqli_num_rows($resultado11);

        $total_paginas = ceil($total_registros / $por_pagina);
       
       echo "<center><a href= '../AdminGPC/?ir=NoticasFM&pagina=1'> "/*."Primera"*/."</a>";

       for ($i=1; $i <=$total_paginas ; $i++) { 
           echo "<a href= '../AdminGPC/?ir=NoticasFM&pagina=".$i."' class ='ida'> ".$i."</a>";      
            }
 echo "<a href= '../AdminGPC/?ir=NoticasFM&pagina==$total_paginas' > "/*."Ultima"*/."</a></center>";
       ?>
 </div>