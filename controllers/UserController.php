<?php
require_once "models/UserModel.php";
require_once "Controller.php";
class UserController extends Controller{
    function listUser(){
        $data=new UserModel();
        $data=$data->ListUserdb();
        $this->view("header");
        $this->view("user/list-user",$data);
    }
    function addUser(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
              //  header('Location: ?page=thanh-vien');
            }
        }
        $this->view("header");
        $this->view("user/add-user",null, isset($_POST["sen_add"])? $_POST: null);
    }
    function __call($method, $params){
        $this->view("erro_404");
    }
    function checkData($data){
       if (!preg_match("/^[a-zA-Z]{1}\w{1,}$/", $data['user_name']) || strlen($data['user_name']) < 5){
           echo "lỗi tên";
            return false;
       }
       if ($data['password_1'] !== $data['password_2'] || strlen($data['password_1']) < 5 ){
           echo "lỗi pass";
            return false;
       }
        if ( strlen($data['full_name']) < 5 ){
            return false;
        }
        if (!preg_match("/^[a-zA-Z]{1}\w{1,}@\w{3,5}\.\w{3,5}$/", $data['email']) || strlen($data['email']) < 10){
            echo "lỗi email";
            return false;
        }
        if (!preg_match("/^[+84|0]{1}[0-9]{1,10}$/", $data['phone']) || strlen($data['phone']) < 10){
            echo "lỗi phone";
            return false;
        }
        if (!preg_match("/^[1-3]{1}$/", $data['admin'])){
            echo "lỗi phone";
            return false;
        }
        return true;
    }
}