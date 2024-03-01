<?php 
    include("conexion.php");
    $con=conection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form" onclick ="return update()">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="ID" value="<?= $row['ID']?>">
                <input type="text" name="Name" placeholder="Nombre" value="<?= $row['Name']?>">
                <input type="text" name="LastName" placeholder="Apellidos" value="<?= $row['LastName']?>">
                <input type="text" name="UserName" placeholder="Username" value="<?= $row['UserName']?>">
                <input type="text" name="Password" placeholder="Password" value="<?= $row['Password']?>">
                <input type="text" name="Email" placeholder="Email" value="<?= $row['Email']?>">

                <input type="submit" value="Actualizar" >
            </form>
        </div>
        <div>
        <script src="sweetalert.js"></script>
    </div>
    <script>
        function update(){
            Swal.fire({
            title: "Good job!",
            text: "Actualizado Exitosa Mente",
            icon: "success"
            });
        }
    </script>
</body>
    
</html>