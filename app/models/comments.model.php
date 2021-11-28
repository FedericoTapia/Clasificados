<?php

require_once('model.php');

class CommentsModel extends Model
{

    public function getComments($sort){
        $sql = $sql = "SELECT * FROM comentarios $sort";
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
    
    public function insertComment($comentario, $puntaje,$id_auto,$id_usuario){
        $sql = "INSERT INTO comentarios (comentario, puntaje,id_auto,id_usuario)
            VALUES (?, ?, ?, ?)";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$comentario, $puntaje,$id_auto,$id_usuario]);
        return true;
    }

    public function deleteComment($id_comentario){
        $sql = "DELETE FROM comentarios
            WHERE id_comentario = ?";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([$id_comentario]);
    }
}
