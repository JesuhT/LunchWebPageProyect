<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $nombres = filter_input(INPUT_POST,'nombres');
        $apellidos = filter_input(INPUT_POST,'apellidos');
        $email = filter_input(INPUT_POST,'email');
        $contrasena = filter_input(INPUT_POST,'contrasena');
        $celular = filter_input(INPUT_POST,'celular');
        $idRol = filter_input(INPUT_POST,'rol');
        $nombrePrograma = filter_input(INPUT_POST,'nombrePrograma');
    
    $usuario = new Usuario($idUsuario, $nombres, $apellidos, $email, $contraseña, $celular, $nombrePograma);
    editarUsuario($usuario);
    $msg="Se logró registrar el usuario";
       
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
   
