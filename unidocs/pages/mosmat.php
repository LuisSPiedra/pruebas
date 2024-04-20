<link rel="stylesheet" href="../assets/css/mosmat.css">
<div class="abcdario">
    <?php
    require('../assets/php/conexion.php');
    
    $abcdariosql="SELECT id,nombre FROM archivo where materia=$nombremat order by nombre";
    $res_abc=$conn->query($abcdariosql);
    $archivos_por_letra = array();
    if ($res_abc->num_rows > 0) {
        while($row = $res_abc->fetch_assoc()) {
            
            $primer_letra = strtoupper(substr($row["nombre"], 0, 1)); // Obtener la primera letra y convertirla a mayúsculas
            $archivos_por_letra[$primer_letra][] = array("id" => $row["id"], "nombre" => $row["nombre"]); // Almacenar el ID y nombre en el array asociativo
    
        }
    }
    $conn->close();
    ?>
    <?php
    // Iterar sobre cada letra del abecedario
    
    for ($letra = 'A'; $letra <= 'Z'; $letra++) {
        // Verificar si hay usuarios para esta letra
        if (isset($archivos_por_letra[$letra])) {
            echo "<p class='saludo'>$letra</p>"; // Imprimir la letra como título
            echo "<ul>"; // Comenzar una lista no ordenada
            // Iterar sobre los usuarios que comienzan con esta letra
            foreach ($archivos_por_letra[$letra] as $archivo) {
                echo "<li><a href='mostrar.php?id=". $archivo["id"] ."'>". $archivo["nombre"]."</a></li>"; // Imprimir el nombre del usuario como elemento de la lista
            }
            echo "</ul>"; // Cerrar la lista
        }
    }
    ?>
    
</div>