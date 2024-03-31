<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
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
                require("../pages_admin/inicio.html");
            ?>
        </div>
        
    </div>
    
    <div class="footer">

    </div>
</body>
</html>