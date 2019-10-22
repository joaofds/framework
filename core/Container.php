<?php

namespace Core;

class Container
{
    /**
     * Método que irá instanciar todos os nossos controllers
     * através do método run() presente em  Route. Brilhante!
     */
    public static function newController($controller)
    {
        $controller = "App\\Controllers\\" . $controller;
        return new $controller;
    }

    //Método que pega nossas models
    public static function getModel($model)
    {
        $objModel = "\\App\\Models\\" . $model;
        return new $objModel(DB::getCon());
    }

    //Método que renderiza página de erro 404.
    public static function pageNotFound()
    {
        if (file_exists( __DIR__ . "/../resources/Views/error/404.phtml")) {
            return require_once __DIR__ . "/../resources/Views/error/404.phtml";
        } else {
            echo "Ops... Erro 404 página não encontrada.";
        }
    }
}
