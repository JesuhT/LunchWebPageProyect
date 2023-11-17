<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");
    
        $nombres = filter_input(INPUT_POST,'nombres');
        $apellidos = filter_input(INPUT_POST,'apellidos');
        $email = filter_input(INPUT_POST,'email');
        $contrasena = filter_input(INPUT_POST,'contrasena');
        $celular = filter_input(INPUT_POST,'celular');
        $idRol = filter_input(INPUT_POST,'rol');
        $nombrePrograma = filter_input(INPUT_POST,'nombrePrograma');
        
        $usuario = new Usuario(NULL, $nombres, $apellidos, $email, $contrasena, $celular, $idRol, $nombrePrograma);
        $estado  = registrarUsuario($usuario);
        $msg="Se logró registrar el usuario";
       
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    
    echo json_encode($resultado);
        
        

