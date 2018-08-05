<?php

class IndexController extends Xaf\Controller
{
    public function getAction()
    {
        $bar = $this->getParam('foo');

        $this->answer(['bar' => $bar]);
    }
}