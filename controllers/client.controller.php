<?php
class ClientController{
	static public function ctrSearchClients($item, $value ,$order){

		$table = "clientes";

		$data = ClientModel::mdlSearchClients($table, $item, $value,$order);

		return $data;
	}
}