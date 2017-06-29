<?php
function RouterPage($controller, $url) {
    require_once "controllers/" . $controller . ".php";
    $view = new $controller();
    $view->$url();
}
session_start();
if (!isset($_SESSION["user"])) {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $used_controller = "UserController";
        $action = "listUser";
        switch ($page) {
            case "logout":
                $used_controller = "LoginController";
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
                $used_controller="ProductController";
                $action="listAllProduct";
                break;
            case "them-san-pham":
                $used_controller="ProductController";
                $action="addProduct";
                break;
            case "sua-san-pham":
                $used_controller="ProductController";
                $action="editProduct";
                break;
            case "xoa-san-pham":
                $used_controller="ProductController";
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
