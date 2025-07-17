<?php
require_once 'controllers/HomeController.php';

$controller = new HomeController();

$page = $_GET['page'] ?? 'home';

switch($page) {
    case 'home':
        $controller->index();
        break;
    case 'about':
        $controller->about();
        break;
    case 'menu':
        $controller->menu();
        break;
    case 'book':
        $controller->book();
        break;
    default:
        echo "404 - Not Found";
}
