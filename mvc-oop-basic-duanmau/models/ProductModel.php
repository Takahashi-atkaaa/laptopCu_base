<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class ProductModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllProduct()
    {
        $stmt = $this->conn->prepare("SELECT * FROM `Product`");
        $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}
