<?php
spl_autoload_register(function($class) {
    /**
     * $class 将由命名空间加上类名
     */
    $class = str_replace('\\', '/', $class);
    $class .= '.php';
    include_once($class);
});