<?php
class Home{
    public static function index(){ # ham khong co tham so
//        function index($a){ # ham co tham so
//            echo "Hello, World"; # ham khong co ket qua tra ve
//            return false; # ham co ket qua tra ve
        require_once "model/Home.php";
        $model = new ModelHome();
        $result = $model->get_pd_with_img_price();
        $result1 = $model->get_sale();
        require_once "view/Home/index.php";
    }

    public static function dathang(){
        require_once "model/Home.php";
        $model = new ModelHome();

        if(isset($_SESSION['check_kh'])){
            $id = $_SESSION['check_kh'];
            //lấy thông tin khách hàng
            $result = $model->tt_khachhang($id);
        }
        require_once "view/Home/dathang.php";
    }

    public static function Order(){
        if(isset($_POST['submit'])){
            $customer_id = $_POST['customer_id'];
            $total_price = $_POST['total_price'];

            $img = $_POST['img'];
            $customer_name = $_POST['customer_name'];
            $customer_phone = $_POST['customer_phone'];
            $customer_email = $_POST['customer_email'];
            $customer_address = $_POST['customer_address'];
            
            require_once "model/Home.php";
            $model = new modelHome();
            $result = $model->insert_order($customer_id, $total_price);

            //tạo session order
            $_SESSION['order'] = array(
                'customer_name' => $customer_name,
                'customer_phone' => $customer_phone,
                'customer_email' => $customer_email,
                'customer_address' => $customer_address,
                'img' => $img
            );

            if ($result) {
                header('Location:?controller=Home&action=success');
            } else {
                // Xử lý khi có lỗi trong quá trình đặt hàng
                echo lỗi;
                // header('Location:?controller=Product&action=error');
            }
        }
    }

    public static function success(){
        require_once "model/Home.php";
        $model = new modelHome();
        if(isset($_SESSION['check_kh'])){
            $customer_id = $_SESSION['check_kh'];
            $result = $model->view_order($customer_id);
        }
        require_once "view/Home/success.php";
    }

    //////////////////khachhang////////////////////

    public static function Kh_update(){
        require_once "model/Home.php";
        $model = new ModelHome();

        if(isset($_SESSION['check_kh'])){
            $id = $_SESSION['check_kh'];
            //lấy thông tin khách hàng
            $result = $model->tt_khachhang($id);
        }
        require_once "view/home/khachhang_update.php";
    }

    public static function update_Kh(){
        if(isset($_POST['submit'])){

            $id = $_POST['customer_id'];
            $customer_name = $_POST['customer_name'];
            $customer_phone = $_POST['customer_phone'];
            $customer_email = $_POST['customer_email'];
            $customer_address = $_POST['customer_address'];
            
            if(empty($customer_name) || empty($customer_phone) || empty($customer_email) || empty($customer_address)){
                echo 'Lỗi';
            } else {
                require_once "model/Home.php";
                $model = new ModelHome();
                $result_up = $model->update_khachhang($customer_name, $customer_phone, $customer_email, $customer_address, $id);
                header('Location:?controller=Home&action=dathang');
                
            }
        }
    }
}
?>
