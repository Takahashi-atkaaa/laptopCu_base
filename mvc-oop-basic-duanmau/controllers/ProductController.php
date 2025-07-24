<?php
// controllers/ProductController.php

require_once './models/ProductModel.php'; // ✅ Đảm bảo model được nạp

class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        // Nếu bạn cần kết nối database từ env.php:
        require_once './env.php';
        $this->modelProduct = new ProductModel($conn); // truyền kết nối DB nếu model cần
    }

    public function Home()
    {
        $title = "Đây là trang chủ nhé hahaa";
        $thoiTiet = "Hôm nay trời có vẻ là mưa";

        // Nếu có dữ liệu từ DB:
        $products = $this->modelProduct->getAllProducts();

        require_once './views/trangchu.php';
    }
}
