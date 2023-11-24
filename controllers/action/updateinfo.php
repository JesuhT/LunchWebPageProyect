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
$msg = '';
$resultado=array();

// Comprueba si se proporcionó una nueva contraseña
if (!empty($nuevaContraseña) && !empty($confirmarContraseña)) {
    // Comprueba la coincidencia con la confirmación
    if ($nuevaContraseña == $confirmarContraseña) {
        // Actualiza la contraseña solo si se proporciona y coincide con la confirmación
        $usuario = new Usuario(
            $_SESSION["ID_USUARIO"],
            $nombre,
            $apellido,
            $email,
            $nuevaContraseña, // Hashea la nueva contraseña
            $telefono,
            $_SESSION["ID_PROGRAMA"],
            $_SESSION["ROL"]
        );
    } else {
        // Muestra un mensaje de error si las contraseñas no coinciden
        $estado=false;
        $msg = 'Las contraseñas no coinciden';
        $resultado = [
            'estado' => $estado,
            'msg' => $msg
        ];
        echo json_encode($resultado);
    }

        
} else if (!empty($nombre) || !empty($apellido) || !empty($email) || !empty($telefono)) {
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
if (empty($msg)) {
    $resultado = modificarUsuario($usuario);
    if (!$resultado) { // No puede iniciar sesión
        $estado = false;
        $msg = "Error de credenciales";

		
        $resultado = [
            'estado' => $estado,
            'msg' => $msg
        ];
        
        echo json_encode($resultado);
    }
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
    
}
?>
