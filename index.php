<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/back/vendor/autoload.php';

/**
 * Router
 */
use Core\Router;

$router = new Router;
$router->run();