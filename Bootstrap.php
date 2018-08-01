<?php
/**
 * 所有以_init开头的方法都会按其被定义的顺序被调用
 * 这些方法都接受一个参数：Yaf_Dispatcher $dispatcher
 */
class Bootstrap extends Yaf\Bootstrap_Abstract
{
    /**
     * 注册插件
     */
    public function _initPlugins(Yaf\Dispatcher $dispatcher)
    {
        //register some plugins
    }

    /**
     * 加载路由
     */
    public function _initRoute(Yaf\Dispatcher $dispatcher)
    {
        //init some routes
        var_dump($dispatcher);die;
    }
}