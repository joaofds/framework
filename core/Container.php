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

    public static function pageNotFound()
    {
        if (file_exists( __DIR__ . "/../resources/Views/error/404.phtml")) {
            return require_once __DIR__ . "/../resources/Views/error/404.phtml";
        } else {
            echo "Ops... Erro 404 página não encontrada.";
        }
    }
}
