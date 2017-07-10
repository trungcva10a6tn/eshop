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
        if ($_SESSION["admin"] < 3 && $_SESSION["admin"] > 0){
            switch ($page) {
                case "logout":
                case "login":
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
                case "sale":
                case "add-sale":
                case "edit-sale":
                case "delete-sale":
                    $used_controller="SaleController";
                    break;
                case "hang":
                case "them-hang":
                case "sua-hang":
                case "xoa-hang":
                    $used_controller="ProducessController";
                    break;
                case "hoa-don":
                case "them-hoa-don":
                case "sua-hoa-don":
                case "xoa-hoa-don":
                    $used_controller="BillController";
                    break;
                default :
                    $used_controller = "UserController";
                    break;
            }
            switch ($page) {
                case "logout":
                    $action = "logout";
                    break;
                case "login":
                    $action = "login";
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
                case "sale":
                    $action="listSale";
                    break;
                case "add-sale":
                    $action = "create";
                    break;
                case "edit-sale":
                    $action = "edit";
                    break;
                case "delete-sale":
                    $action = "delete";
                    break;
                case "hang":
                    $action="listProducess";
                    break;
                case "them-hang":
                    $action="addProducess";
                    break;
                case "sua-hang":
                    $action="editProducess";
                    break;
                case "xoa-hang":
                    $action="deleteProducess";
                    break;
                case "hoa-don":
                    $action="listBill";
                    break;
                case "them-hoa-don":
                    $action="addBill";
                    break;
                case "sua-hoa-don":
                    $action="editBill";
                    break;
                case "xoa-hoa-don":
                    $action="deleteBill";
                    break;
                default :
                    $action = $page;
                    break;
            }
        }else{
            switch ($page) {
                case "logout":
                case "login":
                    $used_controller = "LoginController";
                    break;
                default :
                    $used_controller ="ClientController";
                    break;
            }
            switch ($page) {
                case "logout":
                    $action = "logout";
                    break;
                case "login":
                    $action = "login";
                    break;
                default :
                    $action = "listAll";
                    break;
            }
        }
        RouterPage($used_controller, $action);
    } else {
        if ($_SESSION["admin"] < 3 && $_SESSION["admin"] > 0){
            RouterPage("UserController", "listUser");
        }else{
            RouterPage("ClientController", "listAll");
        }

    }
} else {
    RouterPage("ClientController", "listAll");
}
?>
