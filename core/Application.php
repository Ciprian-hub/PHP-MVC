<?php

namespace app\core;
/**
 * Summary of Application
 * @author Ciprian_V
 * @package app\core
 */
class Application 
{
    public Request $request;
    public Router $router;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router ($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}