<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
</head>
<body>
    <h1>Artículos</h1>
    
    <?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "pruebas");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Definir el número de resultados por página
    $resultadosPorPagina = 10;

    // Obtener el número total de registros
    $query = "SELECT COUNT(*) as total FROM articulo";
    $resultado = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($resultado);
    $totalResultados = $fila['total'];

    // Calcular el número total de páginas
    $totalPaginas = ceil($totalResultados / $resultadosPorPagina);

    // Obtener el número de página actual
    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

    // Calcular el índice inicial del primer resultado en la página actual
    $indiceInicial = ($paginaActual - 1) * $resultadosPorPagina;

    // Obtener los registros para la página actual
    $query = "SELECT * FROM articulo LIMIT $indiceInicial, $resultadosPorPagina";
    $resultado = mysqli_query($conexion, $query);

    // Mostrar los resultados
    
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo $fila['id'].".- ". $fila['nombre'];
    }
    if($totalPaginas>1)
    {
        echo"<br>";
        // Mostrar los enlaces de paginación
        for ($i = 1; $i <= $totalPaginas; $i++) {
            echo "<a href='index.php?pagina=$i'>$i</a> ";
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>