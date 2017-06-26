<?php
require_once "Model.php";
class UserModel extends Model {
    function ListUserdb(){
        $db=$this->select("users");
        $db=$this->getdb($db);
        return $db;
    }
    function getIdUser($id){
        $db=$this->where("users",array("id_user"=>$id));
        $db=$this->getdb($db);
        return $db;
    }
    function addUser($data){
        $this->add("users",$data);
    }
    function editUser($data){
        $this->edit("users",$data,array("id_user"=>$_GET["id"]));
    }
}