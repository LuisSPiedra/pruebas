<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.php");
    
    exit();
}
$nombre = $_SESSION["nombre"];
// El usuario ha iniciado sesión correctamente, puedes mostrar la página de inicio aquí.
?>

<?php
require('header.html');

echo "<div class='header_design'>";
echo "<div class='logo'>";
echo  "<button class='inicio_btn'><img src='../assets/resources/logopng.png'></button>";
echo "</div>";
echo "<div class='username'>";
echo "<button class='user_menu'>";
echo "<img src='../assets/resources/Iconos 03 Usuario.svg' alt='Icono'class='button-icon'>";
echo "<span>$nombre <img src='../assets/resources/downarrow_121316.svg' alt='Icono'class='down'></span>"; 
echo "</button>";
echo "</div>";
echo "</div>";

?>
