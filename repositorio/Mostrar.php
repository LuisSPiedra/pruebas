<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require('assets/php/conexion.php');
        $id=isset($_GET['id']) ? $_GET['id'] : '';

        $sql = "SELECT * FROM archivo where id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $titulo=$row['nombre'];
            echo "<title>$titulo</title>";
            
        }
    ?>
    
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div>
    <?php
    require('layout/header.php');
    ?>
        <div class="contenido_index">
            <div class="c_izq" id="c_izq">
                <?php
                require('layout/nav.html');
                ?>
            </div>

            <div class="c_der" id="c_der">
                <?php
                require('pages/mostrar.php');
                ?>
            </div>
            
        </div>
        
        <div>
        <?php
            require('pages/crear.html');
            require('layout/footer.html')
            ?>
        </div>
    </div>
    
        
</body>
</html>