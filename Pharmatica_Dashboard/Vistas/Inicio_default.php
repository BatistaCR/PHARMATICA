<div class="container-fluid">
  <div class="row">

          
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">CLIENTES GENERALES</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       <?php 
                        include('./conexion.php');
             $cont1 = "SELECT COUNT(*) id_user_general FROM t_usuarios_general WHERE  tipo_usuario = '2'";
             $resu1 = mysqli_query($conexion,$cont1);
             $fila1 = mysqli_fetch_assoc($resu1);
             echo $fila1['id_user_general'];
                         ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">COMPRAS REALIZADAS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                $cont2 = "SELECT COUNT(*)  id_mac_disponible FROM mac_registro_total_disponibles ";
                $resu2 = mysqli_query($conexion,$cont2);
                $fila2 = mysqli_fetch_assoc($resu2);
                echo $fila2['id_mac_disponible'];
                         ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        MENSAJES DE BANDEJA
                      </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                             <?php 
                $cont5 = "SELECT COUNT(*) idInvCaja FROM inventario_cajas ";
                $resu5 = mysqli_query($conexion,$cont5);
                $fila5 = mysqli_fetch_assoc($resu5);
                echo $fila5['idInvCaja'];
                         ?>
                          </div>
                        </div>
                       <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
          
</div>
