<?php
require_once 'Controller.php';
require_once 'models/SaleModel.php';
class SaleController extends Controller
{
    public function index(){
        $model = new SaleModel();
        $sale = $model->getAllSale();
        $this->view('header');
        $this->view('sale/index', $sale);
    }
    
    public function create(){
        $this->view('header');
        $this->view('sale/create');
    }
    
    public function store(){
        if(isset($_POST['add'])){
            $data = array();
            $data=array(
                "name_sale" => $_POST["name_sale"],
                "content_sale" => $_POST["content"],
                "type" => $_POST["type"],
                'percentage' => $_POST["percent"],
                "start_day" => date('Y-m-d', strtotime($_POST["start-day"])),
                "end_day" => date('Y-m-d', strtotime($_POST["finish-day"]))
            );
            $model = new SaleModel();
            $model->addSale($data);
            header('Location: ?page=sale');
        }
    }

    public function edit(){
        $id = $_GET['id'];
        $sale = array();
        $model = new SaleModel();
        $sale = $model->getSaleById($id);
        $this->view('header');
        $this->view('sale/edit', $sale[0]);
    }
    
    public function update(){
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
    
    public function delete(){
        $id = $_GET['id'];
        $model = new SaleModel();
        $model->deleteSale(['delete_sale' => 0], ['id' => $id]);
        header('Location: ?page=sale');
    }
}