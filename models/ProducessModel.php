<?php
require_once "Model.php";
class ProducessModel extends Model{
    function listProducess($options = []){
        $db=$this->where("producess",array("delete_produces"=> 1 ));
        $db=$this->getdb($db);
        return $db;
    }
    function getProducess($id){
        $db=$this->where("producess",array("id"=>$id));
        $db=$this->getdb($db);
        return $db;
    }
    function addProducess($data){
        $db=$this->add("producess",$data);
        return $db;
    }
    function editProducess($data){
        $this->edit("producess",$data,array("id"=>$_GET["id"]));
    }

}