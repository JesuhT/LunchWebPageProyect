<?php
    session_start();
    require_once(__DIR__ . "/../mdb/mdbMenu.php");
    $almuerzos = leerAlmuerzosMenu();
    echo json_encode($almuerzos);