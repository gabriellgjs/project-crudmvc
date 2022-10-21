<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/cadastrar', 'UsuarioController@screenAdd');
$router->post('/cadastrar','UsuarioController@addAction');
$router->get('/usuarios', 'UsuarioController@screenList');
$router->get('/usuario/{id}/editar', 'UsuarioController@edit');
$router->post('/usuario/{id}/editar', 'UsuarioController@editAction');
$router->get('/usuario/{id}/excluir', 'UsuarioController@del');
