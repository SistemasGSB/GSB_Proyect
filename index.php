<?php


require_once "controllers/template.controller.php";
require_once "controllers/user.controller.php";
require_once "controllers/client.controller.php";
require_once "controllers/attendance.controller.php";
require_once "controllers/seal.controller.php";

require_once "models/seal.model.php";
require_once "models/user.model.php";
require_once "models/client.model.php";
require_once "models/attendance.model.php";

$plantilla = new TemplateController();
$plantilla -> templateRender();