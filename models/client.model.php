<?php

require_once "tools/connection.php";

class ClientModel{

	/*=============================================
	Buscar Clientes
	=============================================*/

	static public function mdlSearchClients($table, $item, $value ,$order){

		if($item != null){

			$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY id_cliente DESC");

			$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
			
			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY $order DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}
	
}