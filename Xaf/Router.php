<?php

namespace Xaf;

class Router
{
    public function __construct()
    {

    }

    /**
     * 解析请求，然后根据配置找到路由到合适的控制器、方法
     * @param void
     * @return array e.g.[$controller, $action]
     */
    public function route()
    {
        $controller = 'Index';
        $action = 'Index';

        return [$controller, $action];
    }
}