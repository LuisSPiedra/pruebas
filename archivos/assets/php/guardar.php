<?php
require('conexion.php');
//Carpeta para los archivos
$carpeta_files = "files/";
//Carpeta para las preview
$carpeta_images = "image/";
$idArchivo = $_GET['id'];
$nuevoNombre = $_POST['nombre'];
$nuevaImagen = $_FILES['imagen'];
$archivoNuevo = $_FILES['file'];
$tipoNuevo = $_POST['opciones'];
$usuarioN = $_POST['usuario'];

if (isset($_POST['submit'])) {
    
    
    //Guardamos la imagen en una varibale
    //Guarmos su nombre
    $imagenNombre=$nuevaImagen['name'];
    //Carpeta temporal de la imagen
    $imagenTmp=$nuevaImagen['tmp_name'];
    
    
    //Varbles de el archivo
    //Guardamos el archivo en una variable
    $archivoNombre=$archivoNuevo['name'];
    //Carpeta temporal del archivo
    $archivoTmp=$archivoNuevo['tmp_name'];

    $imagenNombreUnico = uniqid().'_'.$imagenNombre;
    //Guardar los archivos con nombre unico
    $archivoNombreUnico = uniqid().'_'.$archivoNombre;

    //Creamos una varible donde guardamos la ruta para los archivos y las imagenes independientemente
    $rutaFN = $carpeta_files . $archivoNombreUnico;
    $rutaIN = $carpeta_images . $imagenNombreUnico;
    move_uploaded_file($archivoTmp, $rutaFN);
    move_uploaded_file($imagenTmp, $rutaIN);

    $ver = "SELECT * from archivo where id=$idArchivo";
    $result = $conn->query($ver);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombreAA = $row['archivo'];
        $rutaArchivo=$row['ruta'];
        $nombreAI = $row['imagen'];
        $rutaI = $row['rutai'];
        
        unlink($rutaArchivo);
        unlink($rutaI);
        $sql = "UPDATE archivo SET nombre = '$nuevoNombre', archivo='$archivoNombreUnico',ruta='$rutaFN',imagen='$imagenNombreUnico',rutai = '$rutaIN', tipo ='$tipoNuevo', usario='$usuarioN' WHERE id = $idArchivo";

        $conn->query($sql);

    }
    
    $conn->close();

    header('Location: ../../index.php');
    exit;
}
?>