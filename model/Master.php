<?php

// use LDAP\Result;

class MasterModel
{
//    public static function __construct() // hàm khỏi tạo: không thể sử dụng từ khóa public cùng với static
    public function __construct()
    {
    }

    public function format_currency($n = 0) {
        $formatted = number_format($n, 0, ',', '.');
        return $formatted . '₫';
    }

    //Hàm được dùng để đổ dữ liệu ra bảng khi gán giá trị bảng
    public static function get_product_same($table, $column)
    {
        $db = new connect();
        $select = "SELECT * FROM $table WHERE $column";
        $result_sm = $db->getList($select);
        return $result_sm;
    }

    public static function get_by_id($table, $column, $value){
        $db = new connect();
        $select = "select * from $table where $column = '$value'";
        $result = $db->getInstance($select); # tra ve 1 dong => thay phuong thuc getList bang getInstance
        return $result;
    }
    
    public static function get_all_from($table)
    {
        $db = new connect();
        $select = "select * from $table";
        $result = $db->getList($select);
        return $result;
    }

    public function get_product_id($value) {
        $db = new connect();
        $select = "SELECT SANPHAM.*, DONGIA.*, MIN(HINHANH.TenHinhAnh) as TenHinhAnh
        FROM SANPHAM
        JOIN DONGIA ON SANPHAM.MaSP = DONGIA.MaSP
        JOIN HINHANH ON SANPHAM.MaSP = HINHANH.MaSP
        WHERE SANPHAM.MaSP = '$value' GROUP BY SANPHAM.MaSP";///////////////
        $result = $db->getInstance($select);
        return $result;
    }
    
    public function get_Images_By_PdId($MaSP) {
        $db = new connect();
        $select = "SELECT SANPHAM.MaSP, SANPHAM.TenSP, HINHANH.MaAnh, GROUP_CONCAT(HINHANH.TenHinhAnh) as images
        FROM SANPHAM
        LEFT JOIN HINHANH ON SANPHAM.MaSP = HINHANH.MaSP
        WHERE SANPHAM.MaSP = :MaSP
        GROUP BY SANPHAM.MaSP";

        $stmt = $db->prepare($select);
        $stmt->bindValue(':MaSP', $MaSP, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $result['images'] = explode(',', $result['images']);
            return $result;
        } else {
            return null; // Mã sản phẩm không tồn tại hoặc không có hình ảnh
        }
    }

    public function get_pd_with_img_price(){
        $db = new connect();
        $select = "SELECT SANPHAM.*, MIN(HINHANH.TenHinhAnh) as TenHinhAnh, DONGIA.GiaXuat
        FROM SANPHAM 
        JOIN HINHANH ON SANPHAM.MaSP = HINHANH.MaSP 
        JOIN DONGIA ON SANPHAM.MaSP = DONGIA.MaSP 
        GROUP BY SANPHAM.MaSP 
        ORDER BY SANPHAM.MaSP desc 
        LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }

    public function get_sale(){
        $db = new connect();
        $select = "SELECT SANPHAM.*, MIN(HINHANH.TenHinhAnh) as TenHinhAnh, DONGIA.GiaXuat, SANPHAM.MaSP
        FROM SANPHAM 
        JOIN HINHANH ON SANPHAM.MaSP = HINHANH.MaSP 
        JOIN DONGIA ON SANPHAM.MaSP = DONGIA.MaSP 
        GROUP BY SANPHAM.MaSP 
        ORDER BY DONGIA.GiaXuat asc LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }
    
    public static function PhanTrang(){
        $db = new connect();
        $query = "SELECT COUNT(MaSP) FROM SANPHAM ";
        $row = $db->getInstance($query);
        $total_records = $row[0];
        return $total_records;
    }
    
    public static function view_Phantrang($start, $limit){
        $db = new connect();
        $query = "SELECT SANPHAM.*, MIN(HINHANH.TenHinhAnh) as TenHinhAnh, DONGIA.GiaXuat
                  FROM SANPHAM 
                  JOIN HINHANH ON SANPHAM.MaSP = HINHANH.MaSP 
                  JOIN DONGIA ON SANPHAM.MaSP = DONGIA.MaSP 
                  GROUP BY SANPHAM.MaSP 
                  LIMIT $start, $limit";
        $result = $db->getlist($query);
        return $result;
    }
//////////////
    public static function sort_by_brand($value){
        $db = new connect();
        $query = "SELECT COUNT(MaSP) FROM SANPHAM WHERE MaTH = '$value'";
        $row = $db->getInstance($query);
        $total_records = $row[0];
        return $total_records;
    }

    public static function view_sort_by_brand($start, $limit, $value){
        $db = new connect();
        $query = "SELECT SANPHAM.*, MIN(HINHANH.TenHinhAnh) as TenHinhAnh, DONGIA.GiaXuat, THUONGHIEU.MaTH, THUONGHIEU.TenTH
                  FROM SANPHAM 
                  JOIN HINHANH ON SANPHAM.MaSP = HINHANH.MaSP 
                  JOIN DONGIA ON SANPHAM.MaSP = DONGIA.MaSP 
                  JOIN THUONGHIEU ON SANPHAM.MaTH = THUONGHIEU.MaTH 
                  WHERE THUONGHIEU.MaTH = :value
                  GROUP BY SANPHAM.MaSP  -- Thêm dòng này để nhóm kết quả theo sản phẩm
                  LIMIT :start, :limit";
    
        $stmt = $db->prepare($query);
        $stmt->bindParam(':value', $value, PDO::PARAM_STR);
        $stmt->bindParam(':start', $start, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function product_list(){
        $db = new connect();
        $query = "SELECT SANPHAM.*, NCC.*, THUONGHIEU.*
        FROM NCC JOIN SANPHAM ON NCC.MaNCC = SANPHAM.MaNCC JOIN THUONGHIEU ON THUONGHIEU.MaTH = SANPHAM.MaTH
        ORDER BY SANPHAM.MaSP asc";
        $result = $db->getlist($query);
        return $result;
    }

    ///////////////////Admin//////////////////////////

    public static function SuaSP($product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color, $value) {
        $db = new connect();
        $query = "UPDATE `SANPHAM` SET `TenSP` = ?, `MoTa` = ?, `MaDMSP` = ?, `MaNCC` = ?, `TGBH` = ?, `TTBH` = ?, `MaTH` = ?, `MauSac` = ? WHERE `MaSP` = ?";
        
        $stmt = $db->prepare($query);
        $stmt->bindParam(1, $product_name, PDO::PARAM_STR);
        $stmt->bindParam(2, $desc, PDO::PARAM_STR);
        $stmt->bindParam(3, $dmsp, PDO::PARAM_INT);
        $stmt->bindParam(4, $ncc, PDO::PARAM_INT);
        $stmt->bindParam(5, $tg_bh, PDO::PARAM_STR);
        $stmt->bindParam(6, $tt_bh, PDO::PARAM_STR);
        $stmt->bindParam(7, $brand, PDO::PARAM_INT);
        $stmt->bindParam(8, $color, PDO::PARAM_STR);
        $stmt->bindParam(9, $value, PDO::PARAM_INT);
    
        $result = $stmt->execute();
        return $result;
    }

    public static function SuaDG($gianhap, $giaxuat, $ngay_bd, $ghichu, $value) {
        $db = new connect();
        $query = "UPDATE `DONGIA` SET `GiaNhap` = ?, `GiaXuat` = ?, `NgayBD` = ?, `GhiChu` = ? WHERE `MaSP` = ?";
        
        $stmt = $db->prepare($query);
        $stmt->bindParam(1, $gianhap, PDO::PARAM_STR);
        $stmt->bindParam(2, $giaxuat, PDO::PARAM_STR);
        $stmt->bindParam(3, $ngay_bd, PDO::PARAM_STR);
        $stmt->bindParam(4, $ghichu, PDO::PARAM_STR);
        $stmt->bindParam(5, $value, PDO::PARAM_INT);
    
        $result = $stmt->execute();
        return $result;
    }

    public static function delete($table, $column, $value){
        $db = new connect();
        $query = "DELETE FROM $table WHERE $column = '$value'";
        $result = $db->exec($query);
    }

    public static function ThemSP($product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color, $gianhap, $giaxuat, $ngay_bd, $ghichu, $TenHinhAnh)
    {
        $db = new connect();
        $db->exec("START TRANSACTION");
    
        // Thêm vào bảng SANPHAM
        $stmt1 = $db->prepare("INSERT INTO SANPHAM (TenSP, MoTa, MaDMSP, MaNCC, TGBH, TTBH, MaTH, MauSac) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt1->execute([$product_name, $desc, $dmsp, $ncc, $tg_bh, $tt_bh, $brand, $color]);
    
        // Lấy MaSP của bản ghi vừa thêm vào
        $MaSP = $db->getLastInsertId();
    
        // Thêm vào bảng DONGIA
        $stmt2 = $db->prepare("INSERT INTO DONGIA (MaSP, GiaNhap, GiaXuat, NgayBD, GhiChu) VALUES (?, ?, ?, ?, ?)");
        $stmt2->execute([$MaSP, $gianhap, $giaxuat, $ngay_bd, $ghichu]);
    
        // Thêm vào bảng HINHANH
        $stmt3 = $db->prepare("INSERT INTO HINHANH (MaSP, TenHinhAnh) VALUES (?, ?)");
        $stmt3->execute([$MaSP, $TenHinhAnh]);
    
        // Kiểm tra và xác nhận
        if ($stmt1 && $stmt2 && $stmt3) {
            $db->exec("COMMIT");
            return true;
        } else {
            // Có lỗi, hủy
            $db->exec("ROLLBACK");
            return false;
        }
    }

    ///////////////////login_nv/////////////////////////////

    public function checkUser($table, $column1, $column2, $username, $password){
        $db = new connect();
        $select = "SELECT * FROM $table WHERE $column1 = :username AND $column2 = :password";
        $stmt = $db->prepare($select);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result != null){
            return true;
        } else {
            return false;
        }
    }

    public function check_Userid($column3, $table, $column1, $column2, $username, $password){
        $db = new connect();
        $select = "SELECT $column3 FROM $table WHERE $column1 = :username AND $column2 = :password";
        $stmt = $db->prepare($select);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    ////////////////login_kh/////////////////////

    public function check_kh($table, $column1, $column2, $email, $password){
        $db = new connect();
        $select = "SELECT * FROM $table WHERE $column1 = :email AND $column2 = :password";
        $stmt = $db->prepare($select);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result != null){
            return true;
        } else {
            return false;
        }
    }

    public function check_khid($column3, $table, $column1, $column2, $email, $password){
        $db = new connect();
        $select = "SELECT $column3 FROM $table WHERE $column1 = :email AND $column2 = :password";
        $stmt = $db->prepare($select);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    ////////////////////////đơn đặt hàng////////////////////

    public static function insert_order($customer_id, $total_price){
        $db = new connect();
        $db->exec("START TRANSACTION");

        try {
            // Thêm vào bảng phieudathang
            $stmt1 = $db->prepare("INSERT INTO PDH (MaKH, TongTien) VALUES (?, ?)");
            $stmt1->execute([$customer_id, $total_price]);

            // Lấy MaPDH của bản ghi vừa thêm vào
            $MaPDH = $db->getLastInsertId();

            // Thêm vào bảng ct_phieudathang
            $stmt2 = $db->prepare("INSERT INTO CTPDH (MaPDH, MaSP, SoLuong, GiaSP) VALUES (?, ?, ?, ?)");
            foreach ($_SESSION['cart'] as $product) {
                $MaSP = $product['id'];
                $SoLuong = $product['num_product'];
                $GiaSP = $product['giaxuat'];

                // Kiểm tra giá trị "MaSP" trước khi thêm vào CTPDH
                if ($MaSP !== null) {
                    $stmt2->execute([$MaPDH, $MaSP, $SoLuong, $GiaSP]);
                } else {
                    throw new Exception("Giá trị MaSP không hợp lệ.");
                }
            }

            // Xác nhận giao dịch
            $db->exec("COMMIT");
            return true;
        } catch (Exception $e) {
            // Có lỗi, hủy giao dịch và trả về false
            $db->exec("ROLLBACK");
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

        ////thiếu thời gian đặt hàng, màu sản phẩm, giao hàng, thanh toán ở csdl
    
    public static function view_order($id){ 
        $db = new connect();
        $select = "SELECT PDH.*, CTPDH.*, SANPHAM.*
                    FROM PDH
                    JOIN CTPDH ON PDH.MaPDH = CTPDH.MaPDH
                    JOIN SANPHAM ON CTPDH.MaSP = SANPHAM.MaSP
                    WHERE PDH.MaPDH = :MaPDH";

        $stmt = $db->prepare($select);
        $stmt->bindParam(':MaPDH', $id, PDO::PARAM_STR);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    ////////////////////khachhang////////////////

    public static function update_kh($customer_name, $customer_phone, $customer_email, $customer_address, $value){ 
        $db = new connect();
        $query = "UPDATE `KHACHHANG`
                    SET `TenKH` ='$customer_name' , `SDT` = '$customer_phone' , `Email` = '$customer_email', `DiaChi` = '$customer_address'
                    WHERE `MaKH` = '$value'";

        $result = $db->exec($query);
        return $result;
    }
}
?>