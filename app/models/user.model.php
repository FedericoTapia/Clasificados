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
    public function darAlta($newUserMail, $newUserPass,$newUserName)
    {
        
        $sql = "INSERT INTO usuarios (email,pass,userName,admin)
            VALUES (?, ?, ?, 0)";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$newUserMail, $newUserPass,$newUserName]);
    }
}

