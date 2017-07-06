<?php
require_once "model.php";
/**
 * Created by PhpStorm.
 * User: trung
 * Date: 01/07/2017
 * Time: 10:29 SA
 */
class BillModel extends Model
{
    function listBill(){
        $db=$this->where("bills",array("delete_bill"=> 1));
        $db=$this->getdb($db);
        return $db;
    }
    function getIdBill($id){
        $db=$this->where("bills",array("id"=>$id));
        $db=$this->getdb($db);
        return $db;
    }
    function addBill($data){
        $this->add("bills",$data);
    }
    function editBill($data){
        $this->edit("bills",$data,array("id"=>$_GET["id"]));
    }
}