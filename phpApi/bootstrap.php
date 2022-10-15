<?php
define("PROJECT_ROOT_PATH", __DIR__ . "/../");
 
// include main configuration file
require_once PROJECT_ROOT_PATH . "/config.php";
 
// include the base controller file
require_once PROJECT_ROOT_PATH . "/BaseController.php";

// include the use database file
require_once PROJECT_ROOT_PATH . "/Database.php";
 
// include the use page file
require_once PROJECT_ROOT_PATH . "/Models/PageModel.php";
?>