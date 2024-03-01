<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Unitarias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div>
        <?php
            require('views/header.html');
            require('views_bd/crear.html');
        ?>
        
    </div>
    <div class="Decargas">
        <?php
            require('assets/php/conexion.php');

            $sql = "SELECT * FROM archivo";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                $idArchivo=$row['id'];
                $nombre=$row['nombre'];
                $nombreArchivo = $row['archivo'];
                $rutaArchivo = $row['ruta'];
                echo "<p><a href='assets/php/'$rutaArchivo' download='$nombreArchivo'>$nombre</a> - <a href='assets/php/editar.php?id=$idArchivo'>Editar</a> - <a href='assets/php/eliminar.php?id=$idArchivo'>Eliminar</a></p>";
                
            }

            $conn->close();
        ?>
        
    </div>
</body>
</html>