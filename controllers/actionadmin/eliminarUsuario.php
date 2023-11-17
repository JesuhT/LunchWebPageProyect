<?php
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $idUsuario = $_GET['idUsuario'];
    eliminarUsuario($idUsuario);

    header("Location: ../../vista/admin-profile.php");
    