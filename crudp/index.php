<?php
include('conexion.php');

$con = conection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class= "users-form">
    <form action="insert_user.php" method = "POST">
    <h1>Crear Usuario</h1>
    <input type="text" name="Name" placeholder ="Nombre"> 
    <input type="text" name="LastName" placeholder ="Apellido">
    <input type="text" name="UserName" placeholder ="UserName">
    <input type="text" name="Pasword" placeholder ="pasword">
    <input type="text" name="Email" placeholder ="Email">

    <input type="submit" value ="Agregar Usuarios" onclick ="return exito()">
</div>
<div class = "users-table">
    <h2>Usuarios Registrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Username</th>
                <th>Pasword</th>
                <th>E-mail</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <div>
    <script src="sweetalert.js"></script>
</div>
        <tbody>
        <script>
    function exito(){
        Swal.fire({
  title: "Good job!",
  text: "Agregado Exitosa Mente",
  icon: "success"
});
    }
</script>

<?php 
while($row = mysqli_fetch_array($query)) :
?>
    <tr>
        <th> <?= $row['ID'] ?> </th>
        <th> <?= $row['Name'] ?> </th>
        <th> <?= $row['LastName'] ?> </th>
        <th> <?= $row['UserName'] ?> </th>
        <th> <?= $row['Password'] ?> </th>
        <th> <?= $row['Email'] ?> </th>
        <th> <a href="update.php?id=<?= $row['ID'] ?>" class ="users-table--edit">Editar</a></th>
        <th><a href="delete_user.php?id=<?= $row['ID'] ?>" class ="users-table--delete">Eliminar</a></th>
    </tr>
<?php
endwhile;
?>
</tbody>
        
        
    </table>
</div>

</body>

</html>