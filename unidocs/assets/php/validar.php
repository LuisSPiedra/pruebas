<?php
    session_start();
    require_once "conexion.php";
    if (isset($_POST['iniciar'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($idu,$password);
            $stmt->fetch();
    
            if (($password)) {
                $_SESSION["id"] = $idu;
                $_SESSION["username"] = $username;
                header("location: views/inicio.php");
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }
    
        $stmt->close();
    }
?>