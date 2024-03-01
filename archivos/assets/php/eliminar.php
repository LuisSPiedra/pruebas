<?php
if (isset($_GET['id'])) {
    $idArchivo = $_GET['id'];

    $conn = new mysqli('nombre_servidor', 'nombre_usuario', 'contraseña', 'nombre_base_datos');

    $sql = "SELECT * FROM archivos WHERE id = $idArchivo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rutaArchivo = $row['ruta'];

        // Eliminar el archivo del sistema de archivos
        unlink($rutaArchivo);

        // Eliminar la entrada de la base de datos
        $sqlDelete = "DELETE FROM archivos WHERE id = $idArchivo";
        $conn->query($sqlDelete);

        $conn->close();

        header('Location: descargar_archivos.php');
        exit;
    } else {
        echo "Archivo no encontrado.";
    }
}
?>