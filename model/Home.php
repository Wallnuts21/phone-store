<?php
//Kế thừa hàm get_all_from($table) từ file master.php
class ModelHome extends MasterModel{
    function getDuLieu(){
        return parent::get_all_from('SANPHAM');
    }

    function getProduct(){
        return parent::get_new_product('SANPHAM', 'MaSP');
    }

    function tt_khachhang($id){
        return parent::get_by_id('KHACHHANG', 'MaKH', $id);
    }

    function update_khachhang($customer_name, $customer_phone, $customer_email, $customer_address, $id){
        return parent::update_kh($customer_name, $customer_phone, $customer_email, $customer_address, $id);
    }
}
?>