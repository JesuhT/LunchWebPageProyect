<?php

session_start();

require_once(__DIR__ . '/../mdb/mdbUser.php');
require_once(__DIR__ . '/../../models/entities/Usuario.php');
    $idUsuario =  filter_input(INPUT_POST, 'ID');
    $nombres = filter_input(INPUT_POST, 'nombres');
    $apellidos = filter_input(INPUT_POST, 'apellidos');
    $email = filter_input(INPUT_POST, 'email');
    $contrasena = filter_input(INPUT_POST, 'contrasena');
    $celular = filter_input(INPUT_POST, 'celular');
    $idRol = filter_input(INPUT_POST, 'rol');
    $idPrograma = filter_input(INPUT_POST, 'programa');

    $usuario = new Usuario($idUsuario, $nombres, $apellidos, $email, $contrasena, $celular, $idPrograma, $idRol);
    modificarUsuario($usuario);
    $msg = "Se logró registrar el usuario";

    $resultado = [
        'msg' => $msg
    ];
    echo json_encode($resultado);