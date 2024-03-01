<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <button id="botonM" onclick="mostrar();">Mostrar Registros</button>
    <button id="botonMF" onclick="mostrarF();">Mostrar Formulario</button>

    <div id="formulario">
        <h1>hola 2</h1>
        <?php
        include('php/login.php');
        ?>
        <button id="botonO" onclick="ocultarF();">Ocultar imagen</button>
    </div>

    <div id="datos">
        <h1>hola bb</h1>
        <?php
        include('php/conexion.php');
        ?>
        <button id="botonO" onclick="ocultar();">Regresar</button>
    </div>
    
    <script src="js/scrip.js"></script>
    
</body>
</html>