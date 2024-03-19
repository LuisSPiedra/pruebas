    <link rel="stylesheet" href="assets/css/index.css">

    <div class="contenido_principal">
        <div class="titulos">
            <h1>Bienvenido</h1>
        </div>
        <div class="tarjetas">
            <div class="nov">
                <div class="subtitle">
                    <h2>Mas popular</h2>
                </div>
                <div class="subimage">
                    <?php
                        require('assets/php/conexion.php');
                        $ultiSQL = "SELECT * FROM archivo where id= 4";
                        $result = $conn->query($ultiSQL);
                        
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $nombre=$row['nombre'];
                            $imagen=$row['rutai'];
                            echo "<img src='assets/php/$imagen'>";
                            echo "<p>$nombre</p>";
                        }else {
                            echo "No se encontraron registros.";
                        }
                        $conn->close();   
                    ?>
                </div>
            </div>
            <div class="nov">
                <div class="subtitle">
                    <h2>Nuevo</h2>
                </div>
                <div class="subimage">
                    <?php
                        require('assets/php/conexion.php');
                        $ultiSQL = "SELECT * FROM archivo ORDER BY id DESC LIMIT 1";
                        $result = $conn->query($ultiSQL);
                        
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $nombre=$row['nombre'];
                            $imagen=$row['rutai'];
                            echo "<img src='assets/php/$imagen'>";
                            echo "<p>$nombre</p>";
                        }else {
                            echo "No se encontraron registros.";
                        }
                        $conn->close();   
                    ?>
                </div>
                </div>
            <div class="nov">
                <div class="subtitle">
                    <h2>Mis guardados</h2>
                </div>
                <div class="subimage">
                    <img src="assets/php/image/978968243930.jpg" alt="">
                    <p>Nombre</p>
                </div>
            </div>
            
        </div>
    </div>
