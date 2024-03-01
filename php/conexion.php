<?php
$enlace = mysqli_connect("localhost","root","","univer");
if(!$enlace){
    die("No se pudo conectar con la BD");
}

$mysqli = new mysqli("localhost", "root", "", "univer");
$query = "SELECT * FROM alumno";

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Matricula</font> </td> 
          <td> <font face="Arial">Nombre</font> </td> 
          <td> <font face="Arial">Apellidos</font> </td> 
          <td> <font face="Arial">Grupo</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["matricula"];
        $field2name = $row["nombre"];
        $field3name = $row["apellidos"];
        $field4name = $row["grupo"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
}
mysqli_error($enlace);
?>