<div class="col col-lg-6" style="margin-left: 10%;">
  <h5 style="float: right; color: #721804;">Usuarios con Acceso Administrativo</h5>

<?php 
include('./conexion.php');
$query = "SELECT * from t_usuarios_general WHERE  tipo_usuario = 1
 ORDER BY id_user_general DESC";
//$query = "CALL TraerUsuarios()";
$sql = mysqli_query($conexion, $query);

echo "
         <table class='table table-hover'>
         <thead>
         <tr>
         <th scope='col'>Nombre Del Usuario</th>
         <th scope='col'>Fecha De Registro</th>
         <th scope='col'>Eliminar</th>
        
       </tr>
       </thead>";
while ($f = mysqli_fetch_array($sql)) {

    echo "<tr>";
    echo "<td>".$f['nombre_user_general']."</td>";
    echo "<td>".$f['fecha_registro_user']."</td>";
   /* echo "<td>".$f['fechaRegistro']."</td>";*/
  ?>

  <td><b><a class="lk" href="../Pharmatica_Dashboard/?ir=Deleteuser&id=<?php
   echo $f['id_user_general']?>"><?php
   echo "ELIMINAR"; ?></a></b></td>
  <!--<td><b><a class="lk" href="../Vehiculos_V2/?ir=Update&id=<?php //echo $f['idDatos']?>"><?php //echo "ACTUALIZAR"; ?></a></b></td>-->
  
  <?php
  echo "</tr>";
  
}
echo "</table>";

 ?>
</div>
