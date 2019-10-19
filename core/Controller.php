<?php

namespace Core;

use Philo\Blade\Blade;

/**
 * Classe Controller principal. Todos os nossos Controllers, herdarão
 * seus atributos e métodos.
 */

abstract class Controller
{
    protected $value;
    private $viewPath;
    private $layoutPath;

    public function __construct()
    {
        $this->value = new \stdClass; //Cria objeto anônimo.
        
    }

    // Método que renderiza a View.
    protected function viewRender($viewPath, $layoutPath = null)
    {
        $this->viewPath = $viewPath;
        $this->layoutPath = $layoutPath;
        if ($layoutPath) {
            $this->layout();
        } else {
            $this->content();
        }
        
    }

    // Método que pega o conteúdo da View.
    protected function content()
    {
        if (file_exists(__DIR__."/../resources/views/{$this->viewPath}.phtml")) {
            require_once __DIR__."/../resources/views/{$this->viewPath}.phtml";
        } else {
            echo "Opss... view {$this->viewPath} not found!";
        }
    }

    // Método que conteudo do layout
    protected function layout()
    {
        if (file_exists(__DIR__."/../resources/views/{$this->layoutPath}.phtml")) {
            require_once __DIR__."/../resources/views/{$this->layoutPath}.phtml";
        } else {
            echo "Opss... layout {$this->layoutPath} not found!";
        }
    }

    /**
     * Função que renderiza uma página do Blade Template Engine
     * 
     * $page Nome da página para renderizar
     * $param Array com os parametros para passar para página
     * 
     * $foo = "bar";
     * $this->view('dir.page',['foo' => $bar]);
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
