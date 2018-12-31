<?php




class SealController{
	static public function ctrSearchEmpl($item,$value){
		$table = "seal_e";

		$data = SealModel::mdlSearchEmpl($table, $item, $value);

		return $data;
	}
	static public function ctrCreateSealE(){
		if(isset($_POST["newId"])){
				$tabla = "seal_e";
				$datos = array("nombre" => $_POST["newName"],
					           "apellido_p" => $_POST["newSurname"],
					           "apellido_m" => $_POST["newSurnamem"],
					           "dni" => $_POST["newId"],
					           "direccion" => $_POST["newAddress"],
					           "distrito" => $_POST["newDistrict"],
					           "fecha_n" => $_POST["newBirthday"],
					           "cargo" => $_POST["newOccupation"],
					           "fecha_i" => $_POST["newStartD"],
					           "fecha_f" => $_POST["newFinalD"],
					           "sueldo" => $_POST["newPay"],
					           "telefono" => $_POST["newPhone"],
					           "mail" => $_POST["newMail"],
					           "celular" => $_POST["newCPhone"],
					           "cuenta_sueldo" => $_POST["newPayA"],
					           "cuenta_cts" => $_POST["newPayC"],
					           "carrera" => $_POST["newDegree"],
					           "institucion" => $_POST["newInst"],
					           "edad" => $_POST["newYold"],
					           "cussp" => $_POST["newCussp"],
					           "snp" => $_POST["newSnp"],
					           "flujo" => $_POST["newFl"],
					           "mixta" => $_POST["newMix"],
					           "observacion" => $_POST["newObs"]
					       );
				if(isset($_POST["checkDo"])){
					$datos["terminos"]=true;
				}
				else{ $datos["terminos"]=false;}
				if(isset($_POST["checkCon"])){
					$datos["conyugue"]=true;
				}
				else{ $datos["conyugue"]=false;}
				if(isset($_POST["checkAsig"])){
					$datos["asignacion"]=true;
				}
				else{ $datos["asignacion"]=false;}
				$respuesta = SealModel::mdlAddSealE($tabla, $datos);
			
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








?>