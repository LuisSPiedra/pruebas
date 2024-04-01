<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.php");
    
    exit();
}
$username = $_SESSION["username"];
// El usuario ha iniciado sesión correctamente, puedes mostrar la página de inicio aquí.
?>

<?php
require('header.html');

echo "<div class='header_design'>";
echo "<div class='logo'>";
echo  "<img src='../assets/resources/logouniver.png'>";
echo "</div>";
echo "<div class='username'>";
echo "<h1>$username</h1>";
echo "</div>";
echo "</div>";

?>
