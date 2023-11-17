
<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbUser.php");


if (isset($_POST['email']) && isset($_POST['pswd'])) {
    // Username y password enviados por formulario
    $username = $_POST['email'];
    $password = $_POST['pswd'];

    $usuario = autenticarUsuario($username, $password);

    if ($usuario != null) { // Puede iniciar sesión
        $_SESSION['ID_USUARIO'] = $usuario->getID_User();
        $_SESSION['NOMBRE'] = $usuario->getNombre();
        $_SESSION['APELLIDO'] = $usuario->getApellido();
        $_SESSION['CELULAR'] = $usuario->getCelular();
        $_SESSION['EMAIL'] = $usuario->getEmail();
        $_SESSION['ID_PROGRAMA'] = $usuario->getID_programa();
        $_SESSION['ROL'] = $usuario->getID_rol();
        $_SESSION['CONTRASENA'] = $usuario->getContrasena();
        header("Location: ../../views/menu.php");

    } else { // No puede iniciar sesión
        header("Location: ../../views/login.php");
		}
    }
?>

