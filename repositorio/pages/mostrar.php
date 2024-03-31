<link rel="stylesheet" href="assets/css/mostrar.css">
<link rel="stylesheet" href="assets/css/index.css">
<div class="cont_libro">
    <?php
        require('assets/php/conexion.php');
        $id=isset($_GET['id']) ? $_GET['id'] : '';

        $sql = "SELECT * FROM archivo where id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imagen = $row['rutai'];
            $titulo=$row['nombre'];
            $idArchivo=$row['id'];
            $nombre=$row['nombre'];
            $nombreArchivo = $row['archivo'];
            $rutaArchivo = $row['ruta'];
            $imagen=$row['rutai'];
            $info =$row['sinop'];
            echo "<div class='titulos'>";
            echo "<h1>$titulo</h1>";
            echo "</div>";
            echo "<div class='informacion'>";
            echo "<div class='img_mostrar'>";
            echo "<img src='assets/php/$imagen'>";
            echo "</div>";
            echo "<div class='descripcion_libro'>";
            echo "<h2>Descripción</h2>";
            echo "<div class='info_li'>";
            echo "Sinopsis: $info";

            echo "</div>";
            echo "<div class='opciones_li'>";
            echo "<p><a href='assets/php/$rutaArchivo' download='$nombreArchivo'>$nombre</a> - <a href='assets/php/editar.php?id=$idArchivo'>Editar</a> - <a href='assets/php/eliminar.php?id=$idArchivo'>Eliminar</a></p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }
    ?>
</div>