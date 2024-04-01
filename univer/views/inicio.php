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
                require("../layout/header.php");
            ?>
        </div>
        <div class="contenido">
            <div class="navegacion">

            </div>
            <div class="cuerpo">
                <?php
                    require("../pages/inicio.html");
                ?>
            </div>
            
        </div>
        
        <div class="footer">

        </div>
    </main>
</body>
</html>