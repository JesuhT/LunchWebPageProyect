<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');
$idAlmue = $_GET['ID_almuerzo'];
$success = borrarAlmuerzo($idAlmue);

// Prepara el mensaje
if ($success>0) {
    $estado=true;

}else {
    $estado=false;

}
$msg = $estado ? "El almuerzo ha sido eliminado correctamente" : "Error al eliminar el almuerzo";
$resultado = [
    'estado' => $success,
    'msg' => $msg
];
echo json_encode($resultado);
