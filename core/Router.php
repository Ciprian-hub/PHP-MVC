<?php

namespace app\core;

/**
 * Summary of Router
 * @author Ciprian_V
    * @package app\core
 * @copyright (c) 2023
 */
class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false) {
            echo "Not found";
            exit;
        }
//        echo '<pre>';
//        var_dump($callback);
//        echo '<pre>';
//        exit;
        echo call_user_func($callback);
    }
    
}