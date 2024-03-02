<?php
require('assets/php/validar.php');
require('assets/php/registrar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>

    <h2>Iniciar sesión</h2>
    <form action="" method="post">
        <label>Usuario:</label>
        <input type="text" name="username" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Iniciar sesión" name="iniciar">
    </form>
    <h2>Registro de usuario</h2>
    <form action="" method="post">
        <label>Usuario:</label>
        <input type="text" name="username" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Registrarse" name="registrar">
    </form>

</body>
</html>