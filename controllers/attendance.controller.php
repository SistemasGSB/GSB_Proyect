<?php


include 'excel_reader/excel_reader.php';
class AttendanceController{
	static public function ctrSearchAttendance($item, $value){

		$table = "asistencia";

		$data = AttendanceModel::mdlSearchAttendance($table, $item, $value);

		return $data;
	}
	static public function SetExcelFile(){
		if(isset($_POST["submit"])){
			$target_dir = "tmp/";
			$target_file = $target_dir . "Asistencia.xls";
			move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);


			//var_dump($_FILES["path"]["tmp_name"]);
			$excel = new PhpExcelReader; // creates object instance of the class
			$excel->read('tmp\Asistencia.xls'); // reads and stores the excel file data
			$numRows = $excel->sheets[0]['numRows'];
			var_dump($numRows);
			$i = 2;
			while ( $i <= $numRows) {
				$date = DateTime::createFromFormat("d/m/Y H:i", $excel->sheets[0]['cells'][$i][3]);
				$fecha = $date->format('Y-m-d H:i:s'); 
				$datos = array('ac-no' => (int)$excel->sheets[0]['cells'][$i][1] , 'nombre' => $excel->sheets[0]['cells'][$i][2] , 'fecha_hora' => $fecha );
				if($excel->sheets[0]['cells'][$i][5] != "Repeat"){
					AttendanceModel::mdlAddAttendance($datos);
				}
				# code...
				$i = $i +1;
			}
			echo '<script>

						swal({

							type: "success",
							title: "Se cargo satisfactoriamente el archivo",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

						}).then(function(result){

							if(result.value){
							
								window.location = "attendance";

							}

						});
					

						</script>';
		}

	}
}