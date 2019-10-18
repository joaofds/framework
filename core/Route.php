<?php

/*
|--------------------------------------------------------------------------
| Classe de rotas
|--------------------------------------------------------------------------
|
| Classe que utilizaremos para reunir todas as nossas regras relacionadas
| às nossas rotas, como captura de url, passagem deparâmetros, controllers
| e etc..
|
*/

namespace Core;

use Core\Controller;

class Route extends Controller
{
    private $routes;

    // Método construtor que recebe as rotas pŕe definidas
    // no arquivo de rotas.
    public function __construct(array $routes)
    {
        $this->setRoutes($routes);
        $this->run();
    }

    // Separando... Rota | Controller @ Metodo com explode()
    // e remonta a rota.
    private function setRoutes($routes)
    {
        foreach ($routes as $route) {
            $explode = explode('@', $route[1]);
            $newArray = [$route[0], $explode[0], $explode[1]];
            $newRoutes[] = $newArray;
        }
        $this->routes = $newRoutes;
    }

    // Método que recebe as requisições GET/POST.
    private function getRequest()
    {
        $obj = new \stdClass;

        foreach ($_GET as $key => $value) {
            $obj->get->$key = $value;
        }

        foreach ($_POST as $key => $value) {
            $obj->post->$key = $value;
        }
        return $obj;
    }

    // Método que faz a captura da URL digitada pelo usuário.
    private function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    
    // Método que contém toda lógica das nossas rotas.
    // Este método se auto inicia no construtor.
    //
    // $url armazena a url capturada em getUrl().
    // $urlArray quebra a url sempre que encontra '/'.
    private function run()
    {
        $url = $this->getUrl();
        $urlArray = explode('/', $url);

        // explode() no indice[0] da rota definida no arquivo de rotas.
        // Ex: [0] => 'post/{id}/show' [1] => 'PostsController@show'
        foreach ($this->routes as $route) {
            $routeArray = explode('/', $route[0]);
            $param = [];
            
            // Verifica se há parâmetros passados na rota,
            // se houver, captura o mesmo e envia com a nova rota.
            for ($i=0; $i < count($routeArray); $i++) { 
                if (
                    (strpos($routeArray[$i], "{") !== false)
                        && (count($urlArray) == count($routeArray))) {
                            $routeArray[$i] = $urlArray[$i];
                            $param[] = $urlArray[$i];
                }
                $route[0] = implode($routeArray, '/');
            }
            // Inicio da lógica do nosso controller.
            if ($url == $route[0]) {
                $found = true;
                $controller = $route[1];
                $action = $route[2];
                break;
            }
        }

        // Chamada para a classe Container que irá instanciar todos
        // os nossos Controllers e Actions.
        if ($found) {
            $controller = Container::newController($controller);

            // Switch para contagem de parâmetros passados na url.
            // (Máx: 3 parâmetros definidos)
            switch (count($param)) {
                case '1':
                    $controller->$action($param[0], $this->getRequest());
                    break;
                case '2':
                    $controller->$action($param[0], $param[1], $this->getRequest());
                    break;
                case '3':
                    $controller->$action($param[0], $param[1], $param[2], $this->getRequest());
                    break;
                default:
                    $controller->$action($this->getRequest());
                    break;
            }
        } else {
            Container::pageNotFound();
        }
    }
}
