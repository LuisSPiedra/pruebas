<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
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
                echo "<p class='saludo'>Bienvenid@: $username</p>";
                ?>
            
                <?php
                    require("../pages/inicio.php");
                ?>
                <div class="footer">
                <p>Síguenos en nuestras redes sociales:</p>
                <ul class="redes-sociales">
                    <li><a href="https://facebook.com"><img src="../assets/images/facebook.png" alt="Facebook"></a></li>
                    <li><a href="https://twitter.com"><img src="../assets/images/twitter.png" alt="Twitter"></a></li>
                    <li><a href="https://instagram.com"><img src="../assets/images/instagram.png" alt="Instagram"></a></li>
                </ul>

                </div>
            </div>
            
        </div>
        
    </main>
</body>
</html>