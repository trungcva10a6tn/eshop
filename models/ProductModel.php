<?php
require_once 'Model.php';
class ProductModel extends Model
{
    function ListProductdb(){
        $db = $this->select("products");
        $db = $this->getdb($db);
        return $db;
    }
    function listProducess(){
        $db = $this->select("producess");
        $db = $this->getdb($db);
        return $db;
    }
    function getId($id){
        $db = $this->where("product", array("id"=>$id));
        $db = $this->getdb($db);
        return $db;
    }
    function addProduct($data){
        $this->add("products",$data);
    }
    function editProduct($data){
        $this->edit("products",$data, array("id"=>$_GET["id"]));
    }
}