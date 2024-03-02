<?php
if(isset($_POST['cerrar']))
{
    session_start();
    session_destroy();
    header("location: ../../index.php");
    exit();
}

?>