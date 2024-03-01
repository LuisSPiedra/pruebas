<?php
require('conexion.php');

$name = $_POST['name'];
$adress = $_POST['adress'];
$phone = $_POST['phone'];



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carpeta_destino = "imagen/"; // Cambia "uploads/" por la carpeta en la que deseas almacenar los archivos
    $nombre_original = $_FILES["imagen"]["name"];
    $nombre_unico = uniqid().'_'.$nombre_original;
    $archivo_destino = $carpeta_destino . $nombre_unico;
    $img = $nombre_unico;

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo_destino)) {
        /*Ingresar los datos a la base de datos*/
        $sql = "INSERT INTO plantel VALUES (null, '$name', '$adress', '$phone', '$img')"; // Ajusta el ID según tu caso
        $result = $conn->query($sql);
        if($result){
            Header("location: ../../pages/plantel.php");
        }
    } else {
        echo "Hubo un problema al subir el archivo.";
    }
}

$conn->close();
?>