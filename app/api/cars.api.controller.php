<?php
require_once('app/models/cars.model.php');
require_once('app/api/api.view.php');

class ApiCarsController{
    public function __construct()
    {
        $this->carsModel = new CarsModel();
        $this->view = new APIView();
    }
    
    public function obtenerAutos(){
        
        $cars = $this->carsModel->getCars();
        $this->view->response($cars, 200);
 
    }
    public function obtenerAuto($params){
        $id = $params[':ID'];
        $car = $this->carsModel->getOneCar($id);
        $this->view->response($car, 200);
    }
    public function agregarAuto($params){
        $id = $params[':ID'];
        $car = $this->carsModel->getOneCar($id);
        $this->view->response($car, 200);
    }
}