<?php
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
define('ROOT_DIR', __DIR__);
if (substr_compare($_SERVER['REQUEST_URI'], "/admin", 0, 6) == 0) {
    define('ENV', 'Admin');
}
else{
    define('ENV', 'CMS');
}

define('DS', DIRECTORY_SEPARATOR);
require_once 'Engine/Bootstrap.php';