<?php
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    
    $idUsuario = filter_input(INPUT_POST,'idUsuario');

    $usuario = verUsuarioPorId($idUsuario);
   
    echo json_encode($usuario);  