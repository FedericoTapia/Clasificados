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
    function getActiveEmail(){
        session_start();
        $email = $_SESSION['email'];
        return $email;
    }
    private function checkSession(){
        
        if(empty($_SESSION['id'])){
            header("location: ".LOGIN);
        }
    }

    public function mostrarHome($autos,$carroceria)
    {
        $this->smarty->assign('autos',$autos);
        $this->smarty->assign('carroceria',$carroceria);
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('email', $this->getActiveEmail());
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
 
   /* private function mostrarForm()
    {
        $html = '<h3>Crear Tareas</h3>';
        $html .= '<form action="' . BASE_URL . 'agregarTarea" method="post">';
        $html .= '<label>Descripcion <input type="text" name="descripcion"></label>';
        $html .= '<label>Prioridad <input type="number" name="prioridad"></label>';
        $html .= '<button type="submit" class="btn btn-success">Crear</button>';
        $html .= '</form>';

        echo $html;
    } */
    /* private function mostrarSelector($tareas, $mostrarTodas = true)
    {
        $html = '<select name="tarea">';
        $html .= '<option default>--Seleccion--</option>';

        foreach ($tareas as $tarea) {
            if ($mostrarTodas || $tarea['terminada'] == 'N') {
                $html .= '<option value = "' . $tarea['id'] . '">';
                $html .= $tarea['descripcion'];
                $html .= '</option>';
            }
        }



        $html .= '</select>';
        return $html;
    }
    private function mostrarTerminar($tareas)
    {
        $html = '<h3>Terminar Tarea</h3>';
        $html .= '<form action="' . BASE_URL . 'terminarTarea" method="post">';
        $html .= '<label>Id tarea: ';
        $html .=  $this->mostrarSelector($tareas, false);
        $html .= '</label>';
        $html .= '<button type="submit" class="btn btn-success">Terminar</button>';
        $html .= '</form>';

        echo $html;
    }
    private function mostrarBorrar($tareas)
    {
        $html = '<h3>Borrar Tarea</h3>';
        $html .= '<form action="' . BASE_URL . 'borrarTarea" method="post">';
        $html .= '<label>Id tarea: ';
        $html .=  $this->mostrarSelector($tareas, true);
        $html .= '</label>';
        $html .= '<button type="submit" class="btn btn-danger">Borrar</button>';
        $html .= '</form>';

        echo $html;
    }  */
}
