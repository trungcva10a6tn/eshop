<?php
class Model {
    private $url = "mysql:host=localhost;dbname=e_shop;charset=utf8";
    private $user = "root";
    private $pas = "123456";
    private function connectdb(){
        $db = new PDO($this->url, $this->user, $this->pas);
        return $db;
    }
    protected function select($table){
        $query = "SELECT * FROM $table";
        $db = $this->connectdb();
        $db = $db->query($query);
        return $db;
    }
    protected function join($table,$category){
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
    protected function where($table,$data=array()){
        $string="";
        $stt=0;
        foreach ($data as $key=>$value){
            $string.= $stt==0 ? $key."='".$value."'" : ",".$key."='".$value."'";
            $stt+=1;
        }
        $query = "SELECT * FROM $table WHERE $string";
        $db = $this->connectdb();
        $db = $db->query($query);
        return $db;
    }
    protected function add($table,$data=array()){
        $colum="";
        $string="";
        $stt=0;
        foreach ($data as $key=>$value){
            $colum.= $stt==0 ?  "`".$key."`":",". "`".$key."`";
            $string.= $stt==0 ? "'".$value."'" : ","."'".$value."'";
            $stt+=1;
        }
        $query = "INSERT INTO $table ($colum) VALUES ($string)";
        $db = $this->connectdb();
        $db->exec($query);
        echo $query;
    }
    protected function edit($table,$data,$where=array()){
        $where_update="";
        $stt2=0;
        foreach ($where as $key=>$value){
            if ($value !== ""){
                $where_update.= $stt2==0 ? $key."='".$value."'" : ",".$key."='".$value."'";
            }
            $stt2+=1;
        }
        $string="";
        $stt=0;
        foreach ($data as $key=>$value){
            $string.= $stt==0 ? "`".$key."`"."='".$value."'" : ", "."`".$key."`"."= '".$value."'";
            $stt+=1;
        }
        $query = "UPDATE $table SET $string WHERE $where_update";
        $db = $this->connectdb();
        $db->exec($query);
    }
    protected function delete($id){
        $query = "DELETE FROM `book` WHERE id_book=$id";
        $db = $this->connectdb();
        $db->exec($query);
    }
    protected function getdb($data=null){
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