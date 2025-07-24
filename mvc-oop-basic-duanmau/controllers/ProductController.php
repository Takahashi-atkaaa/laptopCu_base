<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;//2. vao model

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }


    public function Home()
    {
      $HomeProduct=$this->modelProduct->getAllProduct();
        
        require_once './views/trangchu.php';
    }
}
