<?php
    session_start();
    require_once(__DIR__ . "/../mdb/mdbUser.php");
    $usuarios = verUsuarios();
    echo json_encode($usuarios);