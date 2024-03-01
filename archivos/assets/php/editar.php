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
        
        // Puedes agregar más campos para editar según sea necesario
        /*<form action="assets/php/guardar.php?id=$idArchivo" method="post" enctype="multipart/form-data">
                        echo "<div class='datos'>";
                        echo "    <label for='nombre'>Nuevo Nombre:</label>";
                        echo "    <input type='text' class='nombre' id='nombre' name='nombre' placeholder='Nombre'>";
                        echo "</div>";
                        echo "<div class='datos'>";
                        echo "    <label for='imagen'>Imagen:</label>";
                        echo "    <input type='file' class='imagen' id='imagen' placeholder='Imagen' name='imagen'>";
                        echo "</div>";
                        echo "<div class='datos'>";
                        echo "    <label for='file'>Selecciona un archivo:</label>";
                        echo "    <input type='file' name='file' id='file'>";
                        echo "</div>";
                        
                        echo "<div class='datos'>";
                        echo "    <label for='opciones'>Tipo:</label>";
                        echo "    <select name='opciones' id='opciones'>";
                        echo "        <option value='1'>Libro</option>
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
                        echo "    <input type='text' name='usuario'>";
                        echo "</div>";
                        echo "<div class='datos'>";
                        echo "    <input type='submit' value='Guardar' id='guardar' name='guardar'>";
                        echo "</div>";
                    echo "</form>";
                    */
        // Mostrar el formulario de edición
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
    } else {
        echo "Archivo no encontrado.";
    }

    $conn->close();
}
?>