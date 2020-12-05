<?php
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
        if (substr_compare($_SERVER['REQUEST_URI'], "/admin", 0, 6) == 0) {
            define('ROOT_DIR', __DIR__.'/Admin');
            define('ENV', 'Admin');
        }
else{
define('ROOT_DIR', __DIR__);

define('ENV', 'CMS');
}
//define('ROOT_DIR', __DIR__);

//define('ENV', 'CMS');
define('DS', DIRECTORY_SEPARATOR);
//$fp = fopen($_SERVER['DOCUMENT_ROOT']."/aaaaaaa.txt", "w");
require_once 'Engine/Bootstrap.php';