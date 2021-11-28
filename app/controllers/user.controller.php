<?php

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

    public function crearCuenta(){
        if(!empty($_POST['newEmail'])&& !empty($_POST['newPass']) && !empty($_POST['newUserName'])){
        $newUserName = $_POST['newUserName'];    
        $newUserMail = $_POST['newEmail'];
        $newUserPass = password_hash($_POST['newPass'], PASSWORD_BCRYPT); 
        $this->userModel->darAlta($newUserMail, $newUserPass,$newUserName);
        $_POST['email'] = $newUserMail;
        $_POST['pass'] = $_POST['newPass'];
        $this->verificar();
        }
        else{
            echo("no ingreso nada");
        }
    }

    public function showSignup(){
        $this->userView->mostrarSignup();
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
            $_SESSION['userName'] = $user->userName;
            $_SESSION['admin'] = $user->admin;
            return true;
        }
        else{
            return false;
        }    
    }
    
    public function showAdminPanel(){
        session_start();
        $admin = $_SESSION['admin'];
        $usuarios = $this->userModel->getAllUsuarios();
        $this->userView->mostrarAdminPanel($usuarios, $admin);
    }
    
    public function borrarUsuario(){
        $id = $_POST['usuario'];
        $this->userModel->deleteUser($id);
        header('Location: '.ADMIN);
    }

    public function hacerAdmin(){
        $id = $_POST['addAdmin'];
        $this->userModel->actualizarUser($id);
        header('Location: '.ADMIN);
    }

    public function quitarAdmin(){
        $id = $_POST['quitAdmin'];
        $this->userModel->actualizarAdmin($id);
        header('Location: '.ADMIN);
    }
}