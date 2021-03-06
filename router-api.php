<?php
require_once('libs/router/Router.php');
require_once('app/api/comments.api.controller.php');

$router = new Router();

$router->addRoute('comentarios', 'GET', 'ApiCommentsController', 'obtenerComentarios');
$router->addRoute('usuarios', 'GET', 'ApiCommentsController', 'obtenerUsuarios');
$router->addRoute('comentarios', 'POST', 'ApiCommentsController', 'agregarComentario');
$router->addRoute('comentarios/:ID', 'GET', 'ApiCommentsController', 'obtenerComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiCommentsController', 'eliminarComentario');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);