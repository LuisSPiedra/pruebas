<link rel="stylesheet" href="../assets/css/inicio.css">

<div class="contenido_principal">
    
    <div class="tarjetas">
        <div class="nov">
            <div class="subtitle">
                <h2>Mas popular</h2>
            </div>
            <div class="subimage">
                <?php
                    require('../assets/php/conexion.php');
                    $ultiSQL = "SELECT * FROM archivo where id= 4";
                    $result = $conn->query($ultiSQL);
                    
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $id2=$row['id'];
                        $nombre=$row['nombre'];
                        $imagen=$row['rutai'];
                        $envid=urldecode($id2);
                        //?id=urlencode($id);&?nombre=urlencode($nombre);
                        echo "<a href='mostrar.php?id=$envid'>";
                        echo "<img src='../assets/php/$imagen'>";
                        echo "</a>";
                        echo "<a href='mostrar.php?id=$envid'>";
                        echo "<p>$nombre</p>";
                        echo "</a>";
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
                    require('../assets/php/conexion.php');
                    $ultiSQL = "SELECT * FROM archivo ORDER BY id DESC LIMIT 1";
                    $result = $conn->query($ultiSQL);
                    
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        
                        $id2=$row['id'];
                        $nombre=$row['nombre'];
                        $imagen=$row['rutai'];
                        $envid=urldecode($id2);
                        //?id=urlencode($id);&?nombre=urlencode($nombre);
                        echo "<a href='mostrar.php?id=$envid'>";
                        echo "<img src='../assets/php/$imagen'>";
                        echo "</a>";
                        echo "<a href='Mostrar.php?id=$envid'>";
                        echo "<p>$nombre</p>";
                        echo "</a>";
                    }else {
                        echo "No se encontraron registros.";
                    }
                    $conn->close();
                ?>
            </div>
            </div>
        <div class="nov">
            <div class="subtitle">
                <h2>Mis archivos</h2>
            </div>
            <div class="subimage">
            <?php
                    require('../assets/php/conexion.php');
                    $ultiSQL = "SELECT * FROM archivo where usuario= $idu ORDER BY id DESC LIMIT 1";
                    $result = $conn->query($ultiSQL);
                    
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        
                        $id2=$row['id'];
                        $nombre=$row['nombre'];
                        $imagen=$row['rutai'];
                        $envid=urldecode($id2);
                        //?id=urlencode($id);&?nombre=urlencode($nombre);
                        echo "<a href='mostrar.php?id=$envid'>";
                        echo "<img src='../assets/php/$imagen'>";
                        echo "</a>";
                        echo "<a href='mostrar.php?id=$envid'>";
                        echo "<p>$nombre</p>";
                        echo "</a>";
                    }else {
                        echo "No se encontraron registros.";
                    }
                    $conn->close();
                ?>
            </div>
        </div>
        
    </div>
</div>
