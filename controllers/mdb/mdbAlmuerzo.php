<?php
require_once(__DIR__."/../../models/DAO/almuerzoDAO.php");

function obtenerAlmuerzosPorDia($dia) {
    $dao = new AlmuerzoDAO();
    $almuerzos = $dao->obtenerAlmuerzosPorDia($dia);
    return $almuerzos;
}
function obtenerAlmuerzosUsuario($usuario,$dia) {
    $dao = new AlmuerzoDAO();
    $tienealmuerzo = $dao->obtenerAlmuerzosUsuario($usuario,$dia);
    return $tienealmuerzo;
}
?>
