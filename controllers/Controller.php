<?php
class Controller {
    public function view ($url="",$data_in=null,$data_erros=null){
        $data_erro=$data_erros;
        $data=$data_in;
        include "views/".$url.".php";
    }
}