<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT");

use App\Routes\Routes;

require 'vendor/autoload.php';

$routes = new Routes();
$routes->routes();

?>