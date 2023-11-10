<?php
session_start();
require_once("../../controllers/mdb/mdbUser.php");
require_once("../../models/entities/Usuario.php");

// Obtén los datos del formulario
$nombre = $_POST['nuevoNombre'];
$apellido = $_POST["nuevoApellido"];
$email = $_POST['nuevoEmail'];
$telefono = $_POST['nuevoTelefono'];
$email = $_POST['nuevoEmail'];
$nuevaContraseña = $_POST['nuevaContraseña'];
$confirmarContraseña = $_POST['confirmarContraseña'];

// Inicializa el mensaje de error
$mensajeError = '';

// Comprueba si se proporcionó una nueva contraseña
if (!empty($nuevaContraseña)) {
    // Comprueba la coincidencia con la confirmación
    if ($nuevaContraseña == $confirmarContraseña) {
        // Actualiza la contraseña solo si se proporciona y coincide con la confirmación
        $usuario = new Usuario(
            $_SESSION["ID_USUARIO"],
            $nombre,
            $apellido,
            $email,
            password_hash($nuevaContraseña, PASSWORD_DEFAULT), // Hashea la nueva contraseña
            $telefono,
            $_SESSION["ID_PROGRAMA"],
            $_SESSION["ROL"]
        );
    } else {
        // Muestra un mensaje de error si las contraseñas no coinciden
        $mensajeError = 'Las contraseñas no coinciden';
    }
} else {
    // Si no se proporciona una nueva contraseña, mantiene la contraseña actual
    $usuario = new Usuario(
        $_SESSION["ID_USUARIO"],
        $nombre,
        $apellido,
        $email,
        $_SESSION["CONTRASENA"],
        $telefono,
        $_SESSION["ID_PROGRAMA"],
        $_SESSION["ROL"]
    );
}

// Actualiza el usuario si no hay errores
if (empty($mensajeError)) {
    $resultado = modificarUsuario($usuario);

    unset($_SESSION["NOMBRE"]);
    unset($_SESSION["APELLIDO"]);
    unset($_SESSION["CELULAR"]);
    unset($_SESSION["EMAIL"]);
    unset($_SESSION['ID_PROGRAMA']);
    unset($_SESSION['CONTRASENA']);

    $_SESSION['NOMBRE'] = $usuario->getNombre();
    $_SESSION['APELLIDO'] = $usuario->getApellido();
    $_SESSION['CELULAR'] = $usuario->getCelular();
    $_SESSION['EMAIL'] = $usuario->getEmail();
    $_SESSION['ID_PROGRAMA'] = $usuario->getID_programa();
    $_SESSION['CONTRASENA'] = $usuario->getContrasena();

    // Redirige según el resultado
    if ($resultado) {
        header("Location: ../../views/menu.php?msg=Actualización exitosa");
    } else {
        header("Location: ../../views/menu.php?msg=Error en la actualización");
    }
} else {
    // Vuelve al formulario con el mensaje de error
    header("Location: ../../views/formulario_actualizacion.php?msgError=$mensajeError");
}
?>
