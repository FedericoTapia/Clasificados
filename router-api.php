<?php
require_once('libs/router/Router.php');
require_once('app/api/comments.api.controller.php');
// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios', 'GET', 'ApiCommentsController', 'obtenerComentarios');
$router->addRoute('comentarios', 'POST', 'ApiCommentsController', 'agregarComentario');
$router->addRoute('comentarios/:ID', 'GET', 'ApiCommentsController', 'obtenerComentario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

