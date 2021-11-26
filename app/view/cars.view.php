<?php

require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');


class CarsView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function mostrarHome($autos, $carroceria, $showName, $admin, $search)
    {
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('usuario', $showName);
        $this->smarty->assign('autos', $autos);
        $this->smarty->assign('carroceria', $carroceria);
        $this->smarty->assign('search', $search);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('templates/home.tpl');
    }

    public function mostrarAddCar($carroceria,$mensaje)
    {

        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('carroceria', $carroceria);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/formadd.tpl');
    }

    public function mostrarBuyCar($autoBuy, $carroceria, $comentarios, $usuarios, $idCar, $showName, $id_usuario, $admin)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('usuario', $showName);
        $this->smarty->assign('idUsuario', $id_usuario);
        $this->smarty->assign('auto', $autoBuy);
        $this->smarty->assign('carroceria', $carroceria);
        $this->smarty->assign('comentarios', $comentarios);
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->assign('idAuto', $idCar);
        $this->smarty->assign('admin', $admin);
        $this->smarty->display('templates/sellcar.tpl');
    }
    public function mostrarEditCar($carroceria, $autos,$mensaje){
        $this->smarty->assign('autos', $autos);
        $this->smarty->assign('carroceria', $carroceria);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('templates/editcar.tpl');

    }
    public function mostrarLogin()
    {
        $this->smarty->assign('titulo', 'Iniciar sesion');
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('templates/login.tpl');
    }
    public function mostrarAdminCarroceria($carrocerias,$admin,$mensaje)
    {
        $this->smarty->assign('titulo', 'administrador de carrocerias');
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('carrocerias',$carrocerias);
        $this->smarty->assign('admin',$admin);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/adminCarroceria.tpl');
    }

}
