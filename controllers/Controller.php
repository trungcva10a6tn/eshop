<?php
class Controller {
    public function view ($url="",$data=null,$data_erro=null){
        include "views/".$url.".php";
    }
}