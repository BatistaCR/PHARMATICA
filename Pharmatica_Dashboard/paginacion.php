  <!-- /.container-fluid --> 
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Paginación usando PHP MySqli</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
<div class="panel-body">


<?php
include("conexion.php");
$registro_por_pagina = 5;
$pagina = '';
if(isset($_GET["pagina"]))
{
 $pagina = $_GET["pagina"];
}
else
{
 $pagina = 1;
}

$start_from = ($pagina-1)*$registro_por_pagina;

$query = "SELECT * FROM mac_activa order by id_mac_activa DESC LIMIT $start_from, $registro_por_pagina";
$result = mysqli_query($conexion, $query);

?>

<div class="table-responsive">
    <table class="table table-bordered">
     <tr>
      <th>ID</th>
      <th>Nombres</th>
      <th>Teléfonos</th>
     </tr>
     <?php
	 $number=0;
     while($row = mysqli_fetch_array($result))
     {
		 $number++;
     ?>
     <tr>
      <td><?php echo $number; ?></td>
      <td><?php echo $row["CTO"]; ?></td>
      <td><?php echo $row["Velocidad"]; ?></td>
     </tr>
     <?php
     }
     ?>
    </table>
     <div align="center">
    <br />
    <?php
    $page_query = "SELECT * FROM mac_activa ORDER BY id_mac_activa DESC";
    $page_result = mysqli_query($conexion, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$registro_por_pagina);
    $start_loop = $pagina;
    $diferencia = $total_pages - $pagina;
    if($diferencia <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($pagina > 1)
    {
     echo "<a class='pagina' href='paginacion.php?pagina=1'>Primera</a>";
     echo "<a class='pagina' href='paginacion.php?pagina=".($pagina - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a class='pagina' href='paginacion.php?pagina=".$i."'>".$i."</a>";
    }
    if($pagina <= $end_loop)
    {
     echo "<a class='pagina' href='paginacion.php?pagina=".($pagina + 1)."'>>></a>";
     echo "<a class='pagina' href='paginacion.php?pagina=".$total_pages."'>Última</a>";
    }
    
    
    ?>
    </div>
    <br /><br />

 </div>


</div>
</div>
  </div>
</div>