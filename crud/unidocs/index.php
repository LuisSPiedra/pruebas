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
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" class="formulario__login" method="post">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico/Matricula" name="username" required>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <button name="iniciar">Entrar</button>
                    </form>
                    <p id="error-message"></p>
                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" >
                        <input type="text" placeholder="Correo Electronico">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button >Regístrarse</button>
                    </form>
                    <script>
                        function login() {
                            const username = document.getElementById('username').value;
                            const password = document.getElementById('password').value;
                    
                            // Realizar solicitud POST al servidor
                            fetch('http://localhost:8080/univerdocumentos/login', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ username, password }),
                            })
                            .then(response => response.text())
                            .then(result => alert(result))
                            .catch(error => console.error('Error:', error));
                        }
                      </script>
                    <p id="error-message"></p>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>