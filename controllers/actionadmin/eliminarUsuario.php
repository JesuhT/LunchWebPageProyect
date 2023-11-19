<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUser.php');
    $idUsuario = $_GET['idUsuario'];
    borrarUsuario($idUsuario);

    header("Location: ../../vista/admin-profile.php");
    