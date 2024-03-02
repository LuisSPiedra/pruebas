<html lang="es">
    <link rel="stylesheet" href="assets/css/materias.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <div class="contenido_principal">
        <div class="titulos">
            <div class="a">
                <h1>Mis archivos</h1>
            </div>
            <div class="back">
                <img src="assets/image/3114883.png" alt="">
                <input type="submit" value="Inicio" onclick="inicio(); return false;">
            </div>
            
        </div>
        <div class="seleccion">
            <label for="opciones">Selecciona una opción:</label>
            <select name="opciones" id="opciones">
                <option value="1">Banana</option>
                <option selected value="2">Cherry</option>
                <option value="3">Lemon</option>
            </select>
            
            <button class="bntM" onclick="mostrar()">Buscar</button>
        </div>
        <div class="mostrar">
            <div class="">
                <input type="submit" value="Crear" class="Bpop" id="crear" onclick="mostrarPopup()">
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
                            $imagen=$row['rutai'];
                            echo "<img src='assets/php/$imagen' alt='' style='width: 50px; height: 50px;'>";
                            echo "<p><a href='assets/php/$rutaArchivo' download='$nombreArchivo'>$nombre</a> - <a href='assets/php/editar.php?id=$idArchivo'>Editar</a> - <a href='assets/php/eliminar.php?id=$idArchivo'>Eliminar</a></p>";
                            
                            
                        }  
                    ?>
                </div>
            </div>
            <div id="contenido1" class="contenido">
                <div class="carta">
                    <div class="vista">

                        <img src="assets/php/image/23_750x810.webp" alt="">
                    </div>
                    <div class="nombre">
                        <p>Cherry</p>
                    </div>
                </div>
                
            </div>
        
            <div id="contenido2" class="contenido">
                <p>Cherry</p>
            </div>
        
            <div id="contenido3" class="contenido">
                <p>Lemon</p>
            </div>
        </div>
        
    </div>
</html>