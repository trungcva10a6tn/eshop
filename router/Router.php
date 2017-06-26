<?php
function RouterPage($controller, $url){
    require_once "controllers/".$controller.".php";
    $view= new $controller();
    $view->$url();
}
if (isset($_GET['page'])){
    $page = $_GET['page'];
    $used_controller="UserController";
    $action="listUser";
    switch ($page){
        case "thanh-vien":
            $action="listUser";
            break;
        case "them-thanh-vien":
            $action="addUser";
            break;
        default :
            $action=$page;
            break;
    }
    RouterPage($used_controller,$action);
}else{
    RouterPage("UserController","listUser");
}
?>