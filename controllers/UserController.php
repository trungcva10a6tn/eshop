<?php
require_once "models/UserModel.php";
require_once "Controller.php";
class UserController extends Controller{
    private $erro=[];
    function listUser(){
        if (isset($_POST["find-search"])&&strlen($_POST["search"])>0){
            $data=$this->db("UserModel");
            $data=$data->getsearch();
        }else{
            $data=$this->db("UserModel");
            $data=$data->listUserdb();
        }
        $this->view("header");
        $this->view("user/list-user",$data);
    }
    function addUser(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "user_name"=>$_POST["user_name"],
                    "password"=>md5(md5($_POST["user_name"]).md5($_POST["password_2"])),
                    "full_name"=>$_POST["full_name"],
                    "address"=>$_POST["address"],
                    "email"=>$_POST["email"],
                    "phone"=>$_POST["phone"],
                    "admin"=>$_POST["admin"]
                );
                $db=$this->db("UserModel");
                $db->addUser($data);
                header('Location: ?page=thanh-vien');
            }
        }
        $this->view("header");
        $this->view("user/add-user",null, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    function editUser(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "user_name"=>$_POST["user_name"],
                    "password"=>strlen($_POST["password_2"])>0?md5(md5($_POST["user_name"]).md5($_POST["password_2"])):null,
                    "full_name"=>$_POST["full_name"],
                    "address"=>$_POST["address"],
                    "email"=>$_POST["email"],
                    "phone"=>$_POST["phone"],
                    "admin"=>$_POST["admin"]
                );
                $db=$this->db("UserModel");
                $db->editUser($data);
               header('Location: ?page=thanh-vien');
            }
        }else{
            $data_user="";
            $data_user=$this->db("UserModel");
            $data_user= $data_user->getIdUser($_GET["id"]);
            $data_user=$data_user[0];
        }
        $this->view("header");
        $this->view("user/add-user",isset($data_user)?$data_user:null, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    function deleteUser(){
        if (isset($_POST["delete"])){
            $data=array(
                "delete_user"=>0
            );
            $db=$this->db("UserModel");
            $db->editUser($data);
            header('Location: ?page=thanh-vien');
        }
        $data_user="";
        $data_user=$this->db("UserModel");
        $data_user= $data_user->getIdUser($_GET["id"]);
        $data_user=$data_user[0];
        $this->view("header");
        $this->view("user/delete-user",$data_user);
    }
    function checkData($data){
       if (!preg_match("/^[a-zA-Z]\w{1,}$/", $data['user_name']) || strlen($data['user_name']) < 5){
           $this->erro["type"]=1;
           $this->erro["mes"]="Lỗi Tên sai cú pháp";
            return false;
       }
       if (strlen($data['password_1']) === 0 && strlen($data['password_1']) === 0 && $_GET["page"] == "sua-thanh-vien"){

       }else{
           if ($data['password_1'] !== $data['password_2'] || !preg_match("/^.{5,}$/", $data['password_1'])){
               $this->erro["type"]=1;
               $this->erro["mes"]="Lỗi Mật Khấu Không Đúng ";
               return false;
           }
       }
       if ( strlen($data['full_name']) < 5 ){
           $this->erro["type"]=1;
           $this->erro["mes"]="Lỗi Tên Đầy Đủ quá Ngắn";
            return false;
        }
        if (!preg_match("/^[a-zA-Z]{1}\w{1,}@\w{3,5}\.\w{3,5}$/", $data['email']) || strlen($data['email']) < 10){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Email";
            return false;
        }
        if (!preg_match("/^[\+84|0]{1,3}[0-9]{9,11}$/", $data['phone'])){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Số Điện Thoại";
            return false;
        }
        if (!preg_match("/^[1-3]{1}$/", $data['admin'])){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Quyền";
            return false;
        }
        return true;
    }
    function __call($method, $params){
        $this->view("erro_404");
    }
}