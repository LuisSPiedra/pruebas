<?php
require('../assets/php/nombre.php');
?>
<link rel="stylesheet" href="../assets/css/header.css">
<div class="header_design">
    <div class="logo">
        <a href="../views/inicio.php">
            <img src="../assets/resources/logopng.png" alt="">
        </a>

    </div>
    <div class="username">
        <div class="perfil_down">
            <a href="#" class="dropbtn" onclick="toggleMenu()">
                <img src="../assets/resources/Iconos 03 Usuario.svg" class="button-icon" alt="">
                <span><?php echo "$nombre";?></span>
            </a>
        </div>
        
        <div class="dropdown-content" id="myDropdown">
            <a href="#" class="separ"><img src="../assets/resources/Iconos 03 Usuario.svg" alt="">Perfil</a>
            <a href="../assets/php/cerrar.php"><img src="../assets/resources/Salir.svg" alt="">Cerrar</a>
        </div>
    </div>
    
</div>
<script src="../assets/js/menu_usuario.js"></script>