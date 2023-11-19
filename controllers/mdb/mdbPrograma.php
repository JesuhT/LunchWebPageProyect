<?php
require_once(__DIR__."/../../models/DAO/programaDAO.php");

function verProgramas(){
    $dao=new programaDAO();
    $programas = $dao->verProgramas();
    return $programas;
}
