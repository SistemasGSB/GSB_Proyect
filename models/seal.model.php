<?php





class SealModel{

	static public function mdlSearchEmpl($table, $item, $value){

		if($item != null){

			$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Connection::connect()->prepare("SELECT * FROM $table");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}
	static public function mdlAddSealE($tabla, $datos){

		$stmt = Connection::connect()->prepare("INSERT INTO INSERT INTO $tabla(nombre, apellido_p, apellido_m, dni, cargo,sueldo, telefono, celular, direccion, distrito, mail, cuenta_s, cuenta_c, estado, carrera, institucion, terminos, observacion, edad, cussp, snp, flujo, mixta, conyugue, asignacion) VALUES (:nombre, :apellido_p,:apellido_m, :dni,:cargo,:sueldo,:telefono,:celular,:direccion,:distrito,:mail,:cuenta_s,:cuenta_c,true,:carrera,:institucion,:terminos,:observacion,:edad,:cussp,:snp,:flujo,:mixta,:conyugue,:asignacion)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido_p", $datos["apellido_p"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido_m", $datos["apellido_m"], PDO::PARAM_STR);
		$stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":distrito", $datos["distrito"], PDO::PARAM_STR);
		//$stmt->bindParam(":fecha_n", $datos["fecha_n"], PDO::PARAM_STR);
		$stmt->bindParam(":mail", $datos["mail"], PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
		//$stmt->bindParam(":fecha_i", $datos["fecha_i"], PDO::PARAM_STR);
		//$stmt->bindParam(":fecha_f", $datos["fecha_f"], PDO::PARAM_STR);
		$stmt->bindParam(":sueldo", $datos["sueldo"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
		$stmt->bindParam(":cuenta_s", $datos["cuenta_sueldo"], PDO::PARAM_STR);
		$stmt->bindParam(":cuenta_c", $datos["cuenta_cts"], PDO::PARAM_STR);
		$stmt->bindParam(":carrera", $datos["carrera"], PDO::PARAM_STR);
		$stmt->bindParam(":institucion", $datos["institucion"], PDO::PARAM_STR);
		$ver = "true";
		$fal = "false";
		if($datos["terminos"] == "on"){
			$stmt->bindParam(":terminos", $ver, PDO::PARAM_STR);	
		}
		else{
			$stmt->bindParam(":terminos", $fal, PDO::PARAM_STR);		
		}
		
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":cussp", $datos["cussp"], PDO::PARAM_STR);
		$stmt->bindParam(":snp", $datos["snp"], PDO::PARAM_STR);
		$stmt->bindParam(":flujo", $datos["flujo"], PDO::PARAM_STR);
		$stmt->bindParam(":mixta", $datos["mixta"], PDO::PARAM_STR);
		if ($datos["conyugue"] == "on") {
			$stmt->bindParam(":conyugue", $ver , PDO::PARAM_STR);	# code...
		}
		else{
			$stmt->bindParam(":conyugue", $fal, PDO::PARAM_STR);
		}
		if ($datos["asignacion"]=="on") {
			$stmt->bindParam(":asignacion", $ver, PDO::PARAM_STR);	# code...
		}
		else{
			$stmt->bindParam(":asignacion", $fal , PDO::PARAM_STR);
		}
		$stmt->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
		
		var_export($datos);
		if($stmt->execute()){
			var_export($stmt->errorInfo());
			return "ok";	

		}else{
			var_export($stmt->debugDumpParams());
			
			var_export($stmt->errorInfo());
			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}









?>