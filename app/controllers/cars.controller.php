<?php 
/* 
controlador de tareas
 */
require_once('app/models/cars.model.php');
require_once('app/models/comments.model.php');
require_once('app/view/cars.view.php');

class CarsController{
    private $carsModel;
    private $carsView;
    private $userModel;
    private $commentsModel;
    public function __construct()
    {
        $this->carsModel = new CarsModel();
        $this->userModel = new UserModel();
        $this->commentsModel = new CommentsModel();
        $this->carsView = new CarsView();
    }
    private function checkSession(){
        session_start();
        print_r($_SESSION);
        if(empty($_SESSION['id'])){
            header("location: ".LOGIN);
        }
    }
    public function showHome(){
        /* $this->checkSession();*/
        session_start();
        $showName = $_SESSION['userName'];
        $admin = $_SESSION['admin'];
        $cars = $this->carsModel->getCars();
        $carroceria = $this->carsModel->getCarroceria();
        $this->carsView->mostrarHome($cars,$carroceria,$showName,$admin);


    }

    public function showBuyCar(){
        $idCar = $_POST['idCar'];
        $autoBuy = $this->carsModel->getOneCar($idCar);
        $carroceria = $this->carsModel->getCarroceria();
        $comentarios = $this->commentsModel->getCommentCar($idCar);
        $usuarios = $this->userModel->getAllUsuarios();
        $this->carsView->mostrarBuyCar($autoBuy,$carroceria,$comentarios,$usuarios);
    }

    public function showAddCar(){
        $this->checkSession();
        $carroceria = $this->carsModel->getCarroceria();
        $this->carsView->mostrarAddCar($carroceria);
        
    }
    public function addCar(){

        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $id_carroceria_fk = $_POST['id_carroceria_fk'];
        $anio = $_POST['anio'];
        $kilometros = $_POST['kilometros'];
        $precio = $_POST['precio'];

    

        $this->carsModel->insertCar($fabricante, $modelo,$id_carroceria_fk,$anio,$kilometros,$precio);
    
        header('Location: '.BASE_URL);
    
    }
    
    public function quitCar(){

        if($this->checkSession()){
            $id_auto = $_POST['autos'];
    
            $this->carsModel->deleteCar($id_auto);
    
            header('Location: '.BASE_URL);
        }
        
    }
}