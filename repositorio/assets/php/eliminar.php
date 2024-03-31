<?php
require('conexion.php');
if (isset($_GET['id'])) {
    
    $idArchivo = $_GET['id'];
    $sql = "SELECT * FROM archivo WHERE id = $idArchivo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rutaArchivo = $row['ruta'];
        $rutaImagen = $row['rutai'];
        echo "$rutaArchivo <br>";
        echo "$rutaImagen";
        unlink($rutaArchivo);
        unlink($rutaImagen);
        $sqlDelete = "DELETE FROM archivo WHERE id = $idArchivo";
        $conn->query($sqlDelete);
        /*// Eliminar el archivo del sistema de archivos
        unlink($rutaArchivo);

        // Eliminar la entrada de la base de datos
        $sqlDelete = "DELETE FROM archivos WHERE id = $idArchivo";
        $conn->query($sqlDelete);*/

        $conn->close();

        header('Location: ../../Myfiles.php');
        exit;
    } else {
        echo "Archivo no encontrado.";
    }
}
?>