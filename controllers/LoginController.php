<?php
require_once "models/UserModel.php";
require_once "Controller.php";
class LoginController extends Controller{

    function login(){
        if (isset($_POST["login_new"])){
            var_dump($_POST);
        }
        $this->view("login/login");
    }
}