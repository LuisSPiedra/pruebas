<?php
require('conexion.php');

$sql = "SELECT * FROM plantel WHERE id = 1"; // Ajusta el ID según tu caso
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name=$row["nombre"];
    $adress=$row["direccion"];
    $phone =$row["telefono"];
    $imagen = $row["imagen"];
} else {
    echo "No se encontraron resultados.";
}
$conn->close();
?>