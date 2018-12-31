<?php
require_once "tools/connection.php";

class AttendanceModel{
	static public function mdlSearchAttendance($table, $item, $value){
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
	static public function mdlAddAttendance($datos){
		$string = "INSERT INTO asistencia(ac_no, nombre, fecha_hora) VALUES (:ac, :nombre, :fecha_hora)";
		$stmt = Connection::connect()->prepare($string);
		//var_export($datos);
		$stmt->bindParam(":ac", $datos["ac-no"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_hora", $datos["fecha_hora"]);

		$stmt->execute();
		//var_export($stmt->errorInfo());
		$stmt= null;


	}
	static public function mdlTruncateAttendance(){
		$string = "TRUNCATE TABLE asistencia";
		$stmt = Connection::connect()->prepare($string);
		//var_export($datos);
		$stmt->execute();
		//var_export($stmt->errorInfo());
		$stmt= null;
		return "ok";


	}
}
