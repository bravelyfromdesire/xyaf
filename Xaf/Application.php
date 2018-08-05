<?php

namespace Xaf;

use Xaf\View;
use Xaf\Router;
use Xaf\Dispatcher;

class Application
{
    /**
     * 构造
     */
    public function __construct()
    {

    }

    /**
     * 启动程序
     */
    public function run()
    {
        //谁来解析请求
        $router = new Router();
        list($controller, $action) = $router->route();

        //分发请求
        $dispatcher = new Dispatcher($controller, $action);
        $response = $dispatcher->dispatch();

        //谁来准备页面
        $view = new View();
        $view->init();

        //响应
        $view->display($response);
    }

    /**
     * 析构
     */
    public function __destruct()
    {

    }
}