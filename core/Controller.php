<?php

namespace Core;

/**
 * Classe Controller principal. Todos os nossos Controllers, herdarão
 * seus atributos e métodos.
 */

abstract class Controller
{
    protected $view;
    private $viewPath;

    public function __construct()
    {
        $this->view = new \stdClass; //Cria objeto anônimo.
        
    }

    // Método que renderiza a View.
    protected function viewRender($viewPath)
    {
        $this->viewPath = $viewPath;
        $this->content();
    }

    // Método que pega o conteúdo da View.
    protected function content()
    {
        if (file_exists(__DIR__."/../resources/views/{$this->viewPath}.phtml")) {
            require_once __DIR__."/../resources/views/{$this->viewPath}.phtml";
        } else {
            echo "Error: View Path not found!";
        }
    }
}
