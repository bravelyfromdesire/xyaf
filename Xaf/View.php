<?php

namespace Xaf;

class View
{
    /**
     * 准备好HTML的头部、底部，等待填充Body内容
     * @param void
     * @return void
     */
    public function init()
    {

    }

    /**
     * 渲染页面
     * @param mixed $body
     * @return void
     */
    public function display($body = 'Hello, World :-)')
    {
        echo $body;
    }
}