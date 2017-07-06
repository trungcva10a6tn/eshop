<?php
require_once 'models/ProductModel.php';
require_once 'Controller.php';
class ClientController extends Controller
{
    function listAll(){
        $db= $this->db("ProductModel");
        $data = $db->ListProductdb();
        $this->view('layout',$data);
    }
}