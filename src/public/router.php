<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => __DIR__ . '/../controllers/index.php',
    '/explore' => __DIR__ . '/../controllers/explore.php',
    '/services' => __DIR__ . '/../controllers/services.php',
    '/propos' => __DIR__ . '/../controllers/about.php',
    '/contact' => __DIR__ . '/../controllers/contact.php',
    '/sign-in' => __DIR__ . '/../controllers/sign-in.php',
    '/sign-up' => __DIR__ . '/../controllers/sign-up.php',
    '/sign-out' => __DIR__ . '/../controllers/sign-out.php',
    '/profile' => __DIR__ . '/../controllers/profile.php',
    '/admin' => __DIR__ . '/../controllers/admin.php',
];

function route_to_controller($uri, $routes ,$params = [])
{
    if (array_key_exists($uri, $routes)) {
        extract($params);
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require __DIR__ . '/../views/' . $code . '.view.php';
    die();
}

route_to_controller($uri, $routes,[
    'data' => $data ?? null,
    'session' => $session ?? null
]);
