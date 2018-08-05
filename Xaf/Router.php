<?php

namespace Xaf;

class Router
{
    public function __construct()
    {

    }

    /**
     * 解析请求，然后根据配置找到合适的控制器、方法
     * {host}/controller
     * 支持GET、POST、PUT、DELETE
     * @param void
     * @return array e.g.[$controller, $action]
     */
    public function route()
    {
        //Default
        $controller = 'Index';
        $action = 'getAction';
        $method = 'get';

        //Controller & Action
        $requestUri = $_SERVER['REQUEST_URI'];
        $what = explode('.', $requestUri);
        if ($what) {
            $what = explode('/', trim($what[0], '/'));
            if ($what) {
                $controller = ucfirst($what[0]);
                $method = strtolower($_SERVER['REQUEST_METHOD']);
                if (isset($what[1])) {
                    $action = $method . ucfirst($what[1]);
                } else {
                    $action = $method . 'Action';
                }
            }
        }

        return [$controller, $action];
    }
}