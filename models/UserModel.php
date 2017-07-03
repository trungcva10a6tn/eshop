<?php
require_once "Model.php";
class UserModel extends Model {
    function listUserdb(){
        $db=$this->where("users",array("delete_user"=> 1));
        /*if(isset($options['limit'])){
            $db->where();
        }
        if(isset($options['range'])){

        }*/
        $db=$this->getdb($db);
        return $db;
    }
    function getsearch(){
        $db=$this->like("users",array(
            "user_name"=>" LIKE '%".$_POST["search"]."%'",
            "full_name"=>" LIKE '%".$_POST["search"]."%'",
            "address"=>" LIKE '%".$_POST["search"]."%'",
            "email"=>" LIKE '%".$_POST["search"]."%'",
            "phone"=>" LIKE '%".$_POST["search"]."%'"
            ));
        $db=$this->getdb($db);
        return $db;
    }
    function getIdUser($id){
        $db=$this->where("users",array("id"=>$id));
        $db=$this->getdb($db);
        return $db;
    }
    function addUser($data){
        $this->add("users",$data);
    }
    function editUser($data){
        $this->edit("users",$data,array("id"=>$_GET["id"]));
    }

}