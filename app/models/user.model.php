<?php

require_once('model.php');


class UserModel extends Model
{
 
    public function getUsuario($email)
    {


        $sql = $sql = "SELECT * FROM usuarios WHERE email = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$email]);

        $usuario = $stm->fetchAll(PDO::FETCH_OBJ);

        if(count($usuario) > 0){
            return $usuario[0];
        }

        return null;
    }
    public function getAllUsuarios()
    {
        $sql = $sql = "SELECT * FROM usuarios ORDER BY id";

        $stm = $this->pdo->prepare($sql);

        $stm->execute();

        $usuarios = $stm->fetchAll(PDO::FETCH_OBJ);

        return $usuarios;
    }
    public function darAlta($newUserMail, $newUserPass,$newUserName)
    {
        
        $sql = "INSERT INTO usuarios (email,pass,userName,admin)
            VALUES (?, ?, ?, 0)";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$newUserMail, $newUserPass,$newUserName]);
    }
    public function deleteUser($id)
    {
        
        $sql = "DELETE FROM usuarios
                WHERE id = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$id]);
    }
    public function actualizarUser($id)
    {
        $sql = "UPDATE usuarios
                SET admin = 1
                WHERE id = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$id]);
    }
    public function actualizarAdmin($id)
    {
        $sql = "UPDATE usuarios
                SET admin = 0
                WHERE id = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$id]);
    }
}

