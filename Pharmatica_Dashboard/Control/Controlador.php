<?php
	class Control{
		function control(){
			if(isset($_GET['ir'])){  
				switch($_GET['ir']){
					case 'Sesion':
						//include_once'./sesion.html';
						break;
					case 'RegUser':
						include_once'./Vistas./RegistrarUsuarios.php';
						break;
					case 'USERS':
						include_once'./Vistas./usuarios.php';
						break;	
					case 'Profile':
						include_once'./Vistas./perfilUser.php';
						break;
					case 'Deleteuser':
						include_once'./Vistas./deleteuser.php';
						break;
					case 'PRODUCTOS':
						include_once'./Vistas./productos_general.php';
						break;
					case 'DeleteProductos':
						include_once'./Vistas./delete_prod_inv.php';
						break;	
					
					

                   /*****************/

					default:
						include_once'./Vistas./Inicio_default.php';
						break;
				}
			}else{
				include_once'./Vistas./Inicio_default.php';
			}
		}} 

?>