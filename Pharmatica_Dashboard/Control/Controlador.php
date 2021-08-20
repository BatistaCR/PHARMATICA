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
					case 'Clientes_General':
						include_once'./Vistas./clientes_regulares.php';
						break;
					case 'Actualizar_Cliente':
						include_once'./Vistas./actualizar_cliente.php';
						break;	
					case 'Desactivar_Regular':
						include_once'./Vistas./desactivar_cliente_regular.php';
						break;
					case 'Mensajeria':
						include_once'./Vistas./mensajeria_principal.php';
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