<?php
require_once "models/ProducessModel.php";
require_once "Controller.php";
class ProducessController extends Controller{
    function listProducess(){
        if (isset($_POST["login_new"])){

        }
        $this->view("header");
        $this->view("producess/list-producess");
    }
}