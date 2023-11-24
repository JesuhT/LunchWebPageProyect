<?php
    session_start();
    require_once(__DIR__ . "/../mdb/mdbMenu.php");
    $idAlmue = $_GET['ID_almuerzo'];
    
    $almuerzo = buscarAlmuerzoMenuId($idAlmue);
   
    echo json_encode($almuerzo);  