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
    protected array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
    
    }
    
}