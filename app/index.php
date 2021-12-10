<?php

use App\Framework\Router;

session_start();

require_once './vendor/autoload.php';

$router = new Router();
$router->getController();

