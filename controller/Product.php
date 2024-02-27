<?php
    class Product{
        public static function detail(){
            require_once "model/Product.php";
            $model = new ModelProduct();
            $result = $model->get_product_by_id($_GET['id']);
            $result_img = $model->get_img($_GET['id']);
            $result1 = $model->get_pd_with_img_price();
            require_once 'view/Product/Product_detail.php';
        }

        public static function Dienthoai(){ 
            //Gọi modelHome từ ./model/home.php
            require_once "model/Product.php";
            $model = new ModelProduct();
            // //Gọi hàm lấy dữ liệu từ file ./model/home.php
            // $result = $model->getDuLieu();
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $result1 = $model->PhanTrang($_GET['page']);
            $limit = 9;
            $start = ($page - 1) * $limit;
            $total_page = ceil($result1 / $limit);
            $result = $model->view_Phantrang($start, $limit);
            $result_brand = $model->sort_Brand();
            require_once 'view/Product/Dienthoai.php';
        }

        public static function view_pd_by_brand(){
            require_once "model/Product.php";
            $model = new ModelProduct();
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $result1 = $model->sort_bybrand($_GET['page'], $_GET['id']);
            $limit = 9;
            $start = ($page - 1) * $limit;
            $total_page = ceil($result1 / $limit);
            $result_pt = $model->view_sort_bybrand($start, $limit, $_GET['id']);
            $result = $model->view_brand($_GET['id']);
            require_once 'view/Product/Sort_brand.php';
        }

        public static function Phukien(){
            require_once "view/Product/Phukien.php";
        }

///////////////////gio hang////////////////////

        public static function cart_detail(){
            require_once "view/Product/cart_detail.php";
        }

        public static function addcart(){
            $id = $_POST['id'];
            $product_name = $_POST['product_name'];
            $giaxuat = $_POST['giaxuat'];
            $img = $_POST['img'];
            $mausac = $_POST['mausac'];
            $num_product = (int)$_POST['num_product'];
    
            if(isset($_SESSION['cart'][$id])){ //lan 2 mua hang
                $cart[$id] = array(
                    "id" => $id,
                    "product_name" => $product_name,
                    "giaxuat" => $giaxuat,
                    "img" => $img,
                    "mausac" => $mausac,
                    "num_product" => (int)$_SESSION['cart'][$id]["num_product"] + $num_product,
                );
            } else {  //lan dau mua hang
                $cart[$id] = array(
                    "id" => $id,
                    "product_name" => $product_name,
                    "giaxuat" => $giaxuat,
                    "img" => $img,
                    "mausac" => $mausac,
                    "num_product" => $num_product,
                );
            }
            $_SESSION['cart'] [$id] = $cart[$id];
            header('Location:?controller=Product&action=cart_detail');
        }

        public static function updatecart(){
            if(isset($_POST['id'], $_POST['product_name'], $_POST['giaxuat'], $_POST['img'], $_POST['mausac'], $_POST['num_product1'])) {
                $id = $_POST['id'];
                $product_name = $_POST['product_name'];
                $giaxuat = $_POST['giaxuat'];
                $img = $_POST['img'];
                $mausac = $_POST['mausac'];
                $num_product = (int)$_POST['num_product1'];
                $action = $_POST['action'];
                // Kiểm tra sự tồn tại của giỏ hàng và sản phẩm
                if(isset($_SESSION['cart'][$id])) {
                    // Kiểm tra hợp lệ số lượng
                    if($num_product >= 0) {
                        $cart[$id] = array(
                            "id" => $id,
                            "product_name" => $product_name,
                            "giaxuat" => $giaxuat,
                            "img" => $img,
                            "mausac" => $mausac,
                            "num_product" => $num_product,
                        );
                        if ($action === 'minus' && $num_product == 0) {
                            // Xóa sản phẩm khi số lượng là 0
                            unset($_SESSION['cart'][$id]);
                        } else {
                            $_SESSION['cart'][$id] = $cart[$id];
                        }
                        // Cập nhật giỏ hàng
                        header('Location:?controller=Product&action=cart_detail');
                    } else {
                        // Xử lý lỗi số lượng không hợp lệ
                        unset($_SESSION['cart'][$id]);
                        header('Location:?controller=Product&action=cart_detail');
                    }
                } else {
                    // Xử lý lỗi sản phẩm không tồn tại trong giỏ hàng
                    // echo "Sản phẩm không tồn tại trong giỏ hàng!";
                    header('Location:?controller=Product&action=cart_detail');
                }
            } else {
                // Xử lý lỗi dữ liệu đầu vào không đủ
                // echo "Dữ liệu đầu vào không đủ!";
                header('Location:?controller=Product&action=cart_detail');
            }
        }

        public static function deletecart(){
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                unset($_SESSION['cart'][$id]);
                header('Location:?controller=Product&action=cart_detail');
            } else {
                // Xử lý lỗi nếu không có ID được truyền vào
                echo "ID không hợp lệ!";
            }
        }

    }
?>