<?php
require_once "controllers/UserController.php";
if (isset($_GET['page'])){
    $page = $_GET['page'];
    if($page === 'ListUser'){
        $view= new UserController();
        $view->ListUser();
    }
    if($page === 'AddUser'){

    }

}else{
    $view= new UserController();
    $view->ListUser();
}
?>