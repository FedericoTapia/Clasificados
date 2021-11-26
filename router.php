<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('HOME', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/home');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('ADMIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/adminPanel');
define('ADMINCARROCERIA', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/carrocerias');
define('EDITARAUTOS', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/showEditarAuto');
require_once('app/controllers/cars.controller.php');
require_once('app/controllers/user.controller.php');
require_once('app/models/comments.model.php');

$carsController = new CarsController();
$userControllers = new UserController();
$commentsModel = new CommentsModel();

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'login':
        $userControllers->showLogin();
        break; 
    case 'logout':
        $userControllers->logOut();
        break;  
    case 'signup':
        $userControllers->showSignup();
        break;
    case 'adminPanel':
        $userControllers->showAdminPanel();
        break;
    case 'crearCuenta':
        $userControllers->crearCuenta();
        break;
    case 'hacerAdmin':
        $userControllers->hacerAdmin();
        break;
    case 'sacarAdmin':
        $userControllers->quitarAdmin();
        break;
    case 'borrarUsuario':
        $userControllers->borrarUsuario();
        break;
    case 'verificar':
        $userControllers->verificar();
        break;     
    case 'home':
        $carsController->showHome();
        break;
    case 'showAgregarAuto':
        $carsController->showAddCar();
        break;
    case 'agregarAuto':
        $carsController->addCar();
        break;
    case 'borrarAuto':
        $carsController->quitCar();
        break;
    case 'showEditarAuto':
        $carsController->showEditCar();
        break;
    case 'editarAuto':
        $carsController->modifyCar();
        break;
    case 'buyCar':
        $carsController->showBuyCar();
        break;
    case 'carrocerias':
        $carsController->showCarrocerias();
        break;
    case 'agregarCarroceria':
        $carsController->addCarroceria();
        break;
    case 'borrarCarroceria':
        $carsController->quitCarroceria($params[1]);
        break;
    case 'modificarCarroceria':
        $carsController->modifyCarroceria();
        break;
    default:
        echo ('404 Page not found');
        break;
}
