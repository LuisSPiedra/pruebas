<?php
require('../assets/php/conexion.php');
$id=isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM archivo where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$imagen = $row['rutai'];
$titulo=$row['nombre'];
$idArchivo=$row['id'];
$nombre=$row['nombre'];
$nombreArchivo = $row['archivo'];
$rutaArchivo = $row['ruta'];
$imagen=$row['rutai'];
$info =$row['sinop'];
$usuario=$row['usuario'];
?>
<link rel="stylesheet" href="../assets/css/mostrar.css">
<div class="libro_info">
    <div class="libro_img">
        <h2><?php echo "$titulo";?></h2>
        <img src="../assets/php/<?php echo"$imagen";?>" alt="">
    </div>
    <div class="libro_opciones">
        <div class="sinopsis">
            <h2>Sinopsis:</h2>
            <p>
                <?php
                echo"$info";?>
            </p>
            
            <div class="div_opc">
                <?php
                if($idu == $usuario){
                ?>
                <div class="opciones">
                    <ul>
                        <li>
                            <a href="../assets/php/<?php echo"$rutaArchivo";?>" download="<?php echo"$nombreArchivo";?>">
                                <div class="link_libro">
                                    <img src="../assets/resources/download_icon_128877.svg" alt="">
                                    <span>Descargar</span>
                                    
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <div class="opciones">
                    <ul>
                        <li>
                            <a href="../assets/php/<?php echo"$rutaArchivo";?>" download="<?php echo"$nombreArchivo";?>">
                                <div class="link_libro">
                                    <img src="../assets/resources/download_icon_128877.svg" alt="">
                                    <span>Editar</span>
                                    
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <div class="opciones">
                    <ul>
                        <li>
                            <a href="../assets/php/<?php echo"$rutaArchivo";?>" download="<?php echo"$nombreArchivo";?>">
                                <div class="link_libro">
                                    <img src="../assets/resources/download_icon_128877.svg" alt="">
                                    <span>Borrar</span>
                                    
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <?php
                
                }else{
                    
                
                
                ?>
                <div class="opciones">
                    <ul>
                        <li>
                            <a href="../assets/php/<?php echo"$rutaArchivo";?>" download="<?php echo"$nombreArchivo";?>">
                                <div class="link_libro">
                                    <img src="../assets/resources/download_icon_128877.svg" alt="">
                                    <span>Descargar</span>
                                    
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <?php
                }
                ?>
            </div>
            
        </div>
    </div>
</div>