<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbUser.php");

if (isset($_POST['eliminar_usuario'])) {
    $userID = $_SESSION['ID_USUARIO'];

    // Lógica para eliminar el usuario
    $resultado = borrarUsuario($userID);

    if ($resultado) {
        // Eliminación exitosa, cierra la sesión y redirige a la página de inicio o a una página de despedida
        session_unset();
        session_destroy();
        header("Location: ../../index.php");
    } else {
        // Eliminación fallida, muestra un mensaje de error o redirige a la página de perfil con un mensaje de error
        $_SESSION['errMsg'] = 'Error al intentar eliminar la cuenta.';
        header("Location: ../../views/profile.php");
    }
} else {
    // Redirige a alguna página por defecto si alguien intenta acceder directamente a este controlador sin enviar el formulario
    header("Location: ../../index.php");
}
?>

