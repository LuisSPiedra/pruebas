<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.php");
    
    exit();
}
$username = $_SESSION["username"];
// El usuario ha iniciado sesión correctamente, puedes mostrar la página de inicio aquí.
?>

<?php echo $username;?>