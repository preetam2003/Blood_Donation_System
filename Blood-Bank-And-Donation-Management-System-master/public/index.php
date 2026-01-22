<?php

// Autoloader
spl_autoload_register(function ($class) {
    // Convert namespace to full file path
    $prefix = 'src\\';
    $base_dir = __DIR__ . '/../src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Load Config
$config = require __DIR__ . '/../config/database.php';

// Initialize Router
require __DIR__ . '/../src/Core/Router.php';
$router = new Router();

// Define Routes
$router->get('/', 'HomeController@index');
$router->get('/about', 'HomeController@about');
$router->get('/why-donate', 'HomeController@whyDonate');
$router->get('/contact', 'ContactController@index');
$router->get('/donate', 'DonorController@create');
$router->post('/donate', 'DonorController@store');
$router->get('/need-blood', 'BloodController@index');

// Dispatch
$router->route($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
