<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositorio</title>
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
                require('pages/nav.html');
                ?>
            </div>

            <div class="c_der" id="c_der">
                <?php
                require('pages/materias.html')
                ?>
            </div>
            
        </div>
        
        <div>
        <?php
            require('layout/footer.html')
            ?>
        </div>
    </div>
    
        
</body>
</html>