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


    public function logout(){
        session_start();
        session_destroy();
        header("location:" .LOGIN);
    }

    public function showLogin($mensaje = ''){

        $this->userView->mostrarLogin($mensaje);
    }


    private function verificaUsuarioPass($userMail,$userPass){
        
        //traer de la base el user email y pass

        $user = $this ->userModel->getUsuario($userMail);
        $hash = password_hash($userPass, PASSWORD_DEFAULT);
        if (!empty($user) && password_verify($userPass,$user->password)){
            session_start();
            $_SESSION['id'] = $user->id_user;
            $_SESSION['email'] = $user->email;

            return true;
        }
    else{
        return false;
    }
    

       
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
}