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

use Core\Route;

// Armazena arquivo de rotas em $web_routes e passa para o obj $route.
$routes  = require_once __DIR__.'/../routes/web.php';
$route = new Route($routes);
