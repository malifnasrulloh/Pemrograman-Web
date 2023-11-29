<?php

namespace app\Model;

include 'app/Config/databaseConfig.php';

use app\Config\DatabaseConfig;
use mysqli;

class Product extends DatabaseConfig
{
    public $conn;
    public function __construct()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database_name, $this->port);

        if ($this->conn->connect_error) {
            die('Gagal : ' . $this->conn->connect_error);
        }
    }

    public function findAll()
    {
        $query = "select * from " . $this->table;
        $result = $this->conn->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function findById($id)
    {
        $query = "select * from " . $this->table . " where id_product=" . $id;
        $result = $this->conn->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function create($data)
    {
        $query = "insert into products (product_name) values ('$data')";
        echo $query;
        $result = $this->conn->query($query);
        return $result;
    }

    public function update($data, $id)
    {
        $query = "update products set product_name = '$data' where id_product = $id";
        $result = $this->conn->query($query);
        return $result;
    }
    
    public function delete($id)
    {
        $query = "delete from products where id_product = " . $id;
        $result = $this->conn->query($query);
        return $result;
    }
}
