<link rel="stylesheet" href="../assets/css/materias.css">
<div class="materias">
    <?php
    require("../assets/php/conexion.php");
    $sqlmateria="SELECT materia,tema, COUNT(*) as conteo FROM conteo_temas GROUP by tema";
    $resmat=$conn->query($sqlmateria);
    while($row = $resmat->fetch_assoc()){
        $nom_mat=$row['tema'];
        $conteo=$row['conteo'];
        $idmat=$row['materia'];
    ?>
    <div class="cont_mate">
        <a <?php echo"href='mosmat.php?nombre=$idmat'"; ?>>
            <div class="arriba">
                <div class="izq_arriba">
                    <?php echo"<p>Archivos:".$conteo."</p>"?>
                </div>
            </div>
        </a>
        <a <?php echo"href='mosmat.php?nombre=$idmat'"; ?>>
            <div class="abajo">
                <div class="mat_title">
                    <?php echo"<p>".$nom_mat."</p>"; ?>
                </div>
            </div>
        </a>
    </div>
    <?php
    }
    ?>
    
</div>