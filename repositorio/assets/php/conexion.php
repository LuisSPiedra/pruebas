<?php
    // Paso 1: Conexión a la base de datos
    $servername = "tu_servidor_mysql";
    $username = "tu_usuario_mysql";
    $password = "tu_contrasena_mysql";
    $database = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Paso 2: Consulta a la base de datos
    $sql = "SELECT id, nombre FROM opciones";
    $result = $conn->query($sql);

    // Paso 3: Generación del elemento select
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row["id"]."'>".$row["nombre"]."</option>";
        }
    } else {
        echo "<option value=''>No hay opciones disponibles</option>";
    }

    // Cerrar la conexión
    $conn->close();
?>