<?php
require_once "Model.php";
class ProducessModel extends Model{
    function listProducess($options = []){
        $db=$this->where("producess",array("delete_produces"=> 1 ));
        $db=$this->getdb($db);
        return $db;
    }
    function getIdUser($id){
        $db=$this->where("producess",array("id"=>$id));
        $db=$this->getdb($db);
        return $db;
    }
    function addUser($data){
        $this->add("producess",$data);
    }
    function editUser($data){
        $this->edit("producess",$data,array("id"=>$_GET["id"]));
    }

}