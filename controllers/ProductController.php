<?php
require_once 'models/ProductModel.php';
require_once 'Controller.php';
class ProductController extends Controller
{
    private $erro=[];
    function listAllProduct(){
        $db= $this->db("ProductModel");
        $data = $db->ListProductdb();
        $this->view("header");
        $this->view('product/list-product',$data);
    }
    function addProduct(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "name_product"=>$_POST["name"],
                    "screen"=>$_POST["screen"],
                    "operating_system"=>$_POST["operating_system"],
                    "CPU"=>$_POST["CPU"],
                    "RAM"=>$_POST["RAM"],
                    "memory"=>$_POST["memory"],
                    "sim"=>$_POST["sim"],
                    "pin"=>$_POST["pin"],
                    "price"=>$_POST["price"],
                    "view"=>$_POST["view"],
                    "id_produces"=>$_POST["id_produces"]
                );
                $db=$this->db("ProductModel");
                $db->addProduct($data);
                header('Location: ?page=san-pham');
            }
        }
        $dataProducess = $this->db("ProductModel");
        $dataProducess = $dataProducess->listProducess();
        $datafull_product[1] = $dataProducess;
        $this->view("header");
        $this->view("product/add-product",$datafull_product, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }

    function editProduct(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "name_product"=>$_POST["name"],
                    "screen"=>$_POST["screen"],
                    "operating_system"=>$_POST["operating_system"],
                    "CPU"=>$_POST["CPU"],
                    "RAM"=>$_POST["RAM"],
                    "memory"=>$_POST["memory"],
                    "sim"=>$_POST["sim"],
                    "pin"=>$_POST["pin"],
                    "price"=>$_POST["price"],
                    "view"=>$_POST["view"],
                    "id_produces"=>$_POST["id_produces"]
                );
                $db=$this->db("ProductModel");
                $db->editProduct($data);
                header('Location: ?page=san-pham');
            }
        }else{
            $data_product="";
            $data_product=$this->db("ProductModel");
            $data_product= $data_product->getId($_GET["id"]);
            $data_product=$data_product[0];
            $datafull_product[0] = $data_product;
            $dataProducess = $this->db("ProductModel");
            $dataProducess = $dataProducess->listProducess();
            $datafull_product[1] = $dataProducess;
        }
        $this->view("header");
        $this->view("product/add-product",isset($datafull_product)?$datafull_product:null, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    function deleteProduct(){
        if (isset($_POST["delete"])){
            $data=array(
                "delete_product"=>0
            );
            $db=$this->db("ProductModel");
            $db->editProduct($data);
            header('Location: ?page=san-pham');
        }
        $data_product="";
        $data_product=$this->db("ProductModel");
        $data_product= $data_product->getId($_GET["id"]);
        $data_product=$data_product[0];
        $this->view("header");
        $this->view("product/delete_product",$data_product);
    }
    function checkData($data){
        if (!preg_match("/^.{5,}$/", $data['name']) || strlen($data['name']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Tên Sản Phẩm";
            return false;
        }
        if (!preg_match("/^.{5,}/", $data['screen']) || strlen($data['screen']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Màn Hình";
            return false;
        }
        if (!preg_match("/^.{5,}/", $data['operating_system']) || strlen($data['operating_system']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Hệ Điều Hành";
            return false;
        }
        if (!preg_match("/.{5,50}/", $data['CPU']) || strlen($data['CPU']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng CPU";
            return false;
        }
        if (!preg_match("/.{3,50}/", $data['RAM']) || strlen($data['RAM']) < 3){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Ram";
            return false;
        }
        if (!preg_match("/.{5,50}/", $data['memory']) || strlen($data['memory']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Memory";
            return false;
        }
        if (!preg_match("/.{5,50}/", $data['pin']) || strlen($data['pin']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Pin";
            return false;
        }
        if (!preg_match("/^[1-9]{1}[0-9]{3,}/", $data['price']) || strlen($data['price']) < 5){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Giá";
            return false;
        }
        return true;
    }
}