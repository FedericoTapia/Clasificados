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

    public function mostrarHome($autos,$carroceria,$showName,$admin)
    {
        $this->smarty->assign('admin',$admin);
        $this->smarty->assign('usuario',$showName);
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

    public function mostrarBuyCar($autoBuy,$carroceria){
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('auto',$autoBuy);
        $this->smarty->assign('carroceria',$carroceria);
        $this->smarty->display('templates/sellcar.tpl');
    }

    public function mostrarLogin() {
        $this->smarty->assign('titulo','Iniciar sesion');
        $this->smarty->assign('BASE_URL', BASE_URL);

        $this->smarty->display('templates/login.tpl');

    }
 
}
