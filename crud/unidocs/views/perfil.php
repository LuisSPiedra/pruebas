<?php
// Archivo de conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "u600466123_pruebas";

try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Resto del código de la página HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/perfil.css">

    <title>PERFIL</title>
</head>
<body>
    <h1 class="titulo">Editar Perfiles</h1>
    <table class="table">
        <thead>
            <tr>
                <td class="table-header">Usuario</td>
                <td class="table-header">Contraseña</td>
                <td class="table-header" colspan="2">Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuarios";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $count = $stmt->rowCount();

            if($count >0){
                $registros = $stmt->fetchAll();
            } 
            foreach($registros AS $r):
            ?>
            
    <td class="table-cell"><?=$r['username']?></td>
    <td class="table-cell"><?=$r['password']?></td>
    <td class="table-cell"><a href="actualizar.php?id=<?=$r['id']?>">Actualizar</a></td>
    <td class="table-cell"><a href="eliminar.php?id=<?=$r['id']?>">Eliminar</a></td>
</tr>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <div class="table-cell">
        <a href="inicio.php" class="btn-verde">Regresar</a>
    
        <div class="footer">
                <p>Síguenos en nuestras redes sociales:</p>
                <ul class="redes-sociales">
                    <li><a href="https://facebook.com"><img src="../assets/images/facebook.png" alt="Facebook"></a></li>
                    <li><a href="https://twitter.com"><img src="../assets/images/twitter.png" alt="Twitter"></a></li>
                    <li><a href="https://instagram.com"><img src="../assets/images/instagram.png" alt="Instagram"></a></li>

</body>
</html>