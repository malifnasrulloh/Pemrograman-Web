<?php

class aa{
    var $a=["code"=>200,"message"=>"Success","data"=>["controller_atribute"=>["ControllerName"=>"Get All Product","Method"=>"GET"],"product"=>["Air Mineral","Kebab","Spaghetti","Jus Jambu"]]];
    function main(){
        // $this->a = "aa";
        // echo 
        // echo $a;
    }
}
$obj = new aa;
echo json_encode($obj->a)."\n";
echo json_decode(json_encode($obj->a));
// echo json_decode(json_encode($a->a))['code'];
// echo json_decode(json_encode($a->a));

?>