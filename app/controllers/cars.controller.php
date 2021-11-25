<?php 

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
    
    public function quitCar(){

        if($this->checkSession()==true){
            $id_auto = $_POST['autos'];
    
            $this->carsModel->deleteCar($id_auto);
    
            header('Location: '.BASE_URL);
        }
        
    }
    public function quitComment($id_comentario,$id_auto){
        
    
        $this->commentsModel->deleteComment($id_comentario);
    
        header('Location: '.BASE_URL);

        
    }
}