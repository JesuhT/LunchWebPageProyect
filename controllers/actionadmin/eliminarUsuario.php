<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbUser.php');
$idUsuario = $_GET['idUsuario'];
$success = borrarUsuario($idUsuario);

// Prepara el mensaje
$msg = $success ? "El usuario ha sido eliminado correctamente" : "Error al eliminar el usuario";
$resultado = [
    'success' => $success,
    'msg' => $msg
];
echo json_encode($resultado);
