<?php
function autenticarUsuario($username, $password)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->autenticarUsuario($username, $password);
    return $usuario;
}

function buscarUsuarioPorId($id)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->buscarUsuarioPorId($id);
    return $usuario;
}

function leerUsuarios()
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->leerUsuarios();
    return $usuarios;
}

function insertarUsuario($usuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $resultado = $dao->insertarUsuario($usuario);
    return $resultado;
}

function modificarUsuario($usuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $resultado = $dao->modificarUsuario($usuario);
    return $resultado;
}

function borrarUsuario($id)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $res = $dao->borrarUsuario($id);
    return $res;
}

function verUsuarioPorId($idUsuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->verUsuarioPorId($idUsuario);
    return $usuario;
}

function verificarExistencia($valor, $columna)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarioExistente = $dao->verificarExistencia($valor, $columna);
    return $usuarioExistente;
}
