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
    public function getCars()
    {


        $sql = $sql = "SELECT * FROM autos ORDER BY id_auto";

        $stm = $this->pdo->prepare($sql);

        $stm->execute();

        $cars = $stm->fetchAll(PDO::FETCH_OBJ);

        return $cars;
    }
    public function getCarroceria(){
        $sql = $sql = "SELECT * FROM tipocarroceria ";

        $stm = $this->pdo->prepare($sql);

        $stm->execute();

        $carroceria = $stm->fetchAll(PDO::FETCH_OBJ);

        return $carroceria;
    }
    public function insertCar($fabricante, $modelo,$id_carroceria_fk,$anio,$kilometros,$precio)
    {
        $this->checkSession();
        
        $sql = "INSERT INTO autos (fabricante,modelo,id_carroceria_fk,anio,kilometros,precio)
            VALUES (?, ?, ?, ?, ?, ?)";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$fabricante, $modelo,$id_carroceria_fk,$anio,$kilometros,$precio]);
    }
    
    public function deleteCar($id_auto)
    {
        $this->checkSession();
        $sql = "DELETE FROM autos
                WHERE id_auto = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$id_auto]);
    }
}
