<?php


require_once "tools/connection.php";
require_once "models/attendance.model.php";

$ok=AttendanceModel::mdlTruncateAttendance();
$data= array('done' => true);
echo json_encode($data);

?>