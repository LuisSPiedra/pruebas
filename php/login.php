<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/logins.css">
</head>
<body>
    <div class="formu">
        <form action="" method="post">
            <h2>Hola</h2>
            <p>Inicia tu registro</p>

            <div class="entrada">
                <input type="text" name="name" placeholder="Nombre">
                <img src="assets/imagenes/name.svg" alt="" class="imagen">
            </div>

            <div class="entrada">
                <input type="email" name="mail" placeholder="Correo">
                <img src="assets/imagenes/email.svg" alt=""class="imagen">
            </div>

            <div class="entrada">
                <input type="text" name="direc" placeholder="Direccion">
                <img src="assets/imagenes/direction.svg" alt="" class="imagen">
            </div>

            <div class="entrada">
                <input type="text" name="phone" placeholder="Telefono">
                <img src="assets/imagenes/phone.svg" alt="" class="imagen">
            </div>

            <div class="entrada">
                <input type="password" name="pass" placeholder="Contraseña">
                <img src="assets/imagenes/password.svg" alt="" class="imagen">
            </div>

            <input type="submit" name="registrar" value="Guardar" class="btnG">

        </form>
    </div>
    
</body>
</html>