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
        case "sua-thanh-vien":
            $action="editUser";
            break;
        case "san-pham":
            $used_controller="ProductController";
            $action="listAllProduct";
            break;
        case "them-san-pham":
            $used_controller="ProductController";
            $action="addProduct";
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