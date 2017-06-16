<?php
class Model {
    private $url = "mysql:host=localhost;dbname=eshopdb;charset=utf8";
    private $user = "root";
    private $pas = "";
    private function connectdb(){
        $db = new PDO($this->url, $this->user, $this->pas);
        return $db;
    }
    public function select($table){
        $query = "SELECT * FROM $table";
        $db = $this->connectdb();
        $db = $db->query($query);
        return $db;
    }
    public function join($table,$category){
        $query = "SELECT * FROM $table LEFT JOIN $category ON $table.category_id = $category.id_category";
        $db = new PDO($this->url, $this->user, $this->pas);
        $customerlist = $db->query($query);
        $list ="";
        $recos=0;
        foreach ($customerlist as $key){
            $stt=0;
            foreach ($key as $tk=>$value){
                if($stt % 2 === 0){
                    $list[$recos][$tk]=$value;
                }
                $stt++;
            }
            $recos++;
        }
        return $list;
    }
    public function where($table,$id){
        $query = "SELECT * FROM $table WHERE id_book=$id";
        $db = $this->connectdb();
        $db = $db->query($query);
        return $db;
    }
    public function add($data){
        $data_full="'null'";
        foreach ($data as $row=>$value){
            if ($row !=="ok"){
                $data_full.=",'$value'";
            }
        }
        $query = "INSERT INTO book VALUES ($data_full)";
        echo $query;
        $db = $this->connectdb();
        $db->exec($query);
    }
    public function edit($data,$id){
        $data_full="";
        foreach ($data as $row=>$value){
            if ($row !== "ok"){
                if ($row !== "category_id"){
                    $data_full.="$row = '$value',";
                }else{
                    $data_full.=" $row = '$value'";
                }

            }
        }
        $query = "UPDATE book SET $data_full WHERE id_book = $id";
        echo $query;
        $db = $this->connectdb();
        $db->exec($query);
    }
    public function delete($id){
        $query = "DELETE FROM `book` WHERE id_book=$id";
        $db = $this->connectdb();
        $db->exec($query);
    }
    public function getdb($data=null){
        if (!empty($data)){
            $list ="";
            $recos=0;
            foreach ($data as $row){
                $stt=0;
                foreach ($row as $key=>$value){
                    if($stt % 2===0){
                        $list[$recos][$key]=$value;
                    }
                    $stt++;
                }
                $recos++;
            }
            return $list;

        }
    }
}