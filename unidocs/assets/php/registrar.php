<?php

require_once "conexion.php";

if (isset($_POST['registrar'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $correo=$_POST["mail"];
    $nombre=$_POST["nombre"];
    $sqlver="SELECT * FROM usuarios where username='$username' or correo='$correo'";
    $resvalidar=$conn->query($sqlver);
    if ($resvalidar->num_rows > 0)
    {
        echo "<p class='alerta'>Error: El correo electrónico ya está registrado en la base de datos.</p>";
    }else{
        $sqladduser="INSERT INTO usuarios(nombre,correo,username,password) values ('$nombre','$correo','$username','$password')";
        
        if ($conn->query($sqladduser) === TRUE) {
            echo "Registro insertado correctamente.";
            header("location: index.php");
        } else {
            echo "Error: " . $sqladduser . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>