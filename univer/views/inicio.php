<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
                echo "<p class='saludo'>Bienvenid@ profesor: $nombre</p>";
                ?>
            
                <?php
                    require("../pages/inicio.html");
                ?>
                <div class="footer">
                    <p>pie</p>
                </div>
            </div>
            
        </div>
        
        
    </main>
</body>
</html>