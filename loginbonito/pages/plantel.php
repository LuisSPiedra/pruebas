<html lang="es">
    <link rel="stylesheet" href="../assets/css/estillos.css">
    <title>Plantel</title>
    <div class="cont">
        <div class="btn-arriba">
            <input type="submit" value="Crear" class="crud" onclick="crear()">
            <input type="submit" value="Editar" class="crud" onclick="editar()">
            <input type="submit" value="Borar" class="crud" onclick="borrar()">
        </div>
        
        <div class="body">
            <?php require('../assets/php/consulta.php');
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    echo '<div class="card">';
                    echo '<img src="../assets/php/imagen/'.$row["imagen"].'" alt="Imagen de la tarjeta">';
                    echo '<div class="info">';
                    echo '<p>'.$row["nombre"].'</p>';
                    echo '<p>Telefono:'.$row["telefono"].'</p>';
                    echo '<p>Direccion:'.$row["direccion"].'</p>';
                    echo '</div>';
                    echo '</div>';
                }
    
            }else{
                echo "No se encontraron resultados.";
            }
            $conn->close();
            ?>
        </div>
        <script src="../assets/js/script.js"></script>

    </div>
</html>