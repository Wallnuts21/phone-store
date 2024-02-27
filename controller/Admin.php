<?php
    class Admin{
        public static function index(){
            if(isset($_SESSION['check']) && $_SESSION['check'] == 'admin'){
                require_once "view/Admin/index.php";
            }
        }

        public static function Product_list(){
            require_once "model/Admin.php";
            $model = new ModelAdmin();
            $result = $model->product_list();
            require_once "view/Admin/Product_list.php";
        }

        public static function error(){
            require_once "view/Admin/error.php";
        }

        public static function Product_detail(){
            require_once "model/Admin.php";
            $model = new ModelAdmin();
            $result = $model->get_product_by_id($_GET['id']);
            $result_dmsp = $model->get_dmsp();
            $result_ncc = $model->get_ncc();
            $result_brand = $model->get_brand();
            $result_img = $model->get_img($_GET['id']);
            require_once "view/Admin/Product_detail.php";
        }

        public static function update_product(){
            if(isset($_POST['submit'])){

                $id = $_POST['id'];
                $product_name = $_POST['product_name'];
                $desc = $_POST['desc'];
                $dmsp = $_POST['dmsp'];
                $ncc = $_POST['ncc'];
                $tg_bh = $_POST['tg_bh'];
                $tt_bh = $_POST['tt_bh'];
                $brand = $_POST['brand'];
                $gianhap = $_POST['gianhap'];
                $giaxuat = $_POST['giaxuat'];
                $ngay_bd = $_POST['ngay_bd'];
                $ghichu = $_POST['ghichu'];
                $color = $_POST['color'];
                
                if(empty($product_name) || empty($desc) || empty($dmsp) || empty($ncc) || empty($tg_bh) || empty($tt_bh) || empty($brand) || empty($gianhap) || empty($giaxuat) || empty($ngay_bd) || empty($color)){
                    // header('Location:?controller=Admin&action=error');
                    echo "ID không hợp lệ!";
                } else {
                    require_once "model/admin.php";
                    $model = new ModelAdmin();
                    $result = $model->update_product($product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color, $id);
                    $result_price = $model->update_price($gianhap, $giaxuat, $ngay_bd, $ghichu, $id);
                    header('Location:?controller=Admin&action=Product_list');
                }
            }
        }

        public static function insert_product(){
            require_once "model/Admin.php";
            $model = new ModelAdmin();
            $result_dmsp = $model->get_dmsp();
            $result_ncc = $model->get_ncc();
            $result_brand = $model->get_brand();
            require_once "view/Admin/insert_product.php";
        }

        public static function ins_product(){
            if(isset($_POST['submit'])){

                $product_name = $_POST['product_name'];
                $desc = $_POST['desc'];
                $dmsp = $_POST['dmsp'];
                $ncc = $_POST['ncc'];
                $tg_bh = $_POST['tg_bh'];
                $tt_bh = $_POST['tt_bh'];
                $brand = $_POST['brand'];
                $gianhap = $_POST['gianhap'];
                $giaxuat = $_POST['giaxuat'];
                $ngay_bd = $_POST['ngay_bd'];
                $ghichu = $_POST['ghichu'];
                $color = $_POST['color'];
                $TenHinhAnh = $_FILES['img']['name'];
                
                if(empty($product_name) || empty($desc) || empty($dmsp) || empty($ncc) || empty($tg_bh) || empty($tt_bh) || empty($brand) || empty($gianhap) || empty($giaxuat) || empty($ngay_bd) || empty($TenHinhAnh) || empty($color)){                
                    header('Location:?controller=Admin&action=error');
                } else {
                    
                    // Kiểm tra và di chuyển tệp hình ảnh vào thư mục
                    $tmp_name = $_FILES['img']['tmp_name'];
                    $path = 'C:\xampp\htdocs\shop\upload';
                    $name = $path . DIRECTORY_SEPARATOR . $_FILES['img']['name'];

                    if (!move_uploaded_file($tmp_name, $name)) {
                        header('Location:?controller=Admin&action=error');
                        exit;
                    }
                
                    // Thực hiện thêm sản phẩm
                    require_once "model/Admin.php";
                    $model = new ModelAdmin();
                    $result = $model->ThemSP($product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color, $gianhap, $giaxuat, $ngay_bd, $ghichu, $TenHinhAnh);
                    if ($result) {
                        header('Location:?controller=Admin&action=Product_list');
                        exit;
                    } else {
                        header('Location:?controller=Admin&action=error');
                        exit;
                    }
                }
            }
        }

        public static function delete(){
            require_once "model/admin.php";
            $model = new ModelAdmin();
            $result = $model->deletesp($_GET['id']);
            header('Location:?controller=Admin&action=Product_list');
        }

    ///////////////////đơn hàng/////////////////////

        public static function order_list(){
            require_once "model/Admin.php";
            $model = new ModelAdmin();
            $result = $model->get_order();
            require_once "view/Admin/order_list.php";
        }

        public static function order_detail(){
            require_once "model/Admin.php";
            $model = new ModelAdmin();
            $result = $model->view_order($_GET['id']);
            $result1 = $model->get_order_byid($_GET['id']);
            $result_kh = $model->get_khachhang($_GET['kh_id']);
            require_once "view/Admin/order_detail.php";
        }

    ////////////////////khách hàng///////////////////////////

        public static function customer_list(){
            require_once "model/Admin.php";
            $model = new ModelAdmin();
            $result = $model->khachhang_list();
            require_once "view/Admin/khachhang_list.php";
        }
    }
?>