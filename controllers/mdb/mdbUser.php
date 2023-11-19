<?php
function autenticarUsuario($username, $password){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    require_once(__DIR__ . "/../../models/DAO/programaDAO.php");
    require_once(__DIR__ . "/../../models/DAO/rolDAO.php"); // Agregamos el RolDAO

    $dao = new UsuarioDAO();
    $usuario = $dao->autenticarUsuario($username, $password);

    if ($usuario != null) {
        $programaDAO = new ProgramaDAO();
        $programa = $programaDAO->buscarProgramaPorId($usuario->getID_programa());

        if ($programa != null) {
            // Si se encuentra el programa, almacena el nombre en $_SESSION
            $_SESSION['NOMBRE_PROGRAMA'] = $programa->getNombre();
        }

        $rolDAO = new RolDAO();
        $rol = $rolDAO->buscarRolPorId($usuario->getID_rol());

        if ($rol != null) {
            // Si se encuentra el rol, almacena el nombre en $_SESSION
            $_SESSION['NOMBRE_ROL'] = $rol->getNombre();
        }
    }

    return $usuario;
}

function buscarUsuarioPorId($id){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->buscarUsuarioPorId($id);
    return $usuario;
}

function leerUsuarios(){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->leerUsuarios();
    return $usuarios;
}

function insertarUsuario($usuario){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $resultado = $dao->insertarUsuario($usuario);
    return $resultado;
}

function modificarUsuario($usuario){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $resultado = $dao->modificarUsuario($usuario);
    return $resultado;
}

function borrarUsuario($id){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $res = $dao->borrarUsuario($id);
    return $res;
}
 
function verUsuarioPorId($idUsuario){
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao=new UsuarioDAO();
    $usuario = $dao->verUsuarioPorId($idUsuario);
    return $usuario;
}
?>
