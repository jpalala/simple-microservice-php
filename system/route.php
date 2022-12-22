<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require ROOT_DIR . 'views/home/index.php';
        break;
    case '' :
        require ROOT_DIR . 'views/home/index.php';
        break;
    case '/about' :
        require ROOT_DIR . 'views/about/index.php';
        break;
    default:
        http_response_code(404);
        require ROOT_DIR . '/views/404.php';
        break;
}
