
<?php
class Connect {
    // Khởi tạo thuộc tính cho lớp connect
    public $db = null;
    private $pdo;

    // Kết nối database
    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=mutilshop';
        $user = 'root';
        $pass = '';

        // Khởi tạo thuộc tính $pdo
        $this->pdo = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        // Gán $pdo cho $db để hỗ trợ ngược (nếu cần)
        $this->db = $this->pdo;
    }

    // Lấy dữ liệu database
    public function getlist($select) {
        $result = $this->db->query($select);
        return $result;
    }

    // Tạo phương thức câu lệnh insert, update, delete
    public function exec($query) {
        $result = $this->db->exec($query);
        return $result;
    }

    public function getInstance($select) {
        $results = $this->db->query($select);
        $result = $results->fetch();
        return $result;
    }

    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }

    public function getLastInsertId(){
        return $this->pdo->lastInsertId();
    }
}
?>
