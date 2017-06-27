<?php
require_once 'models/ProductModel.php';
require_once 'Controller.php';
class ProductController extends Controller
{
    function listAllProduct(){
        $db= $this->db("ProductModel");
        $data = $db->ListProductdb();
        $this->view('header');
        $this->view('product/list-product',$data);
    }

    
    function addProduct(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "name"=>$_POST["name"],
                    "screen"=>$_POST["screen"],
                    "operating_system"=>$_POST["operating_system"],
                    "CPU"=>$_POST["CPU"],
                    "RAM"=>$_POST["RAM"],
                    "memory"=>$_POST["memory"],
                    "sim"=>$_POST["sim"],
                    "pin"=>$_POST["pin"],
                    "price"=>$_POST["price"],
                    "view"=>$_POST["view"],
                    "id_produces"=>$_POST["id_produces"],
                );
                $db=$this->db();
                $db->addProduct($data);
                header('Location: ?page=thanh-vien');
            }
        }
        $dataProducess = $this->db("ProductModel");
        $dataProducess = $dataProducess->listProducess();
        $this->view("header");
        $this->view("product/add-product",$dataProducess, isset($_POST["sen_add"])? $_POST: null);
    }
    function checkData($data){
        if (!preg_match("/^[a-zA-Z]{1}\w{1,}$/", $data['name']) || strlen($data['name']) < 5){
            echo "lỗi tên";
            return false;
        }
        if (!preg_match("/^[a-zA-Z]/", $data['screen']) || strlen($data['screen']) < 5){
            echo "lỗi tên";
            return false;
        }
        return true;
    }
}