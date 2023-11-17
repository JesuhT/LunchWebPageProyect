<?php
    
    require_once($_SERVER['DOCUMENT_ROOT']."/almuerzo/controlador/mdb/mdbUsuario.php");

    $usuarios = verUsuarios();
    echo json_encode($usuarios);  