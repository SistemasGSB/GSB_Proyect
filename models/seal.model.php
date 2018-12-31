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

		$stmt = Connection::connect()->prepare("INSERT INTO $tabla(nombre, apellido_p, apellido_m, dni, cargo,sueldo, telefono, celular, direccion, distrito, mail, cuenta_s, cuenta_c, estado, carrera, institucion, terminos, observacion, edad, cussp, snp, flujo, mixta, conyugue, asignacion,fecha_n,fecha_i,fecha_a) VALUES (:nombre, :apellido_p,:apellido_m, :dni,:cargo,:sueldo,:telefono,:celular,:direccion,:distrito,:mail,:cuentas,:cuentac,1,:carrera,:institucion,:terminos,:observacion,:edad,:cussp,:snp,:flujo,:mixta,:conyugue,:asignacion,:fecha_n,:fecha_i,:fecha_f)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido_p", $datos["apellido_p"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido_m", $datos["apellido_m"], PDO::PARAM_STR);
		$stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_INT);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":distrito", $datos["distrito"], PDO::PARAM_STR);

		$f1=DateTime::createFromFormat('d/m/Y', $datos["fecha_n"])->format('Y-m-d');

		$stmt->bindParam(":fecha_n", $f1, PDO::PARAM_STR);
		$stmt->bindParam(":mail", $datos["mail"], PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
		$f2=DateTime::createFromFormat('d/m/Y', $datos["fecha_i"])->format('Y-m-d');
		$stmt->bindParam(":fecha_i", $f2, PDO::PARAM_STR);
		$f3=DateTime::createFromFormat('d/m/Y', $datos["fecha_f"])->format('Y-m-d');
		$stmt->bindParam(":fecha_f", $f3, PDO::PARAM_STR);
		$stmt->bindParam(":sueldo", $datos["sueldo"], PDO::PARAM_INT);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
		$stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_INT);
		$stmt->bindParam(":cuentas", $datos["cuenta_sueldo"], PDO::PARAM_STR);
		$stmt->bindParam(":cuentac", $datos["cuenta_cts"], PDO::PARAM_STR);
		$stmt->bindParam(":carrera", $datos["carrera"], PDO::PARAM_STR);
		$stmt->bindParam(":institucion", $datos["institucion"], PDO::PARAM_STR);
		
		$stmt->bindParam(":terminos", $datos["terminos"], PDO::PARAM_BOOL);	
		
		
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_INT);
		$stmt->bindParam(":cussp", $datos["cussp"], PDO::PARAM_STR);
		$stmt->bindParam(":snp", $datos["snp"], PDO::PARAM_STR);
		$stmt->bindParam(":flujo", $datos["flujo"], PDO::PARAM_STR);
		$stmt->bindParam(":mixta", $datos["mixta"], PDO::PARAM_STR);
		
		$stmt->bindParam(":conyugue", $datos["conyugue"], PDO::PARAM_BOOL);
		
		$stmt->bindParam(":asignacion", $datos["asignacion"] , PDO::PARAM_STR);
		
		$stmt->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
		
		if($stmt->execute()){
			return "ok";	

		}else{
			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}









?>