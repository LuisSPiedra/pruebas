<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <main>
        <div class="header">
            <?php
                require("../layout_admin/header.php");
            ?>
        </div>
        <div class="contenido">
            <div class="navegacion">
                <?php require('../layout_admin/nav.html'); ?>
            </div>
            <div class="cuerpo">
                <?php
                    echo "<p class='saludo'>Bienvenid@ administrador: $nombre</p>";
                ?>
                <?php
                    require("../pages_admin/inicio.html");
                ?>
                <div class="footer">
                    
                </div>
            </div>
            
        </div>
        
        
    <main>
</body>
</html>