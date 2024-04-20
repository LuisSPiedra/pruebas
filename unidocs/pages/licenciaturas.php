<link rel="stylesheet" href="../assets/css/materias.css">
<div class="materias">
    <?php
    require("../assets/php/conexion.php");
    $sqllicen="SELECT num_mat,materia,num_lic,licenciatura,COUNT(*) as conteo FROM conteo_licen GROUP by licenciatura";
    $resmat=$conn->query($sqllicen);
    while($row = $resmat->fetch_assoc()){
        $n_m=$row['num_mat'];
        $mat=$row['materia'];
        $n_l=$row['num_lic'];
        $lic=$row['licenciatura'];
        $cont=$row['conteo'];
    ?>
    <div class="cont_mate">
        <a <?php echo"href='moslic.php?nombre=$n_l'"; ?>>
            <div class="arriba">
                <div class="izq_arriba">
                    <?php echo"<p>Archivos:".$cont."</p>"?>
                </div>
            </div>
        </a>
        <a <?php echo"href='moslic.php?nombre=$n_l'"; ?>>
            <div class="abajo">
                <div class="mat_title">
                    <?php echo"<p>".$lic."</p>"; ?>
                </div>
            </div>
        </a>
    </div>
    <?php
    }
    ?>
    
</div>