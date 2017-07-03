<?php

class Controller {

    public function view($url = "", $data = null, $data_erro = null) {
        require_once "views/" . $url . ".php";
    }

    public function db($database) {
        $conectdb = new $database();
        return $conectdb;
    }

}
