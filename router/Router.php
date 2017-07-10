<?php
function RouterPage($controller, $url) {
    require_once "controllers/" . $controller . ".php";
    $view = new $controller();
    $view->$url();
}
session_start();
if (isset($_SESSION["id_user"])) {
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
            case "dot-giam-gia":
            case "them-dot-giam-gia":
            case "sua-dot-giam-gia":
            case "xoa-dot-giam-gia":
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
            case "dot-giam-gia":
                $action="listSale";
                break;
            case "add-sale":
                $action = "addSale";
                break;
            case "sua-dot-giam-gia":
                $action = "editSale";
                break;
            case "xoa-dot-giam-gia":
                $action = "deleteSale";
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
        RouterPage($used_controller, $action);
    } else {
        RouterPage("UserController", "listUser");
    }
} else {
    RouterPage("LoginController", "login");
}
?>
