<?php 
include "Conexion.php";

class Auth extends Conexion{
    public function registrar($usuario, $email, $password){
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_usuarios (usuario, mail, password) 
                VALUES (?,?,?)";
        $query = $conexion->prepare($sql);
        $query->bind_param('sss', $usuario, $email, $password);
        return $query->execute();
    }


}




?>