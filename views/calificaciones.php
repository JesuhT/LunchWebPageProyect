<?php
session_start();

if ($_SESSION["ID_USUARIO"] === null) {
    // Redirige a login.php después de 2 segundos
    echo '<script>
        setTimeout(function() {
            window.location = "login.php";
        }, 2000);
    </script>';
    exit; // Asegura que no se procese más código PHP
}

if ($_SESSION["ID_ROL"] === 2) {
    // Redirige a index.php después de 2 segundos
    echo '<script>
        setTimeout(function() {
            window.location = "dashboardadmin.php";
        }, 2000);
    </script>';
    exit; // Asegura que no se procese más código PHP
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/calificaciones.css">
</head>
<body>





    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/log_in.js"></script>
</body>
</html>