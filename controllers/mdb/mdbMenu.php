<?php
require_once(__DIR__."/../../models/DAO/menuDAO.php");
function leerAlmuerzosMenu() {
    $dao = new AlmuerzoEnMenuDAO();
    $almuerzos = $dao->leerAlmuerzosMenu();
    return $almuerzos;
}

/* function modificarAlmuerzoMenu($almuerzo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->modificarAlmuerzo($almuerzo);
    return $resultado;
} */

?>
