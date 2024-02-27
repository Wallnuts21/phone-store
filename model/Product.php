<?php
    class ModelProduct extends MasterModel{
        function get_product_by_id($id){
            return parent::get_product_id($id);
        }
        
        function get_img($id){
            return parent::get_Images_By_PdId($id);
        }

        function sort_Brand(){
            return parent::get_all_from("THUONGHIEU");
        }

        function view_sort_bybrand($start, $limit, $id){
            return parent::view_sort_by_brand($start, $limit, $id);
        }
        
        function sort_bybrand($page, $id){
            return parent::sort_by_brand($page, $id);
        }
        
        function view_brand($id){
            return parent::get_by_id("THUONGHIEU", "MaTH", $id);
        }
    }
?>