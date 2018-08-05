<?php

namespace Xaf;

use ReflectionClass;

class Dispatcher
{
    private $controller;

    private $controllerClass;

    private $action;

    public function __construct(string $controller, string $action)
    {
        $this->action = $action;
        $this->controller = $controller;

        $this->controllerClass = $controller . 'Controller';
    }

    /**
     * 分发请求
     * @return mixed response
     */
    public function dispatch()
    {
        include(APP_PATH . '/controllers/' . $this->controller . '.php');
        $controller = new $this->controllerClass;
        $action = $this->action;
        $controller->$action();
    }
}