<?php

class UserModel extends Model{
     
    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
      
}

?>