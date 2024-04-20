<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "pruebas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los nombres y IDs ordenados alfabéticamente
$sql = "SELECT id, nombre FROM archivo ORDER BY nombre";
$result = $conn->query($sql);

// Crear un array asociativo para almacenar los usuarios por letra del abecedario
$usuarios_por_letra = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $primer_letra = strtoupper(substr($row["nombre"], 0, 1)); // Obtener la primera letra y convertirla a mayúsculas
        $usuarios_por_letra[$primer_letra][] = array("id" => $row["id"], "nombre" => $row["nombre"]); // Almacenar el ID y nombre en el array asociativo
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios por letra</title>
</head>
<body>
    <h1>Usuarios por letra del abecedario</h1>
    <?php
    // Iterar sobre cada letra del abecedario
    for ($letra = 'A'; $letra <= 'Z'; $letra++) {
        // Verificar si hay usuarios para esta letra
        if (isset($usuarios_por_letra[$letra])) {
            echo "<h2>$letra</h2>"; // Imprimir la letra como título
            echo "<ul>"; // Comenzar una lista no ordenada
            // Iterar sobre los usuarios que comienzan con esta letra
            foreach ($usuarios_por_letra[$letra] as $usuario) {
                echo "<li>ID: " . $usuario["id"] . " - Nombre: " . $usuario["nombre"] . "</li>"; // Imprimir el ID y nombre del usuario como elemento de la lista
            }
            echo "</ul>"; // Cerrar la lista
        }
    }
    ?>
</body>
</html>