<?php
require("../assets/php/conexion.php");
$sql = "SELECT * FROM archivos_usuarios where id=$id";
$result = $conn->query($sql);
$conn->close();
while ($row = $result->fetch_assoc()) {
    $idArchivo=$row['id'];
    $nombre=$row['nombre'];
    $imagen=$row['rutai'];
    $archivo =$row['archivo'];
    $envid=urldecode($archivo);
    echo "<img src='../assets/php/$imagen' alt='' style='width: 50px; height: 50px;'>";
    echo "<p><a href='mostrar.php?id=$envid'>$nombre</a>";
    
} 
?>
