<?php

namespace Core;

/**
 * Classe que irá instanciar todos os nossos controllers
 * através do método run() presente em  Route. Brilhante!
 */
class Container  
{
    public static function newController($controller)
    {
        $controller = "App\\Controllers\\" . $controller;
        return new $controller;
    }
}
