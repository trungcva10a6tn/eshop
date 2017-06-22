<?php
require_once "controllers/UserController.php";
function RouterPage($controller, $url){
    $view= new $controller();
    $view->$url();
}
if (isset($_GET['page'])){
    $page = $_GET['page'];
    RouterPage("UserController",$page);
}else{
    RouterPage("UserController","ListUser");
}
?>