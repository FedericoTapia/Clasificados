<?php
require_once('libs/router/Router.php');
require_once('app/api/cars.api.controller.php');
// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('autos', 'GET', 'ApiCarsController', 'obtenerAutos');
$router->addRoute('autos', 'POST', 'ApiCarsController', 'agregarAuto');
$router->addRoute('autos/:ID', 'GET', 'ApiCarsController', 'obtenerAuto');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

