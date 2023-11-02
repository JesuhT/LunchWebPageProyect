<?php
session_start();
unset($_SESSION["s_usuario"]);
unset($_SESSION["a_usuario"]);
unset($_SESSION["e_usuario"]);
unset($_SESSION["p_usuario"]);
unset($_SESSION["c_usuario"]);
unset($_SESSION["a_usuario"]);
session_destroy();
header("Location: /../../index.php");
?>