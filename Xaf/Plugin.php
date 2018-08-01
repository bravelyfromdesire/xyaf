<?php

namespace Xaf;

abstract class Plugin
{
    /**
     * 路由前被调用
     */
    abstract public function routeStartup();

    /**
     * 路由后被调用
     */
    abstract public function routeShutdown();
}