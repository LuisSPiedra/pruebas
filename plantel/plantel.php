<html lang="es">
    <link rel="stylesheet" href="assets/css/plantelcss.css">
    <div class="cont">
        <div class="btn-arriba">
            <input type="submit" value="Crear" class="crud">
            <input type="submit" value="Editar" class="crud">
            <input type="submit" value="Borar" class="crud">
        </div>
        
        <div class="formulario">
            <div class="entrada">
                <input type="text" required>
                <label for="">Username</label>
            </div>
            <div class="entrada">
                <input type="password" required>
                <label for="">Password</label>
            </div>
            <input type="submit" value="Guardar">
        </div>
        <!--
        <div class="card">
            <?php require('assets/php/consulta.php') ?>
            <img src="assets/imagen/<?php echo $imagen; ?>" alt="Imagen de la tarjeta">
            <div class="info">
                
                <h3>Plantel:<?php echo $name; ?></h3>
                <p>Direccion:<?php echo $adress; ?></p>
                <p>Telefono:<?php echo $phone; ?></p>
            </div>-->
        </div>
    </div>
</html>