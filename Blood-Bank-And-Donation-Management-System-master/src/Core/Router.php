<?php

class Router
{
    protected $routes = [];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function route($uri, $method)
    {
        // Strip query string for matching
        $uri = parse_url($uri, PHP_URL_PATH);

        // Remove trailing slash if not root
        if ($uri !== '/' && substr($uri, -1) === '/') {
            $uri = rtrim($uri, '/');
        }

        // Default to / if empty (e.g. index.php)
        if (empty($uri)) {
            $uri = '/';
        }

        if (array_key_exists($uri, $this->routes[$method])) {
            $action = $this->routes[$method][$uri];
            $this->callAction($action);
        } else {
            $this->abort();
        }
    }

    protected function callAction($action)
    {
        [$controller, $method] = explode('@', $action);
        $controller = "src\\Controllers\\{$controller}";

        // Autoloading handles the require, but we need to instantiate
        if (class_exists($controller)) {
            $controllerInstance = new $controller();
            $controllerInstance->$method();
        } else {
            die("Controller class $controller not found.");
        }
    }

    protected function abort($code = 404)
    {
        http_response_code($code);
        require "../views/{$code}.php"; // create a 404.php later
        die();
    }
}
