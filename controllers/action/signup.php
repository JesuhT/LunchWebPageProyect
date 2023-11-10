<?php

require_once("../../controllers/mdb/mdbUser.php");
require_once("../../models/entities/Usuario.php");

        $nombre = $_POST['name'];
        $apellido = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['pswd'];
        $telefono = $_POST['phone'];
        $ID_programa = $_POST['programa'];
        $ID_rol = $_POST['rol'];
        
        if(isset($_POST['submitt'])) {
            $usuario = new Usuario( NULL, $nombre, $apellido, $email, $password, $telefono, $ID_programa, $ID_rol);
            insertarUsuario($usuario);
            header("Location: ../../views/menu.php");
        }else{
            $usuario = new Usuario( NULL, $nombre, $apellido, $email, $password, $telefono, $ID_programa, $ID_rol);
            $usuario = insertarUsuario($usuario);
            if($usuario)
                header("Location: ../../views/menu.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../views/login?msg=No se pudo realizar el registro");
        
    }
?>