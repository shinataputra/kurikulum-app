<?php
session_start();

spl_autoload_register(function ($class) {
    $paths = [
        __DIR__ . '/../core/' . $class . '.php',
        __DIR__ . '/../app/controller/' . $class . '.php',
        __DIR__ . '/../app/model/' . $class . '.php',
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Default ke fitur user biasa, bukan login
$url = $_GET['url'] ?? 'LandingPage/show';


$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . 'Controller';
$methodName = $url[1] ?? 'index';

if (class_exists($controllerName)) {
    $controller = new $controllerName();

    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        echo "Method <b>$methodName</b> tidak ditemukan di controller <b>$controllerName</b>.";
    }
} else {
    echo "Controller <b>$controllerName</b> tidak ditemukan.";
}
