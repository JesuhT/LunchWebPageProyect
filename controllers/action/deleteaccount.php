<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbUser.php");

if (isset($_POST['eliminar_usuario'])) {
    $userID = $_SESSION['ID_USUARIO'];

    // Lógica para eliminar el usuario
    $resultado = borrarUsuario($userID);
    // Eliminación exitosa, cierra la sesión y redirige a la página de inicio o a una página de despedida
    session_unset();
    session_destroy();
    unset($_SESSION["ID_USUARIO"]);
    unset($_SESSION["NOMBRE"]);
    unset($_SESSION["APELLIDO"]);
    unset($_SESSION["CELULAR"]);
    unset($_SESSION["EMAIL"]);
    unset($_SESSION["FACULTAD"]);
    header("Location: ../../index.php");    
} else {
    // Redirige a alguna página por defecto si alguien intenta acceder directamente a este controlador sin enviar el formulario
    header("Location: ../../index.php");
}
?>

