

// class HomeController
// {
//     public function index() 
//     {
//         require_once PATH_VIEW . 'main.php';
//     }
// }
<?php
class HomeController {
    public function index() {
        require_once 'views/home.php';
    }

    public function about() {
        require_once 'views/about.php';
    }

    public function menu() {
        require_once 'views/menu.php';
    }

    public function book() {
        require_once 'views/book.php';
    }
}
