<?php
    class ModelAdmin extends MasterModel{
        function get_product_by_id($id){
            return parent::get_product_id($id);
        }
        
        function get_img($id){
            return parent::get_Images_By_PdId($id);
        }
        
        function get_dmsp(){
            return parent::get_all_from("DMSP");
        }
        
        function get_ncc(){
            return parent::get_all_from("NCC");
        }
        
        function get_brand(){
            return parent::get_all_from("THUONGHIEU");
        }
        
        function get_all_img(){
            return parent::get_all_from("HINHANH");
        }

        function update_product($product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color, $id){
            return parent::SuaSP($product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color, $id);
        }

        function update_price($gianhap, $giaxuat, $ngay_bd, $ghichu, $id){
            return parent::SuaDG($gianhap, $giaxuat, $ngay_bd, $ghichu, $id);
        }

        function deletesp($id){
            return parent::delete('SANPHAM', 'MaSP', $id);
        }

        function get_order(){
            return parent::get_all_from('PDH');
        }

        function get_khachhang($id){
            return parent::get_by_id('KHACHHANG', 'MaKH', $id);
        }

        function khachhang_list(){
            return parent::get_all_from('KHACHHANG');
        }

        function get_order_byid($id){
            return parent::get_by_id('PDH', 'MaPDH', $id);
        }
    }
?>