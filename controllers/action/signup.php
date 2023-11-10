<?php
require_once("../../controllers/mdb/mdbUser.php");
require_once("../../models/entities/Usuario.php");

if (isset($_POST['submitt'])) {
    $nombre = $_POST['name'];
    $apellido = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $telefono = $_POST['phone'];
    $ID_programa = $_POST['programa'];
    $ID_rol = 1;

    $usuario = new Usuario(NULL, $nombre, $apellido, $email, $password, $telefono, $ID_programa, $ID_rol);
    $resultado = insertarUsuario($usuario);

    if ($resultado) {
        header("Location: ../../views/menu.php?msg=Se realizó el registro satisfactoriamente");
    } else {
        header("Location: ../../views/login.php?msg=No se pudo realizar el registro");
    }
} else {
    header("Location: ../../views/login.php"); // Redirige en caso de intento de acceso directo al archivo
}
?>
