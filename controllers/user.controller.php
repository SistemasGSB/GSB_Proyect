<?php

class UserController{
	static public function ctrUserLogin(){

		if(isset($_POST["user"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["user"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])){

			   	$encript = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$table = "usuarios";

				$item = "usuario";
				$value = $_POST["user"];

				$userList = UserModel::mdlSearchUsers($table, $item, $value);

				if($userList["usuario"] == $_POST["user"] && $userList["password"] == $encript){

					if($userList["estado"] == 1){

						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $userList["id"];
						$_SESSION["nombre"] = $userList["nombre"];
						$_SESSION["usuario"] = $userList["usuario"];
						$_SESSION["foto"] = $userList["foto"];
						$_SESSION["perfil"] = $userList["perfil"];
						$_SESSION["telefono"] = $userList["telefono"];

						/*=============================================
						REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
						=============================================*/

						date_default_timezone_set('America/Bogota');

						$date = date('Y-m-d');
						$hour = date('H:i:s');

						$today = $date.' '.$hour;

						$item1 = "ultimo_login";
						$value1 = $today;

						$item2 = "id";
						$value2 = $userList["id"];

						$lastLogin = UserModel::mdlUpdateUser($table, $item1, $value1, $item2, $value2);

						if($lastLogin == "ok"){

							echo '<script>

								window.location = "start";

							</script>';

						}				
						
					}else{

						echo '<br>
							<div class="alert alert-danger">El usuario aún no está activado</div>';

					}		

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}	

		}

	}
	static public function ctrSearchUsers($item, $value){

		$table = "usuarios";

		$data = UserModel::mdlSearchUsers($table, $item, $value);

		return $data;
	}
	static public function ctrCreateUser(){

		if(isset($_POST["nuevoUsuario"])){

				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

					$tabla = "usuarios";

					$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					$datos = array("nombre" => $_POST["nuevoNombre"],
						           "usuario" => $_POST["nuevoUsuario"],
						           "password" => $encriptar,
						           "perfil" => $_POST["nuevoPerfil"],
						           "telefono" => $_POST["nuevoTelefono"]);

					$respuesta = UserModel::mdlAddUser($tabla, $datos);
				
					if($respuesta == "ok"){

						echo '<script>

						swal({

							type: "success",
							title: "¡El usuario ha sido guardado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

						}).then(function(result){

							if(result.value){
							
								window.location = "users";

							}

						});
					

						</script>';




				}else{

					echo '<script>

						swal({

							type: "error",
							title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

						}).then(function(result){

							if(result.value){
							
								window.location = "users";

							}

						});
					

					</script>';

				}


			}


		}
	}
	static public function ctrDeleteUsers(){
		
	}
}