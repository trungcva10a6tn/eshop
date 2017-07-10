<?php
require_once 'Controller.php';
require_once 'models/SaleModel.php';
class SaleController extends Controller
{
    private $erro=[];
    public function listSale(){
        if (isset($_POST["find-search"])&&strlen($_POST["search"])>0){
            $data=$this->db("SaleModel");
            $data=$data->getsearch();
        }else{
            $data=$this->db("SaleModel");
            $data=$data->getAllSale();
        }
        $this->view('header');
        $this->view('sale/list-sale', $data);
    }
    
    public function addSale(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "name_sale" => $_POST["name_sale"],
                    "content_sale" => $_POST["content"],
                    "type" => $_POST["type"],
                    'percentage' => $_POST["percent"],
                    "start_day" => $_POST["start-day"],
                    "end_day" => $_POST["finish-day"]
                );
                $db=$this->db("SaleModel");
                $db->addSale($data);
                header('Location: ?page=sale');
            }
        }
        $this->view('header');
        $this->view('sale/add-edit',null, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    public function editSale(){
        $id = $_GET['id'];
        $sale = array();
        $model = new SaleModel();
        $sale = $model->getSaleById($id);
        $this->view('header');
        $this->view('sale/edit', $sale[0]);
    }
    
    public function updateSale(){
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $data = array();
            $data=array(
                "name_sale" => $_POST["name_sale"],
                "content_sale" => $_POST["content"],
                "type" => $_POST["type"],
                'percentage' => $_POST["percent"],
                "start_day" => date('Y-m-d', strtotime($_POST["start-day"])),
                "end_day" => date('Y-m-d', strtotime($_POST["finish-day"])),
                "delete_sale" => 1,
            );
            $model = new SaleModel();
            $model->updateSale($data, ['id' => $id]);
            header('Location: ?page=sale');
        }
    }
    
    public function deleteSale(){
        $id = $_GET['id'];
        $model = new SaleModel();
        $model->deleteSale(['delete_sale' => 0], ['id' => $id]);
        header('Location: ?page=sale');
    }
    public function checkData($data){
        return true;
    }
}