<?php 

require_once('app/models/cars.model.php');
require_once('app/models/comments.model.php');
require_once('app/view/cars.view.php');

class CarsController{
    private $carsModel;
    private $carsView;
    private $userModel;
    private $commentsModel;
    
    public function __construct(){
        $this->carsModel = new CarsModel();
        $this->userModel = new UserModel();
        $this->commentsModel = new CommentsModel();
        $this->carsView = new CarsView();
    }

    private function checkSession(){
        session_start();
        if(empty($_SESSION['id'])){
            header("location: ".LOGIN);
        }else{
            return true;
        }
    }

    public function showHome(){
        session_start();
        $showName = $_SESSION['userName'];
        $admin = $_SESSION['admin'];
        $search = $_POST['tipoCarroceria'];
        $cars = $this->carsModel->getCars();
        $carroceria = $this->carsModel->getCarroceria();
        $this->carsView->mostrarHome($cars,$carroceria,$showName,$admin,$search);
    }

    public function showCarrocerias($mensaje = ''){
        session_start();
        $admin = $_SESSION['admin'];
        $carrocerias = $this->carsModel->getCarroceria();
        $this->carsView->mostrarAdminCarroceria($carrocerias,$admin,$mensaje);
    }

    public function showBuyCar(){
        session_start();
        $idCar = $_POST['idCar'];
        $showName = $_SESSION['userName'];
        $id_usuario = $_SESSION['id'];
        $admin = $_SESSION['admin'];
        $autoBuy = $this->carsModel->getOneCar($idCar);
        $carroceria = $this->carsModel->getCarroceria();
        $comentarios = $this->commentsModel->getCommentCar($idCar);
        $usuarios = $this->userModel->getAllUsuarios();
        $this->carsView->mostrarBuyCar($autoBuy,$carroceria,$comentarios,$usuarios,$idCar,$showName,$id_usuario,$admin);
    }

    public function showEditCar($mensaje = ''){
        $this->checkSession();
        $carroceria = $this->carsModel->getCarroceria();
        $autos = $this->carsModel->getCars();
        $this->carsView->mostrarEditCar($carroceria, $autos,$mensaje);
            
    }

    public function showAddCar($mensaje = ''){
        $this->checkSession();
        $carroceria = $this->carsModel->getCarroceria();
        $this->carsView->mostrarAddCar($carroceria,$mensaje);
    }

    public function addCar(){
        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $id_carroceria_fk = $_POST['id_carroceria_fk'];
        $anio = $_POST['anio'];
        $kilometros = $_POST['kilometros'];
        $precio = $_POST['precio'];
        if(!empty($fabricante)&&!empty($modelo)&&!empty($id_carroceria_fk)&&!empty($anio)&&!empty($kilometros)&&!empty($precio)){
            $this->carsModel->insertCar($fabricante, $modelo,$id_carroceria_fk,$anio,$kilometros,$precio);
            header('Location: '.BASE_URL);
        }else{
            $this->showAddCar($mensaje = 'Faltan Completar Campos');
        }
    }

    public function modifyCar(){
        $id_auto = $_POST['id_auto'];
        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $id_carroceria_fk = $_POST['id_carroceria_fk'];
        $anio = $_POST['anio'];
        $kilometros = $_POST['kilometros'];
        $precio = $_POST['precio'];
        if (!empty($id_auto)&&($id_auto != '-- Seleccion --')||!empty($fabricante)||!empty($modelo)||!empty($id_carroceria_fk)&&($id_carroceria_fk != '-- Seleccion --')||!empty($anio)||!empty($kilometros)||!empty($precio)) {
            if(!empty($fabricante)){
                $set = 'fabricante';
                $this->carsModel->editCar($id_auto, $fabricante, $set);
            }
            if (!empty($modelo)) {
                $set = 'modelo';
                $this->carsModel->editCar($id_auto, $modelo, $set);
            }
            if (!empty($id_carroceria_fk)&&($id_carroceria_fk != '-- Seleccion --')) {
                $set = 'id_carroceria_fk';
                $this->carsModel->editCar($id_auto, $id_carroceria_fk, $set);
            }
            if (!empty($anio)) {
                $set = 'anio';
                $this->carsModel->editCar($id_auto, $anio, $set);
            }
            if (!empty($kilometros)) {
                $set = 'kilometros';
                $this->carsModel->editCar($id_auto, $kilometros, $set);
            }
            if (!empty($precio)) {
                $set = 'precio';
                $this->carsModel->editCar($id_auto, $precio, $set);
            }
            header('Location: '.EDITARAUTOS);
        }else {

            $this->showEditCar($mensaje = 'Indique el auto que desea modificar');
        }
    }

    public function addCarroceria(){
        $Carroceria = $_POST['newCarroceria'];
        if(!empty($Carroceria)){
            $this->carsModel->insertCarroceria($Carroceria);
            header('Location: '.ADMINCARROCERIA);
        }else{
            $this->showCarrocerias($mensaje = 'Faltan Completar Campos');
        }
    }

    public function modifyCarroceria(){
        $Carroceria = $_POST['editCarroceria'];
        $id_carroceria = $_POST['carroceriaEditId'];
        if(!empty($Carroceria)&&!empty($id_carroceria)){
            $this->carsModel->editCarroceria($Carroceria, $id_carroceria);
    
            header('Location: '.ADMINCARROCERIA);
        }else{
            $this->showCarrocerias($mensaje = 'Faltan Completar Campos');
        }
    }
    
    public function quitCar(){
        if($this->checkSession()==true){
            $id_auto = $_POST['autos'];
            $this->carsModel->deleteCar($id_auto);
            header('Location: '.BASE_URL);
        }
    }

    public function quitCarroceria($id_carroceria){
        if($this->checkSession()==true){
            $this->carsModel->deleteCarroceria($id_carroceria);
            header('Location: '.ADMINCARROCERIA);
        }
    }
}