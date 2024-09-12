<?php 
    include "../../clases/Auth.php";
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $Auth = new Auth();

    if ($Auth->registrar($usuario, $email, $password)) {
        header("location:../../index.php");
    }else {
        echo "No se pudo registrar";
    }


?>