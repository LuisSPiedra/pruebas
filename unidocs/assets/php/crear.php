<?php
require('conexion.php');
require('nombre.php');
$name = $_POST['nombre'];
$tipo = $_POST['opciones'];
$sinop =$_POST['sinopsis'];
$materias = $_POST['materias'];

if (isset($_POST['guardar'])) {
    //Carpeta para los archivos
    $carpeta_files = "files/";
    //Carpeta para las preview
    $carpeta_images = "image/";


    //Variables para imagen
    //Guardamos la imagen en una varibale
    $imagen=$_FILES['imagen'];
    //Guarmos su nombre
    $imagenNombre=$imagen['name'];
    //Carpeta temporal de la imagen
    $imagenTmp=$imagen['tmp_name'];


    //Varbles de el archivo
    //Guardamos el archivo en una variable
    $archivo=$_FILES['file'];
    //Guardamos su nombre en otra varible
    $archivoNombre=$archivo['name'];
    //Carpeta temporal del archivo
    $archivoTmp=$archivo['tmp_name'];

    //Guardamos los archivos e imagenes con nombres unicos para evitar problemas
    //Le asignamos un nombre unico las preview
    $imagenNombreUnico = uniqid().'_'.$imagenNombre;
    //Guardar los archivos con nombre unico
    $archivoNombreUnico = uniqid().'_'.$archivoNombre;

    //Creamos una varible donde guardamos la ruta para los archivos y las imagenes independientemente
    $rutaF = $carpeta_files . $archivoNombreUnico;
    $rutaI = $carpeta_images . $imagenNombreUnico;
    
    //Movemos de la carpeta temporal a la ruta que creamos
    move_uploaded_file($archivoTmp, $rutaF);
    move_uploaded_file($imagenTmp, $rutaI);

    //Ahora guardamos en la Base de datos 
    $sql = "INSERT INTO archivo (nombre,archivo, ruta,imagen,rutai, tipo,sinop,usuario,materia) VALUES ('$name', '$archivoNombreUnico', '$rutaF','$imagenNombreUnico', '$rutaI', '$tipo','$sinop', '$idu','$materias')";
    $resultado=$conn->query($sql);
    if($resultado){
        Header("location: ../../views/myfiles.php");
    }
}

$conn->close();
?>