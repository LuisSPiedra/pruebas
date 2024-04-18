<?php
// Incluir el archivo de conexión a la base de datos
include_once '../assets/php/conexion.php';

if(isset($_GET['upd'])) {
    $id = $_GET['upd'];

    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $count = $stmt->rowCount();

    if($count > 0) {
        $datos = $stmt->fetch();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/perfil.css">
    <title>Actualizar</title>
</head>
<body>
<div class= "container m-auto">
    <div class ="my-3 text-center d-flex flex-row justify-content-center"> <p><h1>Actualizar Perfil</h1></p></div>

    <form action="actualizar.php" method="post">
        <div class="form-group">
            <input type="hidden" name="id">
            <input type="text" name="username" id="username" class="form-control" placeholder="name" value="<?= isset($datos['username']) ? $datos['username'] : '' ?>"> 
        </div>
        <div class="form-group">
            <input type="text" name="userpass" id="userpass" class="form-control" placeholder="password" value="<?= isset($datos['contraseña']) ? $datos['contraseña'] : '' ?>">
        </div>
        <input type="submit" value="Actualizar" class="btn-success">
        <div class="table-cell">
        <a href="inicio.php" class="btn-verde">Regresar</a>
    </form>

</div>

<script>
    function mostrarAlerta() {
        alert("¡Actualización exitosa!");
        return true;
    }
</script>

</body>
</html>