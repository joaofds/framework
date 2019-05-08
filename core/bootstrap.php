<?php

use Core\Route;

// Armazena arquivo de rotas em $web_routes e passa para o obj $route.
$routes  = require_once __DIR__.'/../routes/web.php';
$route = new Route($routes);
