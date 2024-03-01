<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositorio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="sep">
        <?php
        require('layout/header.html');
        ?>
    
        <div>
            <?php
            require('pages/index.html')
            ?>
        </div>
        
    </div>
    <div>
        <?php
            require('layout/footer.html')
        ?>
    </div>
        
</body>
</html>