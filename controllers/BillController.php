<?php
require_once "models/BillModel.php";
require_once "Controller.php";
class BillController extends Controller
{
    function listBill(){
        $data=$this->db("BillModel");
        $data=$data->listBill();
        $this->view("header");
        $this->view("bill/list-bill",$data);
    }
}