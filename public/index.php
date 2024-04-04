<?php

require_once '../resources/views/layout/head.html';
require_once '../resources/views/layout/header.html';

$routes = [
    '/' => '../resources/views/home.html',
    '404' => '../resources/views/errors/404.html',
];

$page = filter_input(INPUT_GET, '', FILTER_SANITIZE_SPECIAL_CHARS);
$page = $page ?? '/';
$page = isset($routes[$page]) ? $routes[$page] : '404';
require_once $page;

require_once '../resources/views/layouts/footer.php';