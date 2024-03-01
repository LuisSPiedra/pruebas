<html lang="es">
    <link rel="stylesheet" href="../assets/css/card.css">
<div class="body">
    <?php require('../assets/php/consulta.php');
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            echo '<div class="card">';
            echo '<img src="../assets/imagen/'.$row["imagen"].'" alt="Imagen de la tarjeta">';
            echo '<div class="info">';
            echo '<p>Plantel:'.$row["nombre"].'</p>';
            echo '<p>Direccion:'.$row["direccion"].'</p>';
            echo '<p>Telefono:'.$row["telefono"].'</p>';
            echo '</div>';
            echo '</div>';
        }
    
    }else{
        echo "No se encontraron resultados.";
    }
    $conn->close();
    ?>
</div>
</html>