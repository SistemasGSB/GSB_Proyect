<?php



require_once "../connection.php";
require_once "../../models/seal.model.php";

$data = SealModel::mdlSearchEmpl('seal_e', 'dni', $_POST['dni']);
echo json_encode($data);

?>