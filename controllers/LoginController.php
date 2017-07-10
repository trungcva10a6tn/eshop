<?php
require_once "models/LoginModel.php";
require_once "Controller.php";
class LoginController extends Controller{
    private $erro=[];
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
                if ($db != ""){
                    $_SESSION["id_user"]=$db[0]["id"];
                    $_SESSION["full_name"]=$db[0]["full_name"];
                    $_SESSION["admin"]=$db[0]["admin"];
                    header('Location: ?');
                }else{
                    $this->erro["type"]=1;
                    $this->erro["mes"]="Tài Khoản Không Tồn Tại";
                }
            }
        }
        $this->view("login/login",isset($_POST["login_new"])?$_POST : null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    function logout(){
        unset($_SESSION['id_user']);
        unset($_SESSION['full_name']);
        unset($_SESSION['admin']);
        header('Location: ?');
    }
    function checkData($data){
        if (!preg_match("/^[a-zA-Z]{1}\w{1,}$/", $data['user_name'])){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Tên Đăng Nhập";
            return false;
        }
        if (!preg_match("/^.{5,}$/", $data['password'])){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Mật Khẩu";
            return false;
        }
        return true;
    }
}