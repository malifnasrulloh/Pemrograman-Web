<?php
namespace app\Controller;
include 'app/Trait/apiResponseFormatter.php';
include 'app/Model/product.php';

use app\Model\Product;
use app\Trait\ApiResponseFormatter;

class ProductController
{
    use ApiResponseFormatter;
    public function index()
    {
        $product_model = new Product();
        $response = $product_model->findAll();
        return $this->apiResponse(200, "success", $response);
    }

    public function getById($id)
    {
        $product_model = new Product();
        $response = $product_model->findById($id);
        return $this->apiResponse(200, "success", $response);
    }

    public function insert()
    {
        $json_input = file_get_contents('php://input');
        $input_data = json_decode($json_input, true);
        if (json_last_error()) {
            return $this->apiResponse(404, 'error input', null);
        }
        $product_model = new Product();
        $response = $product_model->create($input_data["product_name"]);
        return $this->apiResponse(200, "success", $response);
    }

    public function update($id)
    {
        $json_input = file_get_contents('php://input');
        $input_data = json_decode($json_input, true);
        if (json_last_error()) {
            return $this->apiResponse(404, 'error input', null);
        }
        $product_model = new Product();
        $response = $product_model->update($input_data["product_name"], $id);
        return $this->apiResponse(200, "success", $response);
    }

    public function delete($id){
        $product_model = new Product();
        $response = $product_model->delete($id); 
        return $this->apiResponse(200, "success", $response);
    }
}
