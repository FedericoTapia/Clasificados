<?php
require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');

 
class UserView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    
    public function mostrarLogin($mensaje = ''){
        $this->smarty->assign('titulo','Inicio de Sesion');
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/login.tpl');
    }
    public function mostrarSignup(){
        $this->smarty->assign('titulo','Creacion de cuenta');
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('templates/signup.tpl');
    }

}
