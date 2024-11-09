<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home.php',
    '/home' => 'controllers/home.php',
    '/login' => 'controllers/login.php',
    '/register' => 'controllers/register.php',
    '/menu' => 'controllers/menu.php',
    '/menu-desc' => 'controllers/menu-desc.php',
    '/cart' => 'controllers/cart.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort(404);
    }
}

function abort($code = 404) {
    http_response_code($code);
    require 'controllers/404.php';
    die();
}

routeToController($uri, $routes);
