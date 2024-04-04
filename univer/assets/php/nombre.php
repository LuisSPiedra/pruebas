<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.php");
    
    exit();
}
$nombre = $_SESSION["nombre"];
// El usuario ha iniciado sesión correctamente, puedes mostrar la página de inicio aquí.
?>