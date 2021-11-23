<?php

require_once('model.php');

class CommentsModel extends Model
{
    private function checkSession() {

        session_start();

        if (empty($_SESSION['id'])) {
            header('Location:'.LOGIN);
        }
    }
    public function getComments()
    {


        $sql = $sql = "SELECT * FROM comentarios ORDER BY id_comentario";

        $stm = $this->pdo->prepare($sql);

        $stm->execute();

        $comentarios = $stm->fetchAll(PDO::FETCH_OBJ);

        return $comentarios;
    }
    public function getComment($id_comentario){
        $sql = $sql = "SELECT * FROM comentarios
        WHERE id_comentario = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$id_comentario]);

        $comentario = $stm->fetchAll(PDO::FETCH_OBJ);

        return $comentario;
    }
    public function getCommentCar($idCar){
        $sql = "SELECT * FROM comentarios
                WHERE id_auto = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$idCar]);

        $comentariosAuto = $stm->fetchAll(PDO::FETCH_OBJ);

        return $comentariosAuto;
    }
    
    public function insertComment($comentario, $puntaje,$id_auto,$id_usuario)
    {
        /* $this->checkSession(); */
        
        $sql = "INSERT INTO comentarios (comentario, puntaje,id_auto,id_usuario)
            VALUES (?, ?, ?, ?)";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$comentario, $puntaje,$id_auto,$id_usuario]);
    }
    
}
