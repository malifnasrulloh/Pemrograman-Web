<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller
{
    use ResponseFormatter;

    public function __construct()
    {
        $this->controllerName = 'Get All Product';
        $this->controllerMethod = 'GET';
    }

    public function getAllProduct()
    {
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_atribute" => $this->getControllerAtribute(),
            "product" => $dummyData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }
}
