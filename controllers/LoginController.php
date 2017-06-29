<?php
require_once "models/LoginModel.php";
require_once "Controller.php";
class LoginController extends Controller{
    function login(){
        if (isset($_POST["login_new"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "user_name"=>$_POST["user_name"],
                    "password"=>md5(md5($_POST["user_name"]).md5($_POST["password"])),
                    "delete_user"=> 1
                );
                $db=$this->db("LoginModel");
                $db=$db->checkUser($data);
                var_dump($db);
                if ($db){
                    $_SESSION["user"]=$db["user_name"];
                    $_SESSION["admin"]=$db["admin"];
                }else{
                    echo "tài khỏa không tồn tại";
                }
            }
        }
        $this->view("login/login",isset($_POST["login_new"])?$_POST : null);
    }
    function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['admin']);
        header('Location: ?');
    }
    function checkData($data){
        if (!preg_match("/^[a-zA-Z]{1}\w{1,}$/", $data['user_name'])){
            echo "lỗi tên";
            return false;
        }
        if (!preg_match("/^.{5,}$/", $data['password'])){
            echo "lỗi pass";
            return false;
        }
        return true;
    }
}