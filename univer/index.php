<?php
require('assets/php/validar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Eres profesor?</h3>
                        <p>Da click aqui para ingresar como Profesor</p>
                        <button id="btn__iniciar-sesion">Profesor</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Eres administrador?</h3>
                        <p>Da click aqui para ingresar como administrador</p>
                        <button id="btn__registrarse">Administrador</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" class="formulario__login" method="post">
                        <h2>Profesor</h2>
                        <input type="text" placeholder="Matricula" name="username" required>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <button name="iniciar">Entrar</button>
                    </form>
                    <p id="error-message"></p>
                    <!--Register-->
                    <form action="" class="formulario__register" method="post">
                        <h2>Administrador</h2>
                        <input type="text" placeholder="Matricula" name="admin_username" required>
                        <input type="password" placeholder="Contraseña" name="admin_password" required>
                        <button name="admin_iniciar">Entrar</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/login.js"></script>
</body>
</html>