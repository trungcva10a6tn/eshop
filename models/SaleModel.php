<?php

require_once 'Model.php';
class SaleModel extends Model
{
    public function getAllSale(){
        $sales = $this->where('sales', ['delete_sale' => 1]);
        $sales = $this->getdb($sales);
        return $sales;
    }
    function getsearch(){
        $db=$this->like("users",array(
            "(name_sale"=>" LIKE '%".$_POST["search"]."%'",
            "content_sale"=>" LIKE '%".$_POST["search"]."%'",
            "percentage"=>" LIKE '%".$_POST["search"]."%'",
            "start_day"=>" LIKE '%".$_POST["search"]."%'",
            "end_day"=>" LIKE '%".$_POST["search"]."%') AND delete_sale='1'"
        ));
        $db=$this->getdb($db);
        return $db;
    }
    public function getSaleById($id){
        $sale = $this->where('sales', ['id' => $id]);
        $sale = $this->getdb($sale);
        return $sale;
    }
    
    public function addSale($data){
        $this->add('sales', $data);
    }
    
    public function updateSale($data, $condition){
        $this->edit('sales', $data, $condition);
    }
    
    public function deleteSale($data, $condition) {
        $this->edit('sales', $data, $condition);
    }
}