<?php

namespace app\Router;

include 'app/Controller/productController.php';

use app\Controller\ProductController;

class ProductRouter
{
    public function handle($method, $path)
    {
        if ($method === "GET" && $path === '/api/product') {
            $controller = new ProductController();
            echo $controller->index();
        }

        if ($method == 'GET' && preg_match('#^/api/product/\d+$#', $path)) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getById($id);
        }

        if ($method == 'POST' && $path == '/api/product') {
            $controller = new ProductController();
            echo $controller->insert();
        }

        if ($method == 'PUT' && preg_match('#^/api/product/\d+$#', $path)) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->update($id);
        }

        if ($method == 'DELETE' && preg_match('#^/api/product/\d+$#', $path)) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->delete($id);
        }
    }
}
