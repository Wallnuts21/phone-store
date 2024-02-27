<?php
    class ModelLogin extends MasterModel{
        //tao ham check
        function check_user($username, $password) {
            //lay gia tri tu username vaf password tu form dang nhap
            return parent::checkUser('NHANVIEN', 'TaiKhoan', 'MatKhau', $username, $password);
        }

        function userid($username, $password){
            return parent::check_Userid('NHOM', 'NHANVIEN', 'TaiKhoan', 'MatKhau', $username, $password);
        }

        function check_khachhang($email, $password) {
            return parent::check_kh('KHACHHANG', 'Email', 'MatKhau', $email, $password);
        }

        function user_khid($email, $password){
            return parent::check_khid('MaKH', 'KHACHHANG', 'Email', 'MatKhau', $email, $password);
        }

    }
?>