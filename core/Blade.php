<?php

namespace Core;

use Philo\Blade\Blade;

/**
 * Classe Controller que trata nossas views do
 * Blade Template Engine.
 */

abstract class Controller
{
    /**
     * Função que renderiza uma página
     * 
     * $page Nome da página para renderizar
     * $param Array com os parametros para passar para página
     */
    

    public function view($page, $param = [])
    {
        // Informa o diretório das views e cache
        $viewPath = "../resources/views";
        $cacheDir = "../temp";
        $blade  = new Blade($viewPath, $cacheDir);

        // Renderiza a página
        echo $blade->view()->make($page, $param)->render();
    }
}
