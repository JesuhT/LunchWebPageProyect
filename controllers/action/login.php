
<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbUser.php");


if (isset($_POST['email']) && isset($_POST['pswd'])) {
    // Username and password sent from Form
    $username = $_POST['email'];
    $password = $_POST['pswd'];

    $usuario = autenticarUsuario($username, $password);

    if ($usuario != null) { // Puede iniciar sesión
        $_SESSION['ID_USUARIO'] = $usuario->getID_User();
        $_SESSION['NOMBRE'] = $usuario->getNombre();
        $_SESSION['APELLIDO'] = $usuario->getApellido();
        $_SESSION['CELULAR'] = $usuario->getCelular();
        $_SESSION['EMAIL'] = $usuario->getEmail();
        header("Location: ../../views/menu.php");
        echo "hi2";
    } else { // No puede iniciar sesión
        header("Location: ../../views/login.php");
        echo "hi3";
		}
    }
?>

