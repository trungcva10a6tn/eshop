<?php
function RouterPage($controller, $url) {
    require_once "controllers/" . $controller . ".php";
    $view = new $controller();
    $view->$url();
}
session_start();
if (isset($_SESSION["user"])) {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $used_controller = "";
        $action = "";
        switch ($page) {
            case "logout":
                $used_controller = "LoginController";
                break;
            case "thanh-vien":
            case "them-thanh-vien":
            case "sua-thanh-vien":
            case "xoa-thanh-vien":
                $used_controller = "UserController";
                break;
            case "san-pham":
            case "them-san-pham":
            case "sua-san-pham":
            case "xoa-san-pham":
                $used_controller="ProductController";
                break;
            default :
                $used_controller = "UserController";
                break;
        }
        switch ($page) {
            case "logout":
                $action = "logout";
                break;
            case "thanh-vien":
                $action = "listUser";
                break;
            case "them-thanh-vien":
                $action = "addUser";
                break;
            case "sua-thanh-vien":
                $action = "editUser";
                break;
            case "xoa-thanh-vien":
                $action = "deleteUser";
                break;
            case "san-pham":
                $action="listAllProduct";
                break;
            case "them-san-pham":
                $action="addProduct";
                break;
            case "sua-san-pham":
                $action="editProduct";
                break;
            case "xoa-san-pham":
                $action="deleteProduct";
                break;
            default :
                $action = $page;
                break;
        }
        RouterPage($used_controller, $action);
    } else {
        RouterPage("UserController", "listUser");
    }
} else {
    RouterPage("LoginController", "login");
}
?>
