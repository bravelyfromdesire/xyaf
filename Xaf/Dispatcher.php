<?php

namespace Xaf;

class Dispatcher
{
    private $controller;

    private $action;

    public function __construct(string $controller, string $action)
    {
        $this->controller = $controller;
        $this->action = $action;
    }

    /**
     * 分发请求
     * @return mixed response
     */
    public function dispatch()
    {

    }
}