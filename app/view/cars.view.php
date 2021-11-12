<?php

//Realiza la visualizacion de los elementos de las tareas
require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');


class CarsView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function mostrarHome($autos,$carroceria)
    {
        $this->smarty->assign('autos',$autos);
        $this->smarty->assign('carroceria',$carroceria);
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->display('templates/carsList.tpl');

    }
    public function mostrarAddCar($carroceria){

        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('carroceria',$carroceria);
        $this->smarty->display('templates/formadd.tpl');
    }
    public function mostrarLogin() {
        $this->smarty->assign('titulo','Iniciar sesion');
        $this->smarty->assign('BASE_URL', BASE_URL);

        $this->smarty->display('templates/login.tpl');

    }
 
}
