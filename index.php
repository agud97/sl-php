<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/back/vendor/autoload.php';

/**
 * test deploy 
 */
use Core\Router;

$router = new Router;
$router->run();
