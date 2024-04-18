<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require('../assets/php/conexion.php');
        $id=isset($_GET['id']) ? $_GET['id'] : '';

        $sql = "SELECT * FROM archivo where id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $titulo=$row['nombre'];
            echo "<title>$titulo</title>";
            
        }
    ?>
    
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" href="../assets/resources/favicon.ico" type="image/png">
</head>
<body>
    <main>
        <div class="header">
            <?php
                require("../layout/header.php");
            ?>
        </div>
        <div class="contenido">
            <div class="navegacion">
                
                <?php require('../layout/nav.html'); ?>
            </div>
            <div class="cuerpo">
                
            
                <?php
                    require("../pages/mostrar.php");
                ?>
                <div class="footer">
                    <?php
                    require("../layout/footer.html");
                    ?>
                </div>
            </div>
            
        </div>
        
    </main>
</body>
</html>