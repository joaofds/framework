<?php

/*
|--------------------------------------------------------------------------
| Rotas
|--------------------------------------------------------------------------
|
| Aqui serão definidas todas as rotas do sistema através do array
| $web_routes.
|
*/

$routes[] = ['/', 'HomeController@index'];
$routes[] = ['/teste', 'TesteController@index'];
$routes[] = ['/posts', 'PostsController@index'];
$routes[] = ['/post/{id}/show', 'PostsController@show'];

return $routes;
