<?php

require_once 'Model.php';
class SaleModel extends Model
{
    public function getAllSale(){
        $sales = $this->where('sales', ['delete_sale' => 1]);
        $sales = $this->getdb($sales);
        return $sales;
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