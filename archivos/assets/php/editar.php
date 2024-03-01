<?php
require('conexion.php');
if (isset($_GET['id'])) {
    $idArchivo = $_GET['id'];


    $sql = "SELECT * FROM archivo WHERE id = $idArchivo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombreArchivo = $row['nombre'];
        $usuario=$row['usario'];
        /* Aqui vamos a transfromar el codigo normal en echo codigo
        echo "</div>";
        echo "</div>";
        echo "</div>";
        */
        // Mostrar el formulario de edición
        /*
        echo "<link rel='stylesheet' href='assets/css/pop.css'>";
        echo "<div class='pop'>";
        echo "    <div id='miPopupEditar' class='popup'>";
        echo "        <div class='popup-contenido'>";
        echo "            <button class='cerrar' onclick='cerrarPopup()'>Cerrar</button>";
        echo "        <div class='pop_cont'>";
        */
        echo "<form action='guardar.php?id=$idArchivo' method='post' enctype='multipart/form-data'>";
        echo "<div class='datos'>";
        echo "    <label for='nombre'>Nuevo Nombre:</label>";
        echo "    <input type='text' class='nombre' id='nombre' name='nombre' placeholder='$nombreArchivo' ";
        echo "</div>";
        echo "<div class='datos'>";
        echo "    <label for='imagen'>Imagen:</label>";
        echo "    <input type='file' class='imagen' id='imagen' name='imagen'>";
        echo "</div>";
        echo "<div class='datos'>";
        echo "    <label for='file'>Selecciona un archivo:</label>";
        echo "    <input type='file' name='file' id='file'>";
        echo "</div>";
        echo "<div class='datos'>";
        echo "    <label for='opciones'>Tipo:</label>";
        echo "    <select name='opciones' id='opciones'>";
        echo "        <option value='1'>Libro</option>";
        echo "        <option selected value='2'>Proyecto</option>";
        echo "        <option value='3'>Articulo</option>";
        echo "        <option value='4'>Guía</option>";
        echo "        <option value='5'>Tesis</option>";
        echo "        <option value='6'>Trabajo Escolar</option>";
        echo "       <option value='7'>Investigacion</option>";
        echo "    </select>";
        echo "</div>";
        echo "<div class='datos'>";
        echo "    <label for='usuario'>Usuario</label>";
        echo "    <input type='text' name='usuario' placeholder='$usuario'>";
        echo "</div>";
        echo "<button type='submit' name='submit'>Guardar Cambios</button>";
        echo "</form>";
        /*
        echo "</div>";
        echo "</div>";
        echo "</div>";
        */
    } else {
        echo "Archivo no encontrado.";
    }

    $conn->close();
}
?>