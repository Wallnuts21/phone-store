

<?php
//Gọi tầng controller
require_once 'controller/'.$controller.'.php';

//Gọi Database
require_once 'config/db.php';

//Dùng switch để hiện giao diện bằng URL. VD: demo.com/?controller=home
switch($controller){
    case 'Login':
        $controller = new Login();
        break;
    case 'Admin':
        $controller = new Admin();
        break;
}
$controller->{ $action }();
?>