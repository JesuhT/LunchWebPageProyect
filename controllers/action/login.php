<?php
session_start();
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['Email'])) ? $_POST['Email'] : '';
$password = (isset($_POST['Contraseña'])) ? $_POST['Contraseña'] : '';

// $pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuarios as u inner join Estudiantes as e on u.ID_user=e.ID_estudiante WHERE Email='$usuario' AND Contraseña='$password'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$programa="SELECT programas.nombre AS Programa FROM usuarios
INNER JOIN estudiantes ON usuarios.ID_user = estudiantes.ID_estudiante
INNER JOIN programas ON estudiantes.ID_Programa = programas.ID_programa
WHERE Email='$usuario' AND Contraseña='$password' ";
$np = $conexion->prepare($programa);
$np->execute();
if($resultado->rowCount() > 0){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $prouser= $np->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $data[0]['Nombre'];
    $_SESSION["a_usuario"] = $data[0]['Apellido'];
    $_SESSION["e_usuario"] = $data[0]['Email'];
    $_SESSION["p_usuario"] = $prouser[0]['Programa'];
    $_SESSION["c_usuario"] = $data[0]['Celular'];
}else{
    $_SESSION["s_usuario"] = null;
    
    $data=null;
    // $mensajeError = "Usuario y/o contraseña incorrecta";
    // echo json_encode(array("error" => $mensajeError));
}

print json_encode($data);
$conexion=null;
?>
