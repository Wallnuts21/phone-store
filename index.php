<?php
//Nhúng thư viện Model và Database
require_once 'model/master.php';
//Gọi URL dưới tên demo.com/?controller=yourController&action=yourAction
If(isset($_GET['controller'], $_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else{
    $controller = 'Home';
    $action = 'index';
}

if($controller ==  'Admin' || $controller == 'Login'){
        //    echo 'Xin chào Admin';
            //Giao diện Admin viết tại đây
            require_once "view/Admin/layout.php";
        }else{
        //    echo 'Bạn không phải Admin';
            require_once "view/layout.php";
        }
?>
