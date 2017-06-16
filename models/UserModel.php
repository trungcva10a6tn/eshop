<?php
require_once "Model.php";
class UserModel extends Model {
    function ListUserdb(){
        $db=$this->select("users");
        $db=$this->getdb($db);
        return $db;
    }
}