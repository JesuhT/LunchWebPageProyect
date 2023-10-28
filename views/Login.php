<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="plugins/sweetalert2.min.css">
</head>
<body>
    
    <div class="container" id="main">
        <div class="Sign-Up">
            <form action="#" method="post">
                <h1>Crear cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>Usar email para registrarse</p>
                <input type="email" name="email" placeholder="Correo electrónico" >
                <input type="password" name="pswd" placeholder="Contraseña" required="">
                <input type="password" name="R_pswd" placeholder="Confirmar contraseña" required="">
                <button>Registrarse</button>
            </form>
        </div>
        <div class="Sign-In">
            <form id="formLogin" action="#" method="post">
                <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>Usar tu cuenta</p>
                <input id="Email" type="email" name="email" placeholder="Correo electrónico" >
                <input id="Contraseña" type="password" name="pswd" placeholder="Contraseña" >
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Ingresar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Bienvenido</h1>
                    <p>Inicia un nuevo camino con nosotros</p>
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>¡Hola!</h1>
                    <p>Que gusto tenerte de vuelta</p>
                    <button id="signUp">Log In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="plugins/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/log_in.js"></script>
</body>
</html>