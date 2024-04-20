<?php

require_once "conexion.php";

if (isset($_POST['registrar'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $correo=$_POST["mail"];
    $sqlver="SELECT * FROM usuarios where username=$username or ";
    $stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Usuario registrado correctamente. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar el usuario";
    }

    $stmt->close();
}
?>