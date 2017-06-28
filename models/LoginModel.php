<?php
require_once "Model.php";
class LoginModel extends Model
{
    function checkUser($data){
        $db=$this->where("users",$data);
        $db=$this->getdb($db);
        return $db;
    }
}