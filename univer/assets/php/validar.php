<?php
    session_start();
    require_once "conexion.php";
    if (isset($_POST['iniciar'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        $stmt = $conn->prepare("SELECT id,nombre, password FROM profesor WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id,$nombre, $password);
            $stmt->fetch();
    
            if (($password)) {
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION["nombre"] = $nombre;
                header("location: views/inicio.php");
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }
    
        $stmt->close();
    }
    if (isset($_POST['admin_iniciar'])) {
        $username = $_POST["admin_username"];
        $password = $_POST["admin_password"];
    
        $stmt = $conn->prepare("SELECT id,nombre, password FROM admin WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id,$nombre, $password);
            $stmt->fetch();
    
            if (($password)) {
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION["nombre"] = $nombre;
                header("location: views_admin/inicio.php");
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }
    
        $stmt->close();
    }
?>