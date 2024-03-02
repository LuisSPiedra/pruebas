<?php

require_once "conexion.php";

if (isset($_POST['registrar'])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

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