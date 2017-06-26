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
    public function where($table,$data=array()){
        $string="";
        $stt=0;
        foreach ($data as $key=>$value){
            $string.= $stt==0 ? $key."= '".$value."'" : ", ".$key."= '".$value."'";
            $stt+=1;
        }
        $query = "SELECT * FROM $table WHERE $string";
        $db = $this->connectdb();
        $db = $db->query($query);
        return $db;
    }
    public function add($table,$data){
        $colum="";
        $string="";
        $stt=0;
        foreach ($data as $key=>$value){
            $colum.= $stt==0 ?  "'".$key."'":", ". "'".$key."'";
            $string.= $stt==0 ? "'".$value."'" : ", "."'".$value."'";
            $stt+=1;
        }
        $query = "INSERT INTO $table($colum) VALUES ($string)";
        //$db = $this->connectdb();
       // $db->exec($query);
    }
    public function edit($data,$id){
        $string="";
        $stt=0;
        foreach ($data as $key=>$value){
            $string.= $stt==0 ? $key."= '".$value."'" : ", ".$key."= '".$value."'";
            $stt+=1;
        }
        $query = "UPDATE book SET $string WHERE id_book = $id";
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