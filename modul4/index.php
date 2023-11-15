<?php
include "Controller/ProductController.php";

use Controller\ProductController;

$productController = new ProductController;

echo $productController->getAllProduct();
