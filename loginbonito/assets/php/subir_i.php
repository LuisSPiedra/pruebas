<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carpeta_destino = "imagen/"; // Cambia "uploads/" por la carpeta en la que deseas almacenar los archivos
    $archivo_destino = $carpeta_destino.basename($_FILES["imagen"]["name"]);
    $name = $_FILES["imagen"]["name"];

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo_destino)) {
        echo "El archivo se subió correctamente.";
        echo "$name";
        $sql = "INSERT INTO imagen VALUES (null, '$name')"; // Ajusta el ID según tu caso
        $result = $conn->query($sql);
        if($result){
            Header("location: ../../pages/plantel.php");
        }
        echo '<img src="imagen/'.$name.'" alt="" width="100px" height="200px">';
    } else {
        echo "Hubo un problema al subir el archivo.";
    }
}

$conn->close();

?>