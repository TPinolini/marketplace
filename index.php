<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets\css\estilos.css">
</head>

<body>

    <main>
        <!-- <div class="navbar">
            <img src="images/5ae21c0026c97415d3213553.png" class="logo">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div> -->
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
                <div class="contenedor__login-register">
                    <form action="" class="formulario__login">
                        <h2>Iniciar sesion</h2>
                        <input type="text" placeholder="Correo electronico">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                        <div class="content">
                            <div class="social-text">
                                <p>O ingrese con redes sociales</p>
                            </div>
                            <div class="social-media">
                                <a href="" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <!--Register-->
                <form action="alta.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="assets\js\script.js"></script>
</body>

</html>