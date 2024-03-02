<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.php");
    
    exit();
}
$username = $_SESSION["username"];
// El usuario ha iniciado sesión correctamente, puedes mostrar la página de inicio aquí.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
</head>
<body>
<h1>Hola <?php echo "$username"?></h1>
<h2>Bienvenido a la página de inicio</h2>
<p><a href="assets/php/cerrar.php">Cerrar sesión</a></p>

</body>
</html>