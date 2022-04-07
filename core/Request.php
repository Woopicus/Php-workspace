<?php

class Request 
{
    public static function uri()
    {

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    Public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}