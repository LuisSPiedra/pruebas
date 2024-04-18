<link rel="stylesheet" href="../assets/css/files.css">
<div class="files">
    <div class="files_head">
        <div class="files_titulo">
            <p>Mis archivos</p>
        </div>
        <div class="files_add">
            <a href="" id="openModalLink">
                <img src="../assets/resources/Add.svg" alt="">
            </a>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal_head">
                        <div class="modal_title">
                            <p>Agregar</p>
                        </div>
                        <div class="cerrar_modal">
                            <span class="close">&times;</span>
                        </div>
                    </div>
                    
                    <div class="cuerpo_modal">
                        <div class="formu_modal">
                            <form action="../assets/php/crear.php" method="post" enctype="multipart/form-data">
                                <div class="entradas_modal">
                                    <div class="entrada1">
                                        <input type="text" required class="nombre" id="nombre" name="nombre">
                                        <label for="">Nombre</label>
                                    </div>
                                    <div class="entrada">
                                        <label for="">Imagen</label><br><br>
                                        <input type="file" required id="imagen" name="imagen">
                                    </div>
                                    <div class="entrada">
                                        <label for="">Archivo</label><br><br>
                                        <input type="file" required name="file" id="file">
                                    </div>
                                    <div class="entrada">
                                        <label for="opciones">Tipo:</label><br><br>
                                            <select name="opciones" id="opciones">
                                            <option value="1">Libro</option>
                                            <option selected value="2">Proyecto</option>
                                            <option value="3">Articulo</option>
                                            <option value="4">Guía</option>
                                            <option value="5">Tesis</option>
                                            <option value="6">Trabajo Escolar</option>
                                            <option value="7">Investigacion</option>
                                        </select>
                                    </div>
                                    <div class="entrada">
                                        <label for="materias">Materias:</label><br><br>
                                            <select name="materias" id="materias">
                                            
                                                <?php
                                                require('../assets/php/conexion.php');

                                                
                                                $sqle = "SELECT * FROM sublicen";
                                                $resultado2 = mysqli_query($conn, $sqle);
                                                
                                                while ($row = mysqli_fetch_assoc($resultado2)) {
                                                    echo "<option value='".$row['id']."'>".$row['id']."-".$row['nombre']."</option>";
                                                }
                                                ?>
                                                
                                        </select>
                                    </div>
                                    
                                    <div class="entrada">
                                        <label for="">Sinopsis:</label><br><br>
                                        <textarea cols="30" rows="4" placeholder="Describe un poco tu archivo, que es..?, de que trata y como es "  name="sinopsis" id="sinopsis"></textarea>
                                            
                                    </div>
                                </div>
                                <div class="enviar_datos">
                                    <div class="info">
                                        <p>
                                            Recuerda guardar tu archivo
                                        </p>
                                    </div>
                                    <input id="guardar" name="guardar" value="Guardar" class="btn_g" type="submit">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div>
    <?php
    /*require('files.html');*/
    require('../assets/php/conexion.php');
    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Definir el número de resultados por página
    $resultadosPorPagina = 10;
    // Obtener el número total de registros
    $queryb = "SELECT COUNT(*) as total FROM archivos_usuarios where id=$id";
    $resultado = mysqli_query($conn, $queryb);
    $fila = mysqli_fetch_assoc($resultado);
    $totalResultados = $fila['total'];

    // Calcular el número total de páginas
    $totalPaginas = ceil($totalResultados / $resultadosPorPagina);

    // Obtener el número de página actual
    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

    // Calcular el índice inicial del primer resultado en la página actual
    $indiceInicial = ($paginaActual - 1) * $resultadosPorPagina;

    // Obtener los registros para la página actual
    $queryc = "SELECT * FROM archivos_usuarios where id=$id LIMIT $indiceInicial, $resultadosPorPagina";
    $resultado = mysqli_query($conn, $queryc);

    
    ?>
    <div class="archivo_usuarios">
        <div class="mi_archivos">
            <ul>
                <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $envid =$fila['archivo'];
                    echo "<li>";
                    echo"<a href='mostrar.php?id=$envid'>";
                    echo "<div class='link_arch'>";
                    echo "<div class='archivo'>";
                    /*echo "<div class='img_arch'>";
                    echo"<img src='../assets/php/".$fila['rutai']."'>";
                    echo "</div>";*/
                    echo "<div class='nom_arch'>";
                    echo "<span>".$fila['nombre']."</span>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</a>";
                    echo "</li>";
                }
                ?>
            </ul>
            <?php
            if($totalPaginas>1)
            {
                for ($i = 1; $i <= $totalPaginas; $i++) {
                    echo "<div class='paginas'>";
                    echo "<a href='index.php?pagina=$i'>";
                    echo "<div class='pags_des'>";
                    echo "<span>$i</span>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>
    <?php
    /* Mostrar los resultados
    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<li>";
        echo $fila['id'].'.- '. $fila['nombre'];
        echo "</li>";
    }
    echo"</ul>";
    echo"<br>";*/
    /* Mostrar los enlaces de paginación
    if($totalPaginas>1)
    {
        for ($i = 1; $i <= $totalPaginas; $i++) {
            echo "<a href='index.php?pagina=$i'>$i</a> ";
        }
    }*/
    

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
</div>
<script src="../assets/js/files.js"></script>