<?php
require_once "models/UserModel.php";
require_once "Controller.php";
class UserController extends Controller{
    function ListUser(){
        $data=new UserModel();
        $data=$data->ListUserdb();
        $this->view("header");
        $this->view("user/ListUser",$data);
    }
    function AddUser(){
        $this->view("header");
        $this->view("user/AddUser");
    }
    function __call($method, $params){
        $this->view("erro_404");
    }
}