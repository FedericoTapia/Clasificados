<?php
/* 
controlador de tareas
 */
require_once('app/models/user.model.php');
require_once('app/view/user.view.php');

class UserController{
    private $userModel;
    private $userView;

    
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userView = new UserView();
    }
    
    public function logOut(){
        session_start();
        session_destroy();
        header("location: ".LOGIN);
    }

    public function showLogin($mensaje = ''){

        $this->userView->mostrarLogin($mensaje);
        
    }
    public function verificar(){

        $userMail = $_POST['email'];
        $userPass = $_POST['pass'];
        
        if($this->verificaUsuarioPass($userMail,$userPass)){
            
            header("location: ".HOME);

        }
        else{

            $this->showLogin($mensaje = 'Error de Login');

        }
    }

    private function verificaUsuarioPass($userMail,$userPass){
        $user = $this-> userModel->getUsuario($userMail);

        if(!empty($user) && password_verify($userPass, $user->pass)){
            
            session_start();
            $_SESSION['id'] = $user->id;
            $_SESSION['email'] = $user->email;
            return true;

        }
        else{
            return false;
        }    
    }
    
                //53:32 "Repaso"



}