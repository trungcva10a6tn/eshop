<?php
require_once "models/ProducessModel.php";
require_once "Controller.php";
class ProducessController extends Controller{
    private $erro=[];
    function listProducess(){
        if (isset($_POST["login_new"])){
        }
        $data=$this->db("ProducessModel");
        $data=$data->listProducess();
        $this->view("header");
        $this->view("producess/list-produces",$data);
    }
    function addProducess(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "name_produces"=>$_POST["name_produces"]
                );
                $db=$this->db("ProducessModel");
                $db->addProducess($data);
                header('Location: ?page=hang');
            }
        }
        $this->view("header");
        $this->view("producess/add-produces",null, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    function editProducess(){
        if (isset($_POST["sen_add"])){
            if ($this->checkData($_POST)){
                $data="";
                $data=array(
                    "name_produces"=>$_POST["name_produces"]
                );
                $db=$this->db("ProducessModel");
                $db->editProducess($data);
                header('Location: ?page=hang');
            }
        }else{
            $data=$this->db("ProducessModel");
            $data=$data->getProducess($_GET["id"])[0];
        }
        $this->view("header");
        $this->view("producess/add-produces",isset($data)?$data:null, isset($_POST["sen_add"])? $_POST: null);
        if (isset($this->erro["type"])){
            $this->view("erro-all",$this->erro);
        }
    }
    function deleteProducess(){
        if (isset($_POST["delete"])){
            $data=array(
                "delete_produces"=>0
            );
            $db=$this->db("ProducessModel");
            $db->editProducess($data);
            header('Location: ?page=hang');
        }
        $data_produces="";
        $data_produces=$this->db("ProducessModel");
        $data_produces= $data_produces->getIdUser($_GET["id"]);
        $data_produces=$data_produces[0];
        $this->view("header");
        $this->view("producess/delete-produces",$data_produces);
    }
    function checkData($data){
        if (!preg_match("/^.{5,}$/", $data['name_produces'])){
            $this->erro["type"]=1;
            $this->erro["mes"]="Lỗi Định Dạng Tên";
            return false;
        }
        return true;
    }
}