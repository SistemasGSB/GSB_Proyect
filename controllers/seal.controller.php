<?php




class SealController{
	static public function ctrSearchEmpl($item,$value){
		$table = "seal_e";

		$data = SealModel::mdlSearchEmpl($table, $item, $value);

		return $data;
	}
}








?>