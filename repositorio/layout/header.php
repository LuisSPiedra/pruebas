<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("location: login.php");
    
    exit();
}
$username = $_SESSION["username"];
// El usuario ha iniciado sesión correctamente, puedes mostrar la página de inicio aquí.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    
</head>
<body class="cuerpazo">
    <div class="cont">
        <div class="head">
            <div class="izquierda">
                <!-- Contenido del div izquierdo -->
                <div class="actividades">
                    <div class="buscador">
                        <img src="assets/image/uni.png" alt="" class="logo" >
                        <input type="text" class="barra" placeholder="Buscar...">
                        <button class="buscar">Buscar</button>
                    </div>
                    <div class="categorias">
                        
                            <div class="cad">
                                <input type="submit" value="Mis archivos" class="btnE" onclick="arch(); return false;">
                            </div>
                            <div class="cad">
                                <input type="submit" value="Licenciaturas" class="btnE" onclick="lic(); return false;">
                            </div>
                            <div class="cad">
                                <input type="submit" value="Materias" class="btnE" onclick="materia(); return false;">
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="derecha">
                <!-- Contenido del div derecho -->
                <div class="perfil">
                    
                    <form action="assets/php/cerrar.php" method="post" style="padding =0; margin=0;">
                        <img src="assets/image/perfil.jpg" alt="" class="image">
                    
                        <input type="submit" value="<?php echo $username;?>" class="user" name="cerrar">
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/index.js"></script>
</body>
</html>