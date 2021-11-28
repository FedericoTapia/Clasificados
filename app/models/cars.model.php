<?php

require_once('model.php');

class CarsModel extends Model
{
    
    private function checkSession() {
        session_start();
        if (empty($_SESSION['id'])) {
            header('Location:'.LOGIN);
        }
    }

    public function getCars(){
        $sql = $sql = "SELECT * FROM autos ORDER BY id_auto";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $cars = $stm->fetchAll(PDO::FETCH_OBJ);
        return $cars;
    }

    public function getCarroceria(){
        $sql = $sql = "SELECT * FROM tipocarroceria ORDER BY id_carroceria";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $carroceria = $stm->fetchAll(PDO::FETCH_OBJ);
        return $carroceria;
    }
    public function getOneCar($idCar){
        $sql = "SELECT * FROM autos
                WHERE id_auto = ?";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$idCar]);
        $auto = $stm->fetchAll(PDO::FETCH_OBJ);
        return $auto;
    }
    
    public function insertCar($fabricante, $modelo, $id_carroceria_fk, $anio, $kilometros, $precio){
        $this->checkSession();
        $sql = "INSERT INTO autos (fabricante, modelo, id_carroceria_fk, anio, kilometros, precio)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$fabricante, $modelo,$id_carroceria_fk,$anio,$kilometros,$precio]);
    }
    
    public function editCarroceria($Carroceria, $id_carroceria){
        $sql = "UPDATE tipocarroceria
                SET Carroceria = ?
                WHERE id_carroceria = ?";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$Carroceria, $id_carroceria]);
    }

    public function editCar($id_auto,$mod,$set){
        $sql = "UPDATE autos
                SET $set = ?
                WHERE id_auto = ?";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$mod, $id_auto]);
    }

    public function insertCarroceria($Carroceria){
        $sql = "INSERT INTO tipocarroceria (Carroceria)
                VALUES (?)";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$Carroceria]);
    }

    public function deleteCar($id_auto){
        $this->checkSession();
        $sql = "DELETE FROM autos
                WHERE id_auto = ?";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$id_auto]);
    }

    public function deleteCarroceria($id_carroceria){
        $sql = "DELETE FROM tipocarroceria
                WHERE id_carroceria = ?";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$id_carroceria]);
    }
}
