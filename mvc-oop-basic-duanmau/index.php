<?php 
// Require toàn bộ các file khai báo môi trường, thực thi,...(không require view)

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/ProductController.php';

// Require toàn bộ file Models
require_once './models/ProductModel.php';

// Route
$act = $_GET['act'] ?? '/';


// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'=>(new ProductController())->Home(),// 1.vao controller 


};












require_once './commons/env.php'; // Import thông tin cấu hình

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("❌ Kết nối thất bại: " . $conn->connect_error);
}
echo "✅ Kết nối thành công đến database!";
$conn->close();
?>
