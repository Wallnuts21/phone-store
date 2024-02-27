<?php

class Login
{
    public static function login(){
        require_once "view/Admin/Login.php";
    }

    public static function slogin(){
        $username = $_POST['username']; 
        $password = MD5($_POST['password']);
        require_once "model/Login.php";
        $user = new ModelLogin();

        if($user->check_user($username, $password)){
            $result = $user->userid($username, $password);
            $userid = $result['NHOM'];
            //dang nhap thanh cong
            //xet admin
            $_SESSION['check'] = $userid;
            // echo 'thanhf cong';
            header('Location:?controller=Home&action=index');
        } else {
            $_SESSION['error_login'] = "Sai tài khoản hoặc mật khẩu";
            header('Location:?controller=Admin&action=error');
        }
    }

    public static function logout(){
        unset($_SESSION['check'], $_SESSION['check_kh']);
        header('Location:?controller=Home&action=index');
    }

    public static function login_kh(){
        require_once "view/Admin/Login_kh.php";
    }

    public static function slogin_kh(){
        $email = $_POST['email']; 
        $password = MD5($_POST['password']);
        require_once "model/Login.php";
        $user_kh = new ModelLogin();

        if($user_kh->check_khachhang($email, $password)){
            $result = $user_kh->user_khid($email, $password);
            $user_khid = $result['MaKH'];
            //dang nhap thanh cong
            //xet admin
            $_SESSION['check_kh'] = $user_khid;
            // echo 'thanhf cong';
            header('Location:?controller=Home&action=index');
        } else {
            $_SESSION['error_login'] = "Sai tài khoản hoặc mật khẩu";
            header('Location:?controller=Admin&action=error');
        }
    }
}

?>