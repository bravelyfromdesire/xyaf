<?php

namespace Xaf;

class Controller
{
    private $response;

    public function __construct()
    {

    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getParam(string $name, $default = 0)
    {
        $parameter = $default;

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        if ($httpMethod == 'GET' && isset($_GET[$name])) {
            $parameter = $_GET[$name];
        } elseif ($httpMethod == 'POST' && isset($_POST[$name])) {
            $parameter = $_POST[$name];
        }

        //formatted
        //Todo

        return $parameter;
    }

    public function getParams()
    {

    }

    public function answer($response)
    {
        if (!is_array($response) && !is_object($response)) {
            throw new \Exception('Response must be a key-value array or an object!');
        }
        $this->response = json_encode($response);
    }
}