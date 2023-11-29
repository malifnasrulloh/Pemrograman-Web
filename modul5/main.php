<?php

header("Content-Type: application/json; charset=UTF-8");
include "app/Router/productRouter.php";

use app\Router\ProductRouter;

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$productRoute = new ProductRouter();
$productRoute->handle($method, $path);