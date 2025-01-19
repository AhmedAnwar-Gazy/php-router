<?php

session_start();




spl_autoload_register(function ($class) {
    $class =str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require "{$class}.php";
});


require 'core\\' . "Validator.php";

require 'core\\'."function.php";
//
require 'bootstrap.php';
//
require 'core\\'."Response.php";
//
//require 'core\\'."Database.php";
//
require 'core\\'."router.php";


$router = new core\Routers;
$routes = require "routes.php";

//from router

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$methode = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$methode);



dd($_SERVER);

